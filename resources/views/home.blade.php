@extends('layouts.app')

@section ('title', 'Home')

@section('content')

<main>
    <div class="row">
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
        <h2 class="h2">Más vendidos  </h2>
        <slider-component></slider-component>
    </div>
    <!-- END MÁS VENDIDOS -->

    <!-- <div id="app"></div> -->

</main>


@endsection
