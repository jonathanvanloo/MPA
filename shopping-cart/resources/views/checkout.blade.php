@extends('Layout')

@section('title')
    Shopping Cart
@endsection

@section('content')
    <div class="row">
        <h1>Checkout</h1>
        <h4>Your Total: €{{ $total }}</h4>
        <form action="{{ route('checkout') }}" method="post" id="checkout-form">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required name="name">
                </div>
            </div>
            <div class="mb-3">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" placeholder="1234 Main St" required name="address">
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="cc-name">Name on card</label>
                    <input type="text" class="form-control" id="cc-name" placeholder="" required>
                    <small class="text-muted">Full name as displayed on card</small>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="cc-number">Credit card number</label>
                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="cc-expiration">Expiration</label>
                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="cc-cvv">CVV</label>
                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                </div>
            </div>
            <hr class="mb-4">
            {{ csrf_field() }}
            <button type="submit" class="btn btn-success">Buy now</button>
        </form>
    </div>
@endsection
