
<header class="bg-white">
    <nav class="navbar navbar-expand-md shadow ">
        <div class="container">

            <!-- Logo -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="../imgs/logo-escuela.png" alt="Escuela Hosteleria" height="40px">
            </a>
            
            <!-- Boton Hamburguesa -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('shop') }}">Tienda</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('shop') }}">Pedidos</a>
                    </li>
                    
                    <li class="nav-item">
                        
                    </li>
                </ul>
            </div>
            <!-- End Menu -->

            <!-- Botones Derecha -->
            <div class="d-flex">

                <!-- Carrito -->
                <div class="dropstart px-3">
                    <!-- CART ICON DROPDOWN MENU -->
                    <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="bi bi-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                    </button>
                        
                    <!-- Dropdown Cart Menu -->
                    <div class="dropdown-menu">

                        <!-- Item Cart Menu -->
                        @if(session('cart'))
                            @foreach(session('cart') as $id => $details)
                                @php $src = $details['image'] @endphp
                                <div class="row cart-detail mb-3">
                                    <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                        <img src="{{ $src }}" alt="{{ $src }}" class="img-fluid rounded-2"/>
                                    </div>
                                    <div class="col-lg-8 col-sm-8 col-8 cart-detail-product d-flex justify-content-between">
                                        <p class="dropdown-cart-name mb-0">{{ $details['name'] }}</p>
                                        <span class="px-2">{{ $details['quantity'] }}uds.</span>
                                        <span class="dropdown-cart-price text-primary px-2">{{ $details['precio'] }}€</span> 
                                    </div>
                                </div>
                                <hr>
                            @endforeach
                        @endif

                        <div class="row total-header-section d-flex justify-content-between">
                            
                            @php $total = 0 @endphp
                            @foreach((array) session('cart') as $id => $details)
                                @php $total += $details['precio'] * $details['quantity'] @endphp
                            @endforeach

                            <div class="col-6 text-start checkout">
                                <a href="{{ route('cart.index') }}" class="dropdown-cart-btn btn-outline-primary btn-block">Ver Carrito</a>
                            </div>

                            <div class="col-6 text-end">
                                <p class="dropdown-cart-total-price">Total: <span class="text-primary">{{ $total }}€</span></p>
                            </div>
    
                        </div>
                    </div>
                </div>
                <!-- End Carrito -->

                <!-- Login -->
                <div>
                    <a href="#">Iniciar Sesión</a>
                </div>
                <!-- End Login -->

            </div>
            <!-- End Botones Derecha -->

        </div>
    </nav>
</header>


