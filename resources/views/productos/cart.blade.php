@extends('layouts.app')

@section('title', 'Mi Carrito')

@section('body')
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
                      <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
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
                                <h6 class="text-muted">{{ $details['name'] }}</h6>
                                <h6 class="text-black mb-0">{{ $details['descrition'] }}</h6>
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                <button class="btn btn-link px-2 text-dark mx-1" name="resta">
                                <i class="bi bi-dash" style="color:black"></i>
                                </button>
        
                                <input id="{{ $item }}" min="0" name="quantity" value="{{ $details['quantity'] }}" type="number"
                                class="form-control form-control-sm update-cart" style="width: 3rem"/>
        
                                <button class="btn btn-link px-2" name="suma">
                                <i class="bi bi-plus" style="color:black"></i>
                                </button>
                            </div>
                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                <h6 class="mb-0">€ {{ $details['precio'] * $details['quantity'] }}</h6>
                            </div>
                            <div class="col-md-1 col-lg-1 col-xl-1 text-end remove-from-cart">
                              <i class="bi bi-trash3" style="color: black"></i>
                            </div>
                          </li>
        
                            <hr class="my-4">
                        @endforeach
                    @endif

                    <div class="pt-5">
                      <h6 class="mb-0"><a href="{{ route('shop') }}" class="text-body"><i
                            class="bi bi-arrow-left" style="color:black"></i></a></h6>
                    </div>
                  </div>
                </ul>

                <!-- SUMMMARY -->
                <div class="col-lg-4 bg-grey">
                  <div class="p-5">
                    <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                    <hr class="my-4">
  
                    <div class="d-flex justify-content-between mb-4">
                      <h5 class="text-uppercase">items {{ count((array) session('cart')) }}</h5>
                      <h5>€ {{ $total }}</h5>
                    </div>
  
                    <h5 class="text-uppercase mb-3">Shipping</h5>
  
                    <div class="mb-4 pb-2">
                      <select class="select">
                        <option value="1">Standard-Delivery- €5.00</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">Four</option>
                      </select>
                    </div>
  
                    <h5 class="text-uppercase mb-3">Give code</h5>
  
                    <div class="mb-5">
                      <div class="form-outline">
                        <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplea2">Enter your code</label>
                      </div>
                    </div>
  
                    <hr class="my-4">
  
                    <div class="d-flex justify-content-between mb-5">
                      <h5 class="text-uppercase">Total price</h5>
                      <h5>€ {{ $total }}</h5>
                    </div>
  
                    @auth
                      <a href="" class="btn btn-dark btn-block btn-lg" data-mdb-ripple-color="dark" role="button">Realizar pedido</a>
                    @else
                      <a href="{{ route('register', ['ruta' => 'cart.index' ] ) }}" class="btn btn-dark btn-block btn-lg" data-mdb-ripple-color="dark" role="button">Registrar</a>
                    @endauth
  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

