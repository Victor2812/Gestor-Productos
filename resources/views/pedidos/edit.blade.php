@extends('layouts.app')

@section('title', 'Editar producto')

@section('content')

<main>
<div class="container">
    <div class="py-3 h-100">
        
        <div class="card">
            <div class="card-body p-0">

                <!-- Formulario -->
                <div class="row g-0 d-flex justify-content-center">
                    <div class="col-10 col-sm-10">

                        <!-- Titulo -->
                        <h1 class="fw-bold mb-0 pt-5 text-start">Editar Estado Pedido</h1>
                    
                        <form method="POST" action="{{ route('pedidos.update', $pedido) }}" class="py-5">
                            @csrf
                            @method('put')
    
                            <div class="row d-flex justify-content-start g-0">
                                
                                <!-- Rol -->
                                <div class="col-12 col-sm-9 mb-2 pe-0 pe-sm-2">
                                    <label class="visually-hidden" for="estado">Estado</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="bi bi-pencil"></i>
                                        </div>
                                        <select name="estado" id="estado" class="form-control form-select text-uppercase">
                                        @foreach (App\Models\Pedidos::ESTADOS as $key => $estado )
                                            <option value="{{ $key }}" @if ($key === $pedido->estado) selected @endif>{{$estado }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                
                                <!-- Login Button -->
                                <div class="col-12 col-sm-3 mb-2 ps-0 ps-sm-2">
                                    <button class="login-btn btn-primary">
                                        {{ __('Editar') }}
                                    </button>
                                </div>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>

@endsection
