@extends('Layout')

@section('title')
    Shopping Cart
@endsection

@section('content')
{{--    @foreach($products as $productChunk)--}}
    <div class="row">
        <div class="col-sm-6 col-md-4 border">
            <div class="thumbnail">
                <img src="https://cdn.webshopapp.com/shops/297404/files/350382788/800x1024x1/glock-17-gen4.jpg" class="img-responsive" alt="...">
                <div class="caption">
                    <h3><a href="/products/{{ $product->id }}">{{ $product->title }}</a></h3>
                    <p class="description">{{ $product->description }}</p>
                    <div class="footer">
                        <div class="float-left price">{{ $product->price }}</div>
                        <a href="#" class="btn btn-success float-right" role="button">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
