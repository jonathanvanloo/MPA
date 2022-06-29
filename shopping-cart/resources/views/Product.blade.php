@extends('Layout')

@section('title')
    Shopping Cart
@endsection

@section('content')
    <div class="text-center ">¶
        <img src="https://cdn.webshopapp.com/shops/297404/files/350382788/800x1024x1/glock-17-gen4.jpg"
             class="img-responsive">
        <div class="caption">
{{--            <h3>{{ $product->title }}</h3>--}}
{{--            <p class="description">{{ $product->description }}</p>--}}
            <div class="footer">
{{--                <div class="float-left price">{{ $product->price }}</div>--}}
                <a href="#" class="btn btn-success float-right" role="button">Add to Cart</a>
            </div>
            <a href="/"><h3>Home</h3></a>
        </div>
    </div>
@endsection
