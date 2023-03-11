@extends('layouts.app')

@section('title', 'Mis Pedidos')

@section('content')

<div class="container">
    <div class="py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12">
          <div class="card card-registration card-registration-2" style="border-radius: 15px;">
            <div class="card-body p-0">
                <div class="row g-0">
                    
                    <div class="d-inline-flex align-items-center mt-5 mx-4">
                        <h6 class="mb-0">
                            <a href="{{ route('pedido.mis-pedidos') }}" class="cont-btn btn-primary">
                                <i class="bi bi-arrow-left"></i>
                            </a>
                        </h6>
                    </div>

                    <ul class="col-lg-12">
                    <div class="p-5">
                        <hr class="my-2">    

                        <li class="row mb-2 d-flex justify-content-between align-items-center g-0">
                            <div class="col-2 text-center">
                                <span class="fw-bold">IMG</span>
                            </div>
                            <div class="col-2 text-center">
                                <span class="fw-bold">PRODUCTO</span>
                            </div>
                            <div class="col-1 text-center">
                                <span class="fw-bold">CANTIDAD</span>
                            </div>
                            <div class="col-3 text-center">
                                <span class="fw-bold">IMPORTE</span>
                            </div>
                        </li>
                        <hr class="mb-4">
                        @foreach ($pedido as $pd => $p)
                            <li class="row mb-4 d-flex justify-content-between align-items-center">
                                <div class="col-md-3 col-lg-2 col-xl-2">
                                    <img
                                    src="{{ $productos[$pd]->alt }}"
                                    class="img-fluid rounded-3" alt="Cotton T-shirt">
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                    <h6 class="dropdown-cart-name">{{ $productos[$pd]->name }}</h6>
                                    <h6 class="text-black mb-0"></h6>
                                </div>
                                <div class="col-md-2 col-lg-3 col-xl-1 d-flex">
                                    <h6 class="fw-bold">{{ $p->cantidad }}</h6>
                                </div>
                                <div class="col-md-2 col-lg-2 col-xl-2 offset-lg-1">
                                    <h6 class="fw-bold">{{ $p->precio }}€</h6>
                                </div>
                            </li>

                            <hr class="my-4">
                        @endforeach
                        <div class="d-flex justify-content-end">
                            <div class="fw-bold">TOTAL:</div>
                            <div class="fw-bold mx-4 pr-5">{{ $total->importe_total }}</div>
                        </div>
                    </div>
                    </ul>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection