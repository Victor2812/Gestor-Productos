@extends('layouts.app')

@section('title', 'Ver categoria')

@section('content')

<main>
<div class="container">
    <div class="py-3 h-100">
        
        <div class="card">
            <div class="card-body p-0">

                <div class="row g-0 d-flex justify-content-center">
                    <div class="col-10 col-sm-10 mb-5">

                        <!-- Titulo -->
                        <h1 class="fw-bold mb-4 pt-5 text-start">{{$categoria->name}}</h1>
                        @if(!is_null($categoria_padre))
                        <h4 class="mb-3"><span class="fw-bold text-primary">Categoría padre: </span>{{$categoria_padre->name}}</h4>
                        @else
                        <h4 class="mb-3"><span class="fw-bold text-primary">Es categoría padre</h4>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>

    

@endsection