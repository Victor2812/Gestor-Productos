@extends('layouts.app')

@section('title', 'Confirmación pedido')

@section('content')

<main>
    <div class="container">
        <div class="py-5 h-100">
        
            <div class="card">
                <div class="card-body p-0">

                    
                    <div class="row g-0 d-flex justify-content-center">
                        <div class="col-10 col-sm-4">

                           
                            <h1 class="fw-bold mb-4 pt-5 text-center">!Pedido realizado!</h1>
                            <div class="mb-4 text-center">
                                <img src="../imgs/check.png" alt="pedido realizado" class="img-fluid" width="200">
                            </div>
                            
                            <p class="pb-4 text-center">Muchas gracias por confiar en nuestras estudiantes. En breve recibirás un correo con el número de pedido para que puedas realizar su seguimineto</p>
                        </div>
                    </div>
                </div>
            </div>                
        </div>                
    </div>
</main>

@endsection