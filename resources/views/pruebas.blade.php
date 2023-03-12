@extends('layouts.app')

@section('title', 'Pruebas')

@section('body')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Categorias</div>

                    <div class="card-body">
                        <h3 class="mt-3">Listado de Categorias</h3>

                        <hr>

                        <ul>
                            @forelse ($categorias as $categoria)
                                <li>{{ $categoria->name }}</li>
                                <ul>
                                    @if (count($categoria->productos))
                                        @foreach ($categoria->productos as $productos)
                                            <li>{{ $productos->name }}</li>
                                        @endforeach
                                    @endif
                                    @if (count($categoria->subcategory))
                                        @foreach ($categoria->subcategory as $subcategoria)
                                        <li>{{ $subcategoria->name }}</li>
                                        <ul>
                                            @if ($subcategoria->productos)
                                                @foreach ($subcategoria->productos as $producto)
                                                    <li>{{ $producto->name }}</li>
                                                @endforeach
                                            @endif
                                        </ul>
                                        @endforeach         
                                    @endif
                                </ul>
                            @empty
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection