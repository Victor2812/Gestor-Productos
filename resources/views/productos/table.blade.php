@extends('layouts.app')

@section('title', 'Productos')

@section('content')

<main>
    <div class="container">
        <div class="py-3 h-100">
           
            <div class="card">

                <div class="card-body p-0">

                    <div class="row g-0 d-flex justify-content-center">
                        <div class="col-10 pb-5">

                            <!-- Titulo -->
                            <h1 class="fw-bold mb-4 pt-5 text-start">Productos</h1>

                            <div class="mb-3">
                                @include('partials.flash')
                            </div>

                            <!-- Tabla -->
                            {!! $dataTable->table() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
