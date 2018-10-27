@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')
    <div class="row my-4">
        <div class="col-sm-8 col-md-4 offset-md-4 offset-sm-3">
            <h1>Checkout</h1>
            <h4>Your total: ${{ $total }}</h4>
            
            <div
                id="charge-error" 
                class="alert alert-danger {{ !Session::has('error') ? 'd-none' : '' }}">
                {{ Session::get('error') }}
            </div>
            
            <form action="{{ route('checkout') }}" method="post" id="checkout-form">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control" required name="name">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" id="address" class="form-control" required name="address">
                        </div>
                    </div>
                    <hr>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="card-name">Cart Holder Name</label>
                            <input type="text" id="card-name" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="card-number">Credit Card Number</label>
                            <input type="text" id="card-number" class="form-control" required>
                        </div>
                    </div>
                    <div class="container col-sm-12">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="card-expiry-month">Expiration Moth</label>
                                    <input type="text" id="card-expiry-month" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="card-expiry-year">Expiration Year</label>
                                    <input type="text" id="card-expiry-year" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="card-cvc">CVC</label>
                            <input type="text" id="card-cvc" class="form-control" required>
                        </div>
                    </div>
                </div>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-success">Buy now</button>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript" src="{{ URL::to('src/js/checkout.js') }}"></script>
@endsection