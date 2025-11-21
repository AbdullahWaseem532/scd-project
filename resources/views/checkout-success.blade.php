@extends('layouts.app')

@section('title', 'Order Successful')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card text-center">
                <div class="card-body py-5">
                    <div class="mb-4">
                        <i class="fas fa-check-circle text-success" style="font-size: 4rem;"></i>
                    </div>
                    
                    <h1 class="card-title">Order Successful!</h1>
                    
                    <p class="card-text mt-3">
                        Thank you for your purchase. Your order has been received successfully.
                    </p>
                    
                    <p class="card-text">
                        You will receive a confirmation email shortly with your order details.
                    </p>

                    <div class="mt-4">
                        <a href="{{ route('products.index') }}" class="btn btn-primary">
                            Continue Shopping
                        </a>
                        <a href="{{ route('home') }}" class="btn btn-outline-secondary">
                            Go to Homepage
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection