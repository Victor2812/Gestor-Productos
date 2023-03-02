@extends('layouts.app')

@section ('title', 'Home')

@section('body')

<!-- HEADER -->
<header>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Carousel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>

                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

</header>
<!-- END HEADER -->

<main>
    <!-- SLIDER -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://www.egibide.org/file/2017/09/egibide-restaurante-cocinas.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
    <!-- END SLIDER -->


    <!-- MÁS VENDIDOS -->
    <div class="container mt-5">
        <div class="row mb-4">

            <!-- PRODUCTO -->
            <div class="col-sm-6 col-md-4">
                <div class="card shadow mb-4 mb-sm-0">
                    <div class="image-container">
                        <div class="first">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">4,50 €</span>
                            </div>
                        </div>
                        <img src="https://cecotec.es/recetas/wp-content/uploads/2021/12/mambo_cocinaapresion_croquetas_de_cabrales_RRSS-e1638523742853-1140x500.jpg" class="img-fluid rounded thumbnail-image">
                    </div>
                    <div class="p-3">
                        <h5 class="product-name">Croquetas de Bacalao</h5>
                        <p class="product-desc">Pedido mínimo (2 raciones)</p>
                        <div class="d-flex justify-content-between align-items-center pt-1">
                            <span class="category-tag">Fritos</span>
                            <button class="product-btn btn-primary">Añadir</button>
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
                                <span class="price">5,00 €</span>
                            </div>
                        </div>
                        <img src="https://www.vidactual.com/rcpmaker/wp-content/uploads/2018/10/Canelones-rellenos-de-espinaca-y-queso-ricotta.jpg" class="img-fluid rounded thumbnail-image">
                    </div>
                    <div class="p-3">
                        <h5 class="product-name">Canelones de espinacas</h5>
                        <p class="product-desc">Pedido mínimo (2 raciones)</p>
                        <div class="d-flex justify-content-between align-items-center pt-1">
                            <span class="category-tag">Carnes</span>
                            <button class="product-btn btn-primary">Añadir</button>
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
                                <span class="price">3,75 €</span>
                            </div>
                        </div>
                        <img src="https://deliciaskitchen.b-cdn.net/wp-content/uploads/2016/03/mousse-de-chocolate-vegana.jpg" class="img-fluid rounded thumbnail-image">
                    </div>
                    <div class="p-3">
                        <h5 class="product-name">Mousse de Chocolate</h5>
                        <p class="product-desc">Pedido mínimo (2 piezas)</p>
                        <div class="d-flex justify-content-between align-items-center pt-1">
                            <span class="category-tag">Postres</span>
                            <button class="product-btn btn-primary">Añadir</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PRODUCTO -->

        </div>
    </div>
    <!-- END MÁS VENDIDOS -->




    <hr class="featurette-divider">


    <!-- FOOTER -->
    <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
    <!-- END FOOTER -->

</main>


@endsection
