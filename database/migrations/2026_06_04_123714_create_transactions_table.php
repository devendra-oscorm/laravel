<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();

            // Gateway info
            $table->string('gateway')->default('razorpay'); // razorpay | payu
            $table->string('gateway_order_id')->nullable();   // Razorpay order_id / PayU txnid
            $table->string('gateway_payment_id')->nullable(); // Razorpay payment_id / PayU mihpayid
            $table->string('gateway_signature')->nullable();  // Razorpay signature

            // Booking reference
            $table->string('booking_type')->nullable();   // flight | hotel | bus | tour
            $table->string('booking_id')->nullable();      // internal booking reference

            // User
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->string('customer_name')->nullable();
            $table->string('customer_email')->nullable();
            $table->string('customer_phone')->nullable();

            // Amount
            $table->decimal('amount', 12, 2)->default(0);
            $table->string('currency', 10)->default('INR');
            $table->decimal('gateway_fee', 10, 2)->default(0);
            $table->decimal('tax_amount', 10, 2)->default(0);
            $table->decimal('net_amount', 12, 2)->default(0); // amount - gateway_fee

            // Payment method
            $table->string('payment_method')->nullable(); // card | upi | netbanking | wallet | emi

            // Status
            $table->enum('status', ['pending','captured','failed','refunded','partially_refunded','flagged'])
                  ->default('pending');

            // Flags
            $table->boolean('is_suspicious')->default(false);
            $table->text('suspicious_reason')->nullable();
            $table->boolean('is_reconciled')->default(false);
            $table->timestamp('reconciled_at')->nullable();

            // Raw gateway response (for audits)
            $table->json('gateway_response')->nullable();

            $table->text('notes')->nullable();
            $table->timestamps();

            // Indexes for fast lookups
            $table->index('status');
            $table->index('gateway');
            $table->index('is_suspicious');
            $table->index('gateway_payment_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
