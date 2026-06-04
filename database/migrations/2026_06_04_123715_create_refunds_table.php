<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('refunds', function (Blueprint $table) {
            $table->id();

            $table->foreignId('transaction_id')->constrained()->cascadeOnDelete();

            $table->string('refund_reference')->nullable(); // gateway refund ID
            $table->decimal('amount', 12, 2);               // refund amount
            $table->string('reason')->nullable();           // reason for refund

            $table->enum('status', ['pending','processing','completed','failed'])->default('pending');

            $table->enum('initiated_by', ['admin','system','gateway'])->default('admin');
            $table->foreignId('initiated_by_user_id')->nullable()->constrained('users')->nullOnDelete();

            $table->timestamp('processed_at')->nullable();
            $table->text('notes')->nullable();
            $table->json('gateway_response')->nullable();

            $table->timestamps();

            $table->index('status');
            $table->index('transaction_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('refunds');
    }
};
