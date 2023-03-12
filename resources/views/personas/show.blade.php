@extends('layouts.app')

@section('title', 'Ver Usuario')

@section('content')

<main>
<div class="container">
    <div class="py-3 h-100">
        
        <div class="card">
            <div class="card-body p-0">

                <div class="row g-0 d-flex justify-content-center">
                    <div class="col-10 col-sm-10 mb-5">

                        <!-- Titulo -->
                        <h1 class="fw-bold mb-4 pt-5 text-start">{{$persona->fullName()}}</h1>
                        <h4 class="mb-3"><span class="fw-bold text-primary">DNI: </span>{{$persona->dni}}</h4>
                        <h4 class="mb-3"><span class="fw-bold text-primary">Teléfono: </span>{{$persona->phone}}</>
                        <h4 class="mb-3"><span class="fw-bold text-primary">E-mail: </span>{{$persona->email}}</>
                        <h4 class="mb-3"><span class="fw-bold text-primary">Rol: </span>{{$rol->name}}</h4>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
    

@endsection