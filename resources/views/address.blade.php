@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Select a Delivery Address</h3>
    <!-- <form action=" route('checkout.confirm') }}" method="POST">
    @csrf -->
        <div class="card mb-3">
            @foreach($addresses as $address)
                <div class="card-body">
                    <div class="form-check">
                        <input 
                            class="form-check-input" 
                            type="radio" 
                            name="delivery_address_id" 
                            id="address_{{ $address->id }}" 
                            value="{{ $address->id }}" 
                            required
                        >
                        <label class="form-check-label" >
                            <strong>{{ $address->name }}</strong><br>
                            {{ $address->address_line_1 }}<br>
                            @if($address->address_line_2)
                                {{ $address->address_line_2 }}<br>
                            @endif
                            {{ $address->city }}, {{ $address->state }}<br>
                            {{ $address->postal_code }}, {{ $address->country }}<br>
                            <strong>Phone:</strong> {{ $address->phone }}
                        </label>
                    </div>
                </div>
                <hr>
            @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Confirm Address</button>
        <a href="{{ route('add-address') }}" class="btn btn-secondary">Add New Address</a>
        <!-- </form> -->

</div>

@endsection