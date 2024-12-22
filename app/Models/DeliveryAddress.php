<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;  // Ensure the Product model is imported

class DeliveryAddress extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'address_line_1',
        'address_line_2',
        'city',
        'state',
        'postal_code',
        'country',
        'phone'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
