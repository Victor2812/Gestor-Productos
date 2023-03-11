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
                        <h1 class="fw-bold mb-0 pt-5 text-start">Nuevo Producto</h1>
                    
                        <form action="{{ route('productos.store') }}" method="post" enctype="multipart/form-data" class="py-5">
                            @csrf
                            @if(isset($ruta))
                                <input type="hidden" name="ruta" value="{{ $ruta }} " />
                            @endif
                            <div class="row d-flex justify-content-start g-0">

                                <!-- Nombre -->
                                <div class="col-12 col-sm-6 mb-2 pe-0 pe-sm-2">
                                    <label class="visually-hidden" for="name" :value="__('Name')">Nombre</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="bi bi-pencil"></i>
                                        </div>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" :value="old('name')" required autofocus autocomplete="name">
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div> 
                                </div>

                                
                                <!-- Categoría -->
                                <div class="col-12 col-sm-6 mb-2 ps-0 ps-sm-2">
                                    <label class="visually-hidden" for="categoria_id">Escoge la categoria</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="bi bi-tag"></i>
                                        </div>
                                        <select name="categoria_id" id="categoria_id" class="form-control form-select">
                                        @foreach($categorias as $categoria)
                                            <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>

                                <!-- Tipo -->
                                <div class="col-12 col-sm-4 mb-2 pe-0 pe-sm-2">
                                    <label class="visually-hidden" for="tipo_vender" :value="__('tipo_vender')">Tipo</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="bi bi-pencil"></i>
                                        </div>
                                        <input type="text" name="tipo_vender" class="form-control" id="tipo_vender" placeholder="Kg/uds." :value="old('tipo_vender')" required autofocus autocomplete="tipo_vender" />
                                        <x-input-error :messages="$errors->get('tipo_vender')" class="mt-2" />
                                    </div>
                                </div>

                                <!-- Precio -->
                                <div class="col-12 col-sm-4 mb-2 px-0 px-sm-2">
                                    <label class="visually-hidden" for="precio_base" :value="__('precio_base')">Precio</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="bi bi-pencil"></i>
                                        </div>
                                        <input type="text" name="precio_base" class="form-control" id="precio_base" placeholder="Precio" :value="old('precio_base')" required autofocus autocomplete="precio_base" />
                                        <x-input-error :messages="$errors->get('precio_base')" class="mt-2" />
                                    </div>
                                </div>

                                <!-- Pedido Mínimo -->
                                <div class="col-12 col-sm-4 mb-2 ps-0 ps-sm-2">
                                    <label class="visually-hidden" for="pedido_minimo" :value="__('pedido_minimo')">Pedido mínimo</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="bi bi-pencil"></i>
                                        </div>
                                        <input type="text" name="pedido_minimo" class="form-control" id="pedido_minimo" placeholder="Pedido Mínimo" :value="old('pedido_minimo')" required autofocus autocomplete="pedido_minimo" />
                                        <x-input-error :messages="$errors->get('pedido_minimo')" class="mt-2" />
                                    </div>
                                </div>

                                <!-- Descripción -->
                                <div class="col-12 col-sm-12 mb-2">
                                    <label class="visually-hidden" for="description" :value="__('description')">Descripción</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="bi bi-pencil"></i>
                                        </div>
                                        <input type="text" name="description" class="form-control" id="descripcion" placeholder="Descripción" :value="old('description')" required autofocus autocomplete="description" />
                                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                                    </div>
                                </div>

                                <!-- Imagen -->
                                <div class="col-12 col-sm-9 my-2">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="file" id="file">
                                        <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                                        <x-input-error :messages="$errors->get('alt')" class="mt-2" />
                                    </div>   
                                </div>
                                
                                <!-- Login Button -->
                                <div class="col-12 col-sm-3">
                                    <button class="login-btn btn-primary">
                                        {{ __('Crear') }}
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