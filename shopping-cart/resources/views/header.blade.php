<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('shop') }}">home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <div class="nav-item">
                <a class="nav-link" href="{{ route('shoppingCart') }}">Shopping cart
                <span class="badge">{{ \Illuminate\Support\Facades\Session::has('cart') ? \Illuminate\Support\Facades\Session::get('cart')->totalQtyProducts : '' }}</span>
                </a>
            </div>
        <div  class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Account
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">instellingen</a>
                    <a class="dropdown-item" href="#">logout</a>
                </div>
        </div>
    </div>
</nav>
