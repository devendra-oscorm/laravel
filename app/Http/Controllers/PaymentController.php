<?php

namespace App\Http\Controllers;

use App\Models\Refund;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    /* ══════════════════════════════════════════════
     | TRANSACTIONS – list
     ══════════════════════════════════════════════ */
    public function index(Request $request)
    {
        $query = Transaction::with('user')->latest();

        // Filters
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }
        if ($request->filled('gateway')) {
            $query->where('gateway', $request->gateway);
        }
        if ($request->filled('payment_method')) {
            $query->where('payment_method', $request->payment_method);
        }
        if ($request->filled('booking_type')) {
            $query->where('booking_type', $request->booking_type);
        }
        if ($request->filled('suspicious') && $request->suspicious === '1') {
            $query->where('is_suspicious', true);
        }
        if ($request->filled('search')) {
            $s = $request->search;
            $query->where(function ($q) use ($s) {
                $q->where('gateway_payment_id', 'like', "%$s%")
                  ->orWhere('gateway_order_id', 'like', "%$s%")
                  ->orWhere('customer_name', 'like', "%$s%")
                  ->orWhere('customer_email', 'like', "%$s%")
                  ->orWhere('booking_id', 'like', "%$s%");
            });
        }
        if ($request->filled('date_from')) {
            try {
                $from = \Carbon\Carbon::createFromFormat('d-m-Y', $request->date_from)->startOfDay();
                $query->whereDate('created_at', '>=', $from);
            } catch (\Exception $e) {
                $query->whereDate('created_at', '>=', $request->date_from);
            }
        }
        if ($request->filled('date_to')) {
            try {
                $to = \Carbon\Carbon::createFromFormat('d-m-Y', $request->date_to)->endOfDay();
                $query->whereDate('created_at', '<=', $to);
            } catch (\Exception $e) {
                $query->whereDate('created_at', '<=', $request->date_to);
            }
        }

        $transactions = $query->paginate(20)->withQueryString();

        // Summary stats
        $stats = [
            'total'       => Transaction::count(),
            'captured'    => Transaction::where('status', 'captured')->count(),
            'pending'     => Transaction::where('status', 'pending')->count(),
            'failed'      => Transaction::where('status', 'failed')->count(),
            'flagged'     => Transaction::where('is_suspicious', true)->count(),
            'revenue'     => Transaction::where('status', 'captured')->sum('amount'),
            'refunded'    => Transaction::whereIn('status', ['refunded','partially_refunded'])->count(),
        ];

        return view('admin.payments.index', compact('transactions', 'stats'));
    }

    /* ══════════════════════════════════════════════
     | TRANSACTION DETAIL
     ══════════════════════════════════════════════ */
    public function show(Transaction $transaction)
    {
        $transaction->load(['user', 'refunds.initiatedBy']);
        return view('admin.payments.show', compact('transaction'));
    }

    /* ══════════════════════════════════════════════
     | MANUAL REFUND
     ══════════════════════════════════════════════ */
    public function initiateRefund(Request $request, Transaction $transaction)
    {
        $request->validate([
            'amount' => "required|numeric|min:0.01|max:{$transaction->amount}",
            'reason' => 'required|string|max:500',
        ]);

        // Prevent refund if already fully refunded or failed
        if (in_array($transaction->status, ['failed', 'refunded'])) {
            return back()->with('error', 'This transaction cannot be refunded.');
        }

        DB::transaction(function () use ($request, $transaction) {
            $refund = Refund::create([
                'transaction_id'       => $transaction->id,
                'amount'               => $request->amount,
                'reason'               => $request->reason,
                'status'               => 'pending',
                'initiated_by'         => 'admin',
                'initiated_by_user_id' => Auth::guard('admin')->id(),
                'notes'                => $request->notes,
            ]);

            // Update transaction status
            $totalRefunded = $transaction->totalRefunded() + (float) $request->amount;
            $newStatus = $totalRefunded >= (float) $transaction->amount ? 'refunded' : 'partially_refunded';
            $transaction->update(['status' => $newStatus]);
        });

        return back()->with('success', 'Refund of ₹' . number_format($request->amount, 2) . ' initiated successfully.');
    }

    /* ══════════════════════════════════════════════
     | FLAG / UNFLAG SUSPICIOUS TRANSACTION
     ══════════════════════════════════════════════ */
    public function toggleFlag(Request $request, Transaction $transaction)
    {
        $request->validate([
            'reason' => 'nullable|string|max:500',
        ]);

        $transaction->update([
            'is_suspicious'    => !$transaction->is_suspicious,
            'suspicious_reason' => $transaction->is_suspicious ? null : $request->reason,
            'status'           => !$transaction->is_suspicious ? 'flagged' : ($transaction->status === 'flagged' ? 'captured' : $transaction->status),
        ]);

        $msg = $transaction->is_suspicious ? 'Transaction flagged as suspicious.' : 'Flag removed from transaction.';
        return back()->with('success', $msg);
    }

    /* ══════════════════════════════════════════════
     | RECONCILIATION REPORT
     ══════════════════════════════════════════════ */
    public function reconciliation(Request $request)
    {
        $query = Transaction::where('gateway', 'razorpay')->latest();

        if ($request->filled('date_from')) {
            try {
                $from = \Carbon\Carbon::createFromFormat('d-m-Y', $request->date_from)->startOfDay();
                $query->whereDate('created_at', '>=', $from);
            } catch (\Exception $e) {
                $query->whereDate('created_at', '>=', $request->date_from);
            }
        }
        if ($request->filled('date_to')) {
            try {
                $to = \Carbon\Carbon::createFromFormat('d-m-Y', $request->date_to)->endOfDay();
                $query->whereDate('created_at', '<=', $to);
            } catch (\Exception $e) {
                $query->whereDate('created_at', '<=', $request->date_to);
            }
        }

        $transactions = $query->paginate(25)->withQueryString();

        $summary = Transaction::where('gateway', 'razorpay')
            ->select(
                DB::raw('COUNT(*) as total'),
                DB::raw('SUM(CASE WHEN status = "captured" THEN 1 ELSE 0 END) as captured'),
                DB::raw('SUM(CASE WHEN status = "captured" THEN amount ELSE 0 END) as captured_amount'),
                DB::raw('SUM(CASE WHEN status IN ("refunded","partially_refunded") THEN 1 ELSE 0 END) as refunded'),
                DB::raw('SUM(CASE WHEN is_reconciled = 1 THEN 1 ELSE 0 END) as reconciled'),
                DB::raw('SUM(CASE WHEN is_reconciled = 0 AND status = "captured" THEN 1 ELSE 0 END) as unreconciled')
            )->first();

        return view('admin.payments.reconciliation', compact('transactions', 'summary'));
    }

    /* ══════════════════════════════════════════════
     | MARK RECONCILED
     ══════════════════════════════════════════════ */
    public function markReconciled(Transaction $transaction)
    {
        $transaction->update([
            'is_reconciled' => true,
            'reconciled_at' => now(),
        ]);

        return back()->with('success', 'Transaction marked as reconciled.');
    }

    /* ══════════════════════════════════════════════
     | REFUNDS LIST
     ══════════════════════════════════════════════ */
    public function refunds(Request $request)
    {
        $refunds = Refund::with(['transaction', 'initiatedBy'])
            ->when($request->status, fn($q) => $q->where('status', $request->status))
            ->latest()
            ->paginate(20)
            ->withQueryString();

        $stats = [
            'pending'    => Refund::where('status', 'pending')->count(),
            'processing' => Refund::where('status', 'processing')->count(),
            'completed'  => Refund::where('status', 'completed')->count(),
            'failed'     => Refund::where('status', 'failed')->count(),
            'total_amt'  => Refund::where('status', 'completed')->sum('amount'),
        ];

        return view('admin.payments.refunds', compact('refunds', 'stats'));
    }

    /* ══════════════════════════════════════════════
     | UPDATE REFUND STATUS
     ══════════════════════════════════════════════ */
    public function updateRefundStatus(Request $request, Refund $refund)
    {
        $request->validate(['status' => 'required|in:pending,processing,completed,failed']);

        $refund->update([
            'status'       => $request->status,
            'processed_at' => in_array($request->status, ['completed','failed']) ? now() : null,
        ]);

        return back()->with('success', 'Refund status updated to ' . ucfirst($request->status) . '.');
    }
}
