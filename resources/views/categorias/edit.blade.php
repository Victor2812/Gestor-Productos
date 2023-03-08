@extends('layouts.app')

@section('title', 'Editar categoria')

@section('content')
    <main>
        <form action="{{ route('categorias.update', [$categoria]) }}" method="post">
            @csrf
            <!-- Name -->
        <div>
            <label for="name">Nombre</label>
             <input type="text" class="form-control" id="name" name="name" value="{{$categoria->name}}">
             <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <!-- categoria_id -->
            <div>
                <label for="categoria_id">Escoge la categoria padre</label>
                    <select name="categoria_id" id="categoria_id" class="form-control">
                            <option value="">Sin categoria padre</option>
                            @foreach($categorias as $categoria)
                                <option value="{{ $categoria->id }}" {{ $categoria->id == $categoria_padre->id ? 'selected' : '' }}>
                                    {{ $categoria->name }}
                                </option>
                            @endforeach
                    </select>
            </div>
     
        <div class="mt-4">
            <button type="submit" class="ml-4 dropdown-cart-btn btn-outline-primary btn-block">
                Editar categoria
            </button>
        </div>
        </form>
    </main>
@endsection