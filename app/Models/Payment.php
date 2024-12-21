<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'payment_method',
        'payment_status',
        'transaction_id',
        'amount',
    ];

    /**
     * Relationship: A payment belongs to an order.
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
