@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')
    @if(Session::has('cart'))
        <div class="row my-2">
            <div class="col-sm-6 col-md-6 offset-md-3 offset-sm-3">
                <ul class="list-group list-group-flush">
                    @foreach ($products as $product)
                        <li class="list-group-item">
                            <span class="badge badge-secondary float-right m-3">{{ $product['qty'] }}</span>
                            <strong>{{ $product['item']['title'] }}</strong>
                            <span class="badge badge-primary">{{ $product['price'] }} $</span>

                            <div class="btn dropdown">
                                <button class="btn btn-outline-info btn-sm dropdown-toggle" data-toggle="dropdown">
                                    Reduce <span class="caret"></span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('product.reduceByOne', ['id' => $product['item']['id']]) }}">Reduce by 1</a>
                                    <a class="dropdown-item" href="{{ route('product.removeItem', ['id' => $product['item']['id']]) }}">Reduce All</a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-6 offset-md-3 offset-sm-3">
                <strong>Total: {{ $totalPrice }}</strong>    
            </div>
        </div>

        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 offset-md-3 offset-sm-3">
                <a href="{{ route('checkout') }}" type="button" class="btn btn-success">Checkout</a>           
            </div>
        </div>
    @else
        <div class="row my-4">
            <div class="col-sm-6 col-md-4 offset-md-4 offset-sm-3">
                <h2>No items in Cart!</h2>
            </div>
        </div>
    @endif
@endsection