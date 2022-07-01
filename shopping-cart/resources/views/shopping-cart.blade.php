@extends('Layout')

@section('title')
    Shopping Cart
@endsection

@section('content')
    @if(\Illuminate\Support\Facades\Session::has('cart'))
    <div class="row">
        <div class="col-ms-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <ul class="list-group">
                @foreach($products as $product)
                    <li class="list-group-item">
                        <span class="bage">{{ $product['qty'] }}</span>
                        <strong>{{ $product['item']['title'] }}</strong>
                        <span class="label label-success">{{ $product['price'] }}</span>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-togle="dropdown">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">delete one</a></li>
                                <li><a href="#">delete all</a></li>
                            </ul>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-ms-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <strong>Total: {{ $totalPrice }}</strong>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-ms-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <button type="button" class="btn btn-success">Checkout</button>
        </div>
    </div>
    @else
        <div class="row">
            <div class="col-ms-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>cart is empty</h2>
            </div>
        </div>
    @endif
@endsection
