<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
    ];

    /**
     * Relationship: A cart item belongs to a user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relationship: A cart item belongs to a product.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }

}
