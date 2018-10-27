@extends('layouts.master')

@section('title')
    User profile
@endsection

@section('content')
    <div class="row my-4">
        <div class="col-md-8 offset-md-2 ">
            <h1>User profile</h1>
            <hr>
            <h2>My orders:</h2>

            @foreach($orders as $order)
                <div class="card my-2">
                    
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($order->cart->items as $item)
                                <li class="list-group-item">
                                    <span class="badge badge-info float-right m-1">${{ $item['price'] }}</span>
                                    {{ $item['item'] ['title'] }} | {{ $item['qty'] }} Units
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    
                    <div class="card-header">
                        <strong>Total price: ${{ $order->cart->totalPrice }}</strong>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection