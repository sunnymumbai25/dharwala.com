{{-- resources/views/order_confirmation.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Order Confirmation</h2>
    <h3>Order Details</h3>
    <p>Order ID: {{ $order->id }}</p>
    <p>Shipping Address: {{ $address->address_line_1 }},{{ $address->address_line_2 }}</p>
    <p>Billing Address: {{ $order->billing_address }}</p>

    <h3>Items</h3>
    <ul class="list-group">
        @foreach ($order->orderItems as $item)
        <li class="list-group-item">
            {{ $item->product->name }} - Quantity: {{ $item->quantity }} - Price: {{ $item->price }}
        </li>
        @endforeach
    </ul>
    <div class="mt-3">
        <strong>Total Price: {{ $order->total_price }}</strong>
    </div>

    <h3>Payment Status</h3>
    <p>{{ $order->payment_status }}</p>

    <a href="{{ route('home') }}" class="btn btn-primary">Back to Home</a>
</div>
@endsection