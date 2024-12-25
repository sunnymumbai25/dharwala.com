<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'name',
        'price',
        'quantity',
        'subtotal',
    ];

    /**
     * Relationship: An order item belongs to an order.
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * Relationship: An order item belongs to a product.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
     /**
     * Calculate the subtotal for the order item.
     *
     * @return float
     */
    public function calculateSubtotal()
    {
        return $this->quantity * $this->price;
    }

    /**
     * Set the subtotal attribute automatically when saving.
     */
    protected static function booted()
    {
        static::saving(function ($orderItem) {
            $orderItem->subtotal = $orderItem->calculateSubtotal();
        });
    }
}
