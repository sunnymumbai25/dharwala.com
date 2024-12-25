<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status',
        'delivery_address_id',
        'payment_method',
        'total_price',
        'created_at',
        'updated_at',
    ];

    /**
     * Relationship: An order belongs to a user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    /**
     * Relationship: An order can have many items.
     */
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    /**
     * Relationship: An order belongs to a delivery address.
     */
    public function deliveryAddress()
    {
        return $this->belongsTo(DeliveryAddress::class, 'delivery_address_id');
    }
    /**
     * Relationship: An order can have one payment.
     */
    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    /**
     * Relationship: An order can have many products (through a pivot table).
     */
    public function products()
    {
        return $this->belongsToMany(Product::class)
                    ->withPivot('quantity', 'price')
                    ->withTimestamps();
    }
        /**
     * Calculate total price for the order based on its items.
     */
    public function calculateTotal()
    {
        return $this->orderItems->sum(function ($item) {
            return $item->quantity * $item->price;
        });
    }

    /**
     * Get formatted total price for the order.
     */
    public function getFormattedTotalAttribute()
    {
        return number_format($this->total, 2);
    }

}
