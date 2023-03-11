@extends('layouts.app')

@section('title', 'Productos')

@section('content')

<main>
<div class="container">
    <div class="py-3 h-100">
        <div class="card">
            <div class="card-body p-0">
                <div class="row g-0 d-flex justify-content-center">
                    <div class="col-10 col-sm-10 mb-5">

                        <!-- Titulo -->
                        <h1 class="fw-bold mb-4 pt-5 text-start">{{$pedido->id}}</h1>
                        <h4 class="mb-3 text-uppercase"><span class="fw-bold text-primary text-capitalize">Estado: </span>{{$pedido->estado}}</h4>
                        <h4 class="mb-3"><span class="fw-bold text-primary">Fecha reserva: </span>{{$pedido->fecha_reserva}}</>
                        <h4 class="mb-3"><span class="fw-bold text-primary">Fecha recogida: </span>{{$pedido->fecha_recogida}}</>
                        <h4 class="mb-3"><span class="fw-bold text-primary">Importe total: </span>{{$pedido->importe_total}}</h4>
                        <h4 class="mb-3"><span class="fw-bold text-primary">Cliente: </span>{{$pedido->cliente->fullName()}}</h4>

                    </div>
                </div>

                <div class="row g-0">
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
                        @foreach ($pedprod as $pd => $p)
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
                    </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
@endsection
