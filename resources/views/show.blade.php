@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @php $cart = session('cart', []); Log::info('Cart contents on cart page:', $cart); @endphp
        <div class="col-md-6">
            <!-- Product Image -->
            <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid">
        </div>
        <div class="col-md-6">
            <!-- Product Details -->
            <h1>{{ $product->name }}</h1>
            <p>{{ $product->description }}</p>
            <h3>${{ number_format($product->price, 2) }}</h3>
            <!-- Add to Cart Form -->
            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number" name="quantity" id="quantity" class="form-control" value="1" min="1">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Add to Cart</button>
            </form>

            <!-- Success Message -->
            @if(session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
