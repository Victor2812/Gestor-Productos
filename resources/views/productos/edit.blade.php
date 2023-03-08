@extends('layouts.app')

@section('title', 'Editar producto')

@section('content')
    <main>
        <form action="{{ route('productos.store', [$producto]) }}" method="post">
            @csrf
            <!-- Name -->
        <div>
            <label for="name">Nombre</label>
             <input type="text" class="form-control" id="name" name="name" value="{{$producto->name}}">
             <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- description -->
       <div>
           <label for="description">Descripción</label>
           <input id="description" class="form-control" type="text" name="description" value="{{ $producto->description }}" />
           <x-input-error :messages="$errors->get('name')" class="mt-2" />
       </div>

        <!-- tipo_vender -->
        <div>
           <label for="tipo_vender">Tipo de venta</label>
           <input id="tipo_vender" class="form-control" type="text" name="tipo_vender" value="{{ $producto->tipo_vender }}" />
           <x-input-error :messages="$errors->get('name')" class="mt-2" />
       </div>

        <!-- precio_base -->
        <div>
           <label for="precio_base">Precio base</label>
           <input id="precio_base" class="form-control" type="text" name="precio_base" value="{{ $producto->precio_base }}" />
           <x-input-error :messages="$errors->get('name')" class="mt-2" />
       </div>

       <!-- pedido_minimo -->
       <div>
           <label for="pedido_minimo">Pedido minimo</label>
           <input id="pedido_minimo" class="form-control" type="text" name="pedido_minimo" value="{{ $producto->pedido_minimo }}" />
           <x-input-error :messages="$errors->get('name')" class="mt-2" />
       </div>

       <!-- categoria_id -->
       <div>
           <label for="categoria_id">Escoge la categoria</label>
            <select name="categoria_id" id="categoria_id" class="form-control">
                @foreach($categorias as $categoria)
                    <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                @endforeach
            </select>
       </div>
       


     
        <div class="mt-4">
            <button type="submit" class="ml-4 dropdown-cart-btn btn-outline-primary btn-block">
                Editar Producto
            </button>
        </div>
        </form>
    </main>
@endsection