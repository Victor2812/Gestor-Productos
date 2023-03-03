@extends('layouts.app')

<<<<<<< HEAD
@section('title', 'Home')

@section('body')
    <div class="container" style="margin-top: 80px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tienda</li>
            </ol>
        </nav>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-7">
                        <h4>Productos</h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                    @foreach($products as $pro)
                        <div class="col-lg-3">
                            <div class="card" style="margin-bottom: 20px; height: auto;">
                                <img src="/images/{{ $pro->image_path }}"
                                    class="card-img-top mx-auto"
                                    style="height: 150px; width: 150px;display: block;"
                                    alt="{{ $pro->image_path }}"
                                >
                                <div class="card-body">
                                    <a href=""><h6 class="card-title">{{ $pro->name }}</h6></a>
                                    <p>${{ $pro->precio_base }}</p>
                                    <div class="card-footer" style="background-color: white;">
                                        <div class="row">
                                            <a href="{{ route('cart.store', $pro->id) }}" class="btn btn-secondary btn-sm" class="tooltip-test" title="add to cart">
                                                <i class="bi bi-cart"></i> Agregar al carrito 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
=======
@section ('title', 'Home')

@section('body')

<!-- HEADER -->
<header>

<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <!-- Container wrapper -->
  <div class="container">    
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent1"
      aria-controls="navbarSupportedContent1"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
        <i class="bi bi-list"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent1">      
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-sm-0" href="#">
        <img src="../imgs/logo-egibide.jpg" height="60" alt="Egibide Logo"/>
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item active">
          <a class="nav-link " href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://mdbootstrap.com/docs/standard/">Catálogo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://mdbootstrap.com/docs/standard/getting-started/installation/">Pedidos</a>
        </li>
      </ul>
      <!-- Left links -->      
    </div>
    <!-- Collapsible wrapper -->
    
    <!-- Right elements -->
    <div class="d-flex align-items-center">
      <!-- Icon -->
      <a class="nav-link me-3" href="#">
        <i class="bi bi-cart2"></i>
        <span class="badge rounded-pill badge-notification bg-danger">1</span>
      </a>

      <a class="nav-link me-3" href="#">
        <h3><i class="bi bi-person-fill"></i></h3>
      </a>
      <a class="nav-link me-3" href="#">
        <i class="fab fa-twitter"></i>
      </a>
      
    </div>
    <!-- Right elements -->
    
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->

</header>
<!-- END HEADER -->

<main>
    <div class="row">
        <!-- SLIDER -->
        <div class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../imgs/banner.jpg" class="d-block w-100">
            </div>
>>>>>>> 8ec8a70014394296b2344e615d313ccb2e739c51
            </div>
        </div>
        <!-- END SLIDER -->
    </div>
<<<<<<< HEAD
@endsection
=======
    


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
                                <span class="price">4,50 €</span>
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
                                <span class="price">5,00 €</span>
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
                                <span class="price">3,75 €</span>
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




    <hr class="featurette-divider">


    <!-- FOOTER -->
    <footer class="container">
        <p class="float-center"><a href="#">Back to top</a></p>
        <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
    <!-- END FOOTER -->

</main>


@endsection
>>>>>>> 8ec8a70014394296b2344e615d313ccb2e739c51
