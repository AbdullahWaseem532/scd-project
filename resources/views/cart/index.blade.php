@extends('layouts.app')

@section('title', 'Shopping Cart')

@section('content')
    <div class="container mt-4">
        <h1>Shopping Cart</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (count($cart) > 0)
            <div class="row">
                <div class="col-md-8">
                    @foreach ($cart as $item)
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="{{ $item['image'] ?? 'https://via.placeholder.com/100' }}" class="img-fluid"
                                            alt="{{ $item['title'] }}">
                                    </div>
                                    <div class="col-md-6">
                                        <h5>{{ $item['title'] }}</h5>
                                        <p class="text-muted">Instructor: {{ $item['instructor'] }}</p>
                                    </div>
                                    <div class="col-md-3">
                                        <h5>${{ $item['price'] }}</h5>
                                        <a href="{{ route('cart.remove', $item['id']) }}"
                                            class="btn btn-danger btn-sm">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="mt-3">
                        <a href="{{ route('cart.clear') }}" class="btn btn-warning">Clear Cart</a>
                        <a href="{{ route('products.index') }}" class="btn btn-secondary">Continue Shopping</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4>Order Summary</h4>
                            <hr>
                            <p>Total: <strong>${{ $total }}</strong></p>
                            <!-- In cart.blade.php, replace the checkout button -->
                            <a href="{{ route('checkout') }}" class="btn btn-success btn-lg w-100">Proceed to Checkout</a>
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
