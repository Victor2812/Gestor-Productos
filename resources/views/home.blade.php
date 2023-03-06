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
        <h2 class="h2">Más vendidos</h2>
        <div class="row mb-4">
            <!-- PRODUCTO -->
            <div class="col-sm-6 col-md-4">
                <div class="card shadow mb-4 mb-sm-0">
                    <div class="image-container">
                        <div class="first">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="product-price">4,50 €</span>
                            </div>
                        </div>
                        <img src="../imgs/croquetas.png" class="img-fluid rounded thumbnail-image">
                    </div>
                    <div class="p-3">
                        <h5 class="product-name">Croquetas de Bacalao</h5>
                        <p class="product-desc mb-1">Pedido mínimo (2 raciones)</p>
                        <div class="d-flex justify-content-between align-items-center pt-1">
                            <span class="category-tag">Fritos</span>
                            <button class="product-btn btn-outline-primary">+</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PRODUCTO -->

            <!-- PRODUCTO -->
            <div class="col-sm-6 col-md-4">
                <div class="card shadow mb-4 mb-sm-0">
                    <div class="image-container">
                        <div class="first">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="product-price">5,00 €</span>
                            </div>
                        </div>
                        <img src="../imgs/canelones.png" class="img-fluid rounded thumbnail-image">
                    </div>
                    <div class="p-3">
                        <h5 class="product-name">Canelones de espinacas</h5>
                        <p class="product-desc mb-1">Pedido mínimo (2 raciones)</p>
                        <div class="d-flex justify-content-between align-items-center pt-1">
                            <span class="category-tag">Carnes</span>
                            <button class="product-btn btn-outline-primary">+</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PRODUCTO -->

            <!-- PRODUCTO -->
            <div class="col-sm-6 col-md-4">
                <div class="card shadow mb-4 mb-sm-0">
                    <div class="image-container">
                        <div class="first">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="product-price">3,75 €</span>
                            </div>
                        </div>
                        <img src="../imgs/mousse.png" class="img-fluid rounded thumbnail-image">
                    </div>
                    <div class="p-3">
                        <h5 class="product-name">Mousse de Chocolate</h5>
                        <p class="product-desc mb-1">Pedido mínimo (2 piezas)</p>
                        <div class="d-flex justify-content-between align-items-center pt-1">
                            <span class="category-tag">Postres</span>
                            <button class="product-btn btn-outline-primary">+</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PRODUCTO -->

        </div>
    </div>
    <!-- END MÁS VENDIDOS -->

</main>


@endsection
