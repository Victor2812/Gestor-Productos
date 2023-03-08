@extends('layouts.app')

@section('title', 'Not Found')

@section('content')
    
        <div class="world" data-world>
            <div class="score" data-score>0</div>
            <div class="start-screen" data-start-screen>Pulsa cualquier tecla para empezar</div>
            <img src="./imgs/ground.png" alt="ground" class="ground" data-ground>
            <img src="./imgs/ground.png" alt="ground" class="ground" data-ground>
            <img src="./imgs/dino-stationary.png" alt="stationary-dino" class="dino" data-dino>
        </div>
    
@endsection