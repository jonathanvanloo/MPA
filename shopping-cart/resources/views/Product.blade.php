@extends('Layout')

@section('title')
    Shopping Cart
@endsection

@section('content')
    <a href="/category/{{ $product->category->id }}">{{ $product->category->name }}</a>
    <div class="text-center ">
        <img src="{{ $product->img }}" class="img-responsive">
        <div class="caption">
            <h3>{{ $product->title }}</h3>
            <p class="description">{{ $product->description }}</p>
            <div class="footer">
                <div class="float-left price">€{{ $product->price }}</div>
                <a href="{{ route('addToCart', ['id' => $product->id]) }}" class="btn btn-success float-right" role="button">Add to Cart</a>
            </div>
            <a href="/"><h3>Home</h3></a>
        </div>
    </div>
@endsection
