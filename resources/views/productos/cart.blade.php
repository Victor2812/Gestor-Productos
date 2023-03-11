@extends('layouts.app')

@section('title', 'Mi Carrito')

@section('content')
  <div class="container">
    <div class="py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12">
          <div class="card card-registration card-registration-2" style="border-radius: 15px;">
            <div class="card-body p-0">

              <!-- SHOPPING CART -->
              <div class="row g-0">
                <ul class="col-lg-8">
                  <div class="p-5">
                    <div class="d-flex justify-content-between align-items-center mb-5">
                      <h1 class="fw-bold mb-0 text-black">Carrito</h1>
                      <h6 class="mb-0 text-muted">{{ count((array) session('cart')) }} items</h6>
                    </div>

                    @php $total = 0 @endphp
                    @foreach((array) session('cart') as $id => $details)
                    @php $total += $details['precio'] * $details['quantity'] @endphp
                    @endforeach

                    <hr class="my-4">
                    
                    @if(session('cart'))
                        @foreach (session('cart') as $item => $details)
                          <li class="row mb-4 d-flex justify-content-between align-items-center" id="{{ $item }}">
                            <div class="col-md-2 col-lg-2 col-xl-2">
                                <img
                                src="{{ $details['image'] }}"
                                class="img-fluid rounded-3" alt="Cotton T-shirt">
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-3">
                                <h6 class="dropdown-cart-name">{{ $details['name'] }}</h6>
                                <h6 class="text-black mb-0">{{ $details['descrition'] }}</h6>
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                <button class="cont-btn btn-outline-primary" name="resta">
                                  <i class="bi bi-dash"></i>
                                </button>
        
                                <input id="{{ $item }}" min="0" name="quantity" value="{{ $details['quantity'] }}" type="number"
                                class="form-control form-control-sm cart-input text-center update-cart" />
        
                                <button class="cont-btn btn-outline-primary" name="suma">
                                  <i class="bi bi-plus"></i>
                                </button>
                            </div>
                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                <h6 class="fw-bold">{{ $details['precio'] * $details['quantity'] }}€</h6>
                            </div>
                            <div class="col-md-1 col-lg-1 col-xl-1 text-center remove-from-cart">
                              <button class="cont-btn btn-primary">
                                <i class="bi bi-trash3"></i>
                              </button>
                              
                            </div>
                          </li>
        
                            <hr class="my-4">
                        @endforeach
                    @endif

                    <div class="pt-5">
                      <h6 class="mb-0">
                        <a href="{{ route('shop') }}" class="cont-btn btn-primary">
                          <i class="bi bi-arrow-left"></i>
                        </a>
                      </h6>
                    </div>
                  </div>
                </ul>

                <!-- SUMMMARY -->
                <div class="col-lg-4 bg-grey">
                  <div class="p-5">
                    <h3 class="fw-bold mb-4 mt-2 pt-1">Recogida</h3>

                    <form action="{{route('pedido.store')}}" method="POST">
                      @csrf

                      <div class="col-12 mb-4 text-start">
                        <p>
                          Selecciona una fecha para recoger tu pedido. Recuerda que nuestras cocinas necesitan un mínimo de tres días para prepararlo y que no trabajamos los fines de semana.
                        </p>
                      </div>

                     <!-- Fecha -->
                      <div class="col-12 mb-2 ">
                          <label class="visually-hidden" for="name">Fecha recogida</label>
                          <div class="input-group">
                              <div class="input-group-text">
                                <i class="bi bi-exclamation-triangle"></i>
                              </div>
                              <input type="date" name="fecha" id="date1" class="form-control" min="{{ now()->addDays(3)->toDateString() }}" required>
                          </div> 
                      </div>

                      
                      
                    <hr class="my-4">
  
                      <div class="d-flex justify-content-between mb-3">
                        <h5 class="fw-bold">Total </h5>
                        <h5 class="fw-bold">{{ $total }}€</h5>
                      </div>

                    
                      @auth
                        <div class="d-flex justify-content-center">
                          <button type="submit" class="normal-btn btn-primary" data-mdb-ripple-color="dark" role="button">Pedir</a>
                        </div>
                        
                      @else
                        <div class="d-flex justify-content-center">
                          <a href="{{ route('register', ['ruta' => 'cart.index' ] ) }}" class="normal-btn btn-primary" role="button">Regístrate</a>
                        </div>
                      @endauth
                    </form>
  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

