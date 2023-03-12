@extends('layouts.app')

@section('title', 'Editar categoria')

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
                        <h1 class="fw-bold mb-0 pt-5 text-start">Nueva Categoría</h1>
                    
                        <form method="POST" action="{{ route('categorias.update', [$categoria]) }}" class="py-5"> 
                            @csrf
                            @if(isset($ruta))
                                <input type="hidden" name="ruta" value="{{ $ruta }} " />
                            @endif
                            <div class="row d-flex justify-content-start g-0">

                                <!-- Nombre -->
                                <div class="col-12 col-sm-5 mb-2 pe-0 pe-sm-2">
                                    <label class="visually-hidden" for="name" :value="__('Name')">Nombre</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="bi bi-pencil"></i>
                                        </div>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" value="{{$categoria->name}}">
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div> 
                                </div>

                                <!-- Categoría -->
                                <div class="col-12 col-sm-4 mb-2 px-0 px-sm-2">
                                    <label class="visually-hidden" for="rol_id">Escoge la categoríaa</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="bi bi-tag"></i>
                                        </div>
                                        <select name="categoria_id" id="categoria_id" class="form-control form-select">
                                            <option value="">Sin categoria padre</option>
                                            @foreach($categorias as $categoria)
                                            <option value="{{ $categoria->id }}" {{ $categoria->id == $categoria_padre->id ? 'selected' : '' }}>
                                                {{ $categoria->name }}
                                            </option>
                                            @endforeach 
                                        </select>
                                    </div>
                                </div>
                            
                                <!-- Button -->
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