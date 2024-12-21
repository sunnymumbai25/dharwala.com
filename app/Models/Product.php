<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'slug', 
        'description', 
        'price', 
        'quantity', 
        'category_id'
    ];

    // Product is in many wishlists
    public function wishedBy()
    {
        return $this->hasMany(Wishlist::class);
    }
}
