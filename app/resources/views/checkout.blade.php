@extends('layouts.app')

@section('title', 'Checkout')

@section('content')
<div class="container mt-4">
    <h1>Checkout</h1>

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if(count($cart) > 0)
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Billing Information</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('checkout.process') }}" method="POST">
                            @csrf
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label">Full Name *</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email *</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number *</label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">Address *</label>
                                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control" id="city" name="city">
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="country" class="form-label">Country</label>
                                    <input type="text" class="form-control" id="country" name="country">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="zipcode" class="form-label">Zip Code</label>
                                    <input type="text" class="form-control" id="zipcode" name="zipcode">
                                </div>
                            </div>

                            <div class="card mt-4">
                                <div class="card-header">
                                    <h5>Payment Information</h5>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="card_number" class="form-label">Card Number</label>
                                        <input type="text" class="form-control" id="card_number" placeholder="1234 5678 9012 3456">
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="expiry" class="form-label">Expiry Date</label>
                                            <input type="text" class="form-control" id="expiry" placeholder="MM/YY">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="cvv" class="form-label">CVV</label>
                                            <input type="text" class="form-control" id="cvv" placeholder="123">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success btn-lg w-100 mt-4">
                                Place Order - ${{ $total }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Order Summary</h4>
                    </div>
                    <div class="card-body">
                        @foreach($cart as $item)
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div>
                                <h6>{{ $item['title'] }}</h6>
                                <small class="text-muted">by {{ $item['instructor'] }}</small>
                            </div>
                            <span>${{ $item['price'] }}</span>
                        </div>
                        <hr>
                        @endforeach

                        <div class="d-flex justify-content-between">
                            <strong>Total:</strong>
                            <strong>${{ $total }}</strong>
                        </div>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-body">
                        <a href="{{ route('cart.index') }}" class="btn btn-outline-secondary w-100">
                            ← Back to Cart
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="alert alert-info">
            Your cart is empty. <a href="{{ route('products.index') }}">Browse courses</a>
        </div>
    @endif
</div>
@endsection