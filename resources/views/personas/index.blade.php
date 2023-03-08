@extends('layouts.app')

@section('title', 'Personas')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Manage Users</div>
            <div class="card-body">
                {{!! $dataTable->table() !!}}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
   
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
        {{--<script src="{{ asset('js/common/delete.js') }}"></script>--}}
@endpush
