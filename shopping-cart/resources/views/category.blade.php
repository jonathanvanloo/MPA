@extends('Layout')

@section('title')
    Shopping Cart
@endsection

@section('content')
    <div class="row">
        @foreach($product as $product)
            <div class="col-sm-6 col-md-4 border">
                <a href="/category/{{ $product->category->id }}"><h5>{{ $product->category->name }}</h5></a>
                <div class="thumbnail">
                    <img src="{{ $product->img }}" class="img-responsive" alt="...">
                    <div class="caption">
                        <h3><a href="/product/{{ $product->id }}">{{ $product->title }}</a></h3>
                        <p class="description">{{ $product->description }}</p>
                        <div class="footer">
                            <div class="float-left price">€{{ $product->price }}</div>
                            <a href="{{ route('addToCart', ['id' => $product->id]) }}"
                               class="btn btn-success float-right" role="button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
