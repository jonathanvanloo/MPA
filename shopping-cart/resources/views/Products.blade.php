@extends('Layout')

@section('title')
    Shopping Cart
@endsection

@section('content')
    @foreach($products->chunk(3) as $productChunk)
    <div class="row">
        @foreach($productChunk as $product)
        <div class="col-sm-6 col-md-4 border">
            <div class="thumbnail">
                <img src="{{ $product->img }}" class="img-responsive" alt="...">
                <div class="caption">
                    <h3><a href="/products/{{ $product->id }}">{{ $product->title }}</a></h3>
                    <p class="description">{{ $product->description }}</p>
                    <div class="footer">
                        <div class="float-left price">€{{ $product->price }}</div>
                        <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-success float-right" role="button">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach
@endsection
