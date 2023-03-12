@extends('layouts.app')

@section ('title', 'Home')

@section('content')

<main>
    <div class="row d-none d-sm-block">
        <!-- SLIDER -->
        <div class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../imgs/banner.jpg" class="d-block w-100">
            </div>
            </div>
        </div>
        <!-- END SLIDER -->
    </div>


    <!-- MÁS VENDIDOS -->
    <div class="container mt-5">
        <h1 class="fw-bold mb-4">Más vendidos</h1>
        <slider-component></slider-component>
    </div>
    <!-- END MÁS VENDIDOS -->

    <!-- <div id="app"></div> -->

</main>


@endsection
