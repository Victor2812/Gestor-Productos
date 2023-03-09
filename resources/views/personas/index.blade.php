@extends('layouts.app')

@section('title', 'Personas')

@section('content')

<main>
    <div class="container">
        <div class="py-5 h-100">
           
            <div class="card">
                <div class="card-body p-0">

                    <div class="row g-0 d-flex justify-content-center">
                        <div class="col-10">

                            <!-- Titulo -->
                            <h1 class="fw-bold mb-4 pt-5 text-start">Usuarios</h1>

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
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
        {{--<script src="{{ asset('js/common/delete.js') }}"></script>--}}
@endpush
