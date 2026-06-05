<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Refund extends Model
{
    protected $fillable = [
        'transaction_id', 'refund_reference', 'amount', 'reason',
        'status', 'initiated_by', 'initiated_by_user_id',
        'processed_at', 'notes', 'gateway_response',
    ];

    protected $casts = [
        'gateway_response' => 'array',
        'processed_at'     => 'datetime',
        'amount'           => 'decimal:2',
    ];

    public function transaction(): BelongsTo
    {
        return $this->belongsTo(Transaction::class);
    }

    public function initiatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'initiated_by_user_id');
    }
}
