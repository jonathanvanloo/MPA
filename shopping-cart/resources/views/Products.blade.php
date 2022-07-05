@extends('Layout')

@section('title')
    Shopping Cart
@endsection

@section('content')
    @if(\Illuminate\Support\Facades\Session::has('success'))
        <div class="row">
            <div class="col-ms-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                <div id="charge-massage" class="alert alert-success">
                    {{ \Illuminate\Support\Facades\Session::get('success') }}
                </div>
            </div>
        </div>
    @endif
    @foreach($products->chunk(3) as $productChunk)
        <div class="row">
        @foreach($productChunk as $product)
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
    @endforeach
@endsection
