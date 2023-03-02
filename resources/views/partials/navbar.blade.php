<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            E-COMMERCE TIENDA
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('shop') }}">TIENDA</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <!-- CART ICON DROPDOWN MENU -->
                        <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="bi bi-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                        </button>
                            
                        <!-- Dropdown Cart Menu -->
                        <div class="dropdown-menu">
                            <div class="row total-header-section">
                                <div class="col-lg-6 col-sm-6 col-6">
                                    <i class="bi bi-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                                </div>

                                @php $total = 0 @endphp
                                @foreach((array) session('cart') as $id => $details)
                                    @php $total += $details['precio'] * $details['quantity'] @endphp
                                @endforeach

                                <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                                    <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                                </div>
                            </div>

                            @if(session('cart'))
                                @foreach(session('cart') as $id => $details)
                                    <div class="row cart-detail">
                                        <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                            <img src="{{ $details['image'] }}" />
                                        </div>
                                        <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                            <p>{{ $details['name'] }}</p>
                                            <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                    <a href="{{ route('cart.index') }}" class="btn btn-primary btn-block">View all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
