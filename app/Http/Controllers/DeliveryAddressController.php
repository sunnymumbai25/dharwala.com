<?php

namespace App\Http\Controllers;

use App\Models\DeliveryAddress;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeliveryAddressController extends Controller
{
    public function index()
    {
        $addresses = auth()->user()->deliveryAddresses;

        return view('address', compact('addresses'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address_line_1' => 'required|string|max:255',
            'address_line_2' => 'nullable|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'postal_code' => 'required|string|max:10',
            'country' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
        ]);

        $validated['user_id'] = auth()->id();

        DeliveryAddress::create($validated);

        return redirect()->back()->with('success', 'Delivery address saved successfully!');
    }
}
