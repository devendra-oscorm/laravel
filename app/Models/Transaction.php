<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    protected $fillable = [
        'gateway', 'gateway_order_id', 'gateway_payment_id', 'gateway_signature',
        'booking_type', 'booking_id',
        'user_id', 'customer_name', 'customer_email', 'customer_phone',
        'amount', 'currency', 'gateway_fee', 'tax_amount', 'net_amount',
        'payment_method', 'status',
        'is_suspicious', 'suspicious_reason', 'is_reconciled', 'reconciled_at',
        'gateway_response', 'notes',
    ];

    protected $casts = [
        'is_suspicious'    => 'boolean',
        'is_reconciled'    => 'boolean',
        'gateway_response' => 'array',
        'reconciled_at'    => 'datetime',
        'amount'           => 'decimal:2',
        'gateway_fee'      => 'decimal:2',
        'tax_amount'       => 'decimal:2',
        'net_amount'       => 'decimal:2',
    ];

    /* ── Relations ─────────────────────────────────── */

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function refunds(): HasMany
    {
        return $this->hasMany(Refund::class);
    }

    /* ── Helpers ────────────────────────────────────── */

    public function totalRefunded(): float
    {
        return (float) $this->refunds()->where('status', 'completed')->sum('amount');
    }

    public function statusBadge(): string
    {
        return match($this->status) {
            'captured'            => '<span class="badge badge-soft-success">Captured</span>',
            'pending'             => '<span class="badge badge-soft-warning">Pending</span>',
            'failed'              => '<span class="badge badge-soft-danger">Failed</span>',
            'refunded'            => '<span class="badge badge-soft-info">Refunded</span>',
            'partially_refunded'  => '<span class="badge badge-soft-secondary">Part. Refunded</span>',
            'flagged'             => '<span class="badge badge-soft-danger"><i class="ti ti-flag me-1"></i>Flagged</span>',
            default               => '<span class="badge badge-soft-secondary">' . ucfirst($this->status) . '</span>',
        };
    }
}
