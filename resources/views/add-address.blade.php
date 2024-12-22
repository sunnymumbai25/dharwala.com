@extends('layouts.app')

@section('content')

<form action="{{ route('delivery.address.save') }}" method="POST">
    @csrf
    <div>
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="address_line_1">Address Line 1</label>
        <input type="text" id="address_line_1" name="address_line_1" required>
    </div>
    <div>
        <label for="address_line_2">Address Line 2</label>
        <input type="text" id="address_line_2" name="address_line_2">
    </div>
    <div>
        <label for="city">City</label>
        <input type="text" id="city" name="city" required>
    </div>
    <div>
        <label for="state">State</label>
        <input type="text" id="state" name="state" required>
    </div>
    <div>
        <label for="postal_code">Postal Code</label>
        <input type="text" id="postal_code" name="postal_code" required>
    </div>
    <div>
        <label for="country">Country</label>
        <input type="text" id="country" name="country" required>
    </div>
    <div>
        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" required>
    </div>
    <button type="submit">Save Address</button>
</form>

@endsection