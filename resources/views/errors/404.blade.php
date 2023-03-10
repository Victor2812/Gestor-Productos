@extends('layouts.app')

@section('title', 'Not Found')

@section('content')

<main>
    <div class="container">
        <div class="py-5 h-100">
            <div class="card">
                <div class="card-body p-0" id="dino-card">


                <div class="world" data-world>
                    <div class="score" data-score>0</div>
                    <div class="start-screen" data-start-screen>Pulsa cualquier tecla para empezar</div>
                    <img src="./imgs/ground.png" alt="ground" class="ground" data-ground>
                    <img src="./imgs/ground.png" alt="ground" class="ground" data-ground>
                    <img src="./imgs/dino-stationary.png" alt="stationary-dino" class="dino" data-dino>
                </div>

                </div>
            </div>
        </div>
    </div>
</main>    
@endsection