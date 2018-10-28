@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')

    @if(Session::has('success'))
    <div class="row my-3">
        <div class="col-sm-6 col-md-4 offset-md-4 offset-sm-3">
            <div id="charge-message" class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        </div>
    </div>
    @elseif(Session::has('error'))
    <div class="row my-3">
        <div class="col-sm-6 col-md-4 offset-md-4 offset-sm-3">
            <div id="charge-warning" class="alert alert-warning">
                {{ Session::get('error') }}
            </div>
        </div>
    </div>
    @endif

    @foreach($products->chunk(3) as $productChunk)
    <div class="row my-3">
        @foreach($productChunk as $product)
        <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img  src="{{$product->imagePath}}"
                        alt="..."
                        class="rounded mx-auto d-block"
                        class="img-fluid"
                        alt="Responsive image"
                        style="height: 250px; width: 250px;">

                  <div class="caption">
                    <h3>{{$product->title}}</h3>

                    <div>
                        @if($product->stock <= 3 && $product->stock > 0)
                        <span class="badge badge-warning">Low in stock: {{$product->stock}} avaible</span>
                        @elseif($product->stock == 0)
                        <span class="badge badge-danger">Out of stock: {{$product->stock}} avaible</span>
                        @else
                        <span class="badge badge-primary">In Stock: {{$product->stock}} avaible</span>
                        @endif
                    </div>
                    
                    
                    <p class="description">
                    {{$product->description}}
                    </p>
            
                    <div>
                        <div
                            class="float-left price">
                            $ {{$product->price}}
                        </div>
                        <a  href="{{ route('product.addToCart',['id' => $product->id]) }}" 
                            class="btn btn-success float-right"
                            role="button">
                        Add to Cart</a>
                    </div>
            
                  </div>
                </div>
        </div>
        @endforeach
    </div>
    @endforeach

@endsection