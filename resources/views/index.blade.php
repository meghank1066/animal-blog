
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AnimalHub</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

@extends('layouts.app')

@section('content')
<div class="background-image grid grid-cols-1 m-auto bg-cover bg-center">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-8 sm:m-auto w-full px-4 text-center"> 
            {{-- Content container --}}
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center rounded-lg bg-transparent"> 
                <div class="p-8 text-white text-center relative z-10">
                    <h2 class="text-4xl font-bold mb-6"><img src="../../images/animalhub.png"  style="width: 300px; height: auto; padding: 20px;" alt="Animalhub" />
                    <p class="text-xl mb-5 p-10">Discover the wonderful world of animals with us!</p>
                    <a href="/quiz" class="bg-#FF9090 text-white font-semibold py-2 px-4 p-10 border border-white rounded hover:bg-custom-pink transition duration-300">Discover Now</a> </div>
            </div>
        </div>
    </div>
</div>

<div class="background-image grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4"> <!-- Added padding on the sides -->
    <?php
    // Array of animal images
    $animalImages = [
        "rabbit.png",
        "kitty.png",
        "dog.png",
        "hamster.png",
    ];

    // Loop through each animal image to create a card
    foreach ($animalImages as $image) {
    ?>
        <div class="bg-white rounded-lg shadow-md overflow-hidden h-80 p-5 hover:transform hover:scale-105 transition-all duration-300"> <!-- Added hover effect -->
            <img src="../../images/<?php echo $image; ?>" alt="<?php echo pathinfo($image, PATHINFO_FILENAME); ?>" class="w-full h-full object-cover"> <!-- Adjusted to h-full -->
        </div>
    <?php
    }
    ?>
</div>

  
        </div> 



    </div> 

    
    






        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
        </div>
    </div>
@endsection