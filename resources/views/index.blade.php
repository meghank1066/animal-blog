@extends('layouts.app')

@section('content')
<div class="background-image grid grid-cols-1 m-auto bg-cover bg-center">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-8 sm:m-auto w-full px-4 text-center"> 
            {{-- Content container --}}
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center rounded-lg bg-transparent"> 
                <div class="p-8 text-white text-center relative z-10">
                    <h2 class="text-4xl font-bold mb-6"><img src="../../images/animalhub.png"  style="width: 300px; height: auto; padding: 10px;" alt="Animalhub" />
                    <p class="text-xl mb-5 p-10">Discover the wonderful world of animals with us!</p>
                    <a href="/quiz" class="bg-#FF9090 text-white font-semibold py-2 px-4 p-10 border border-white rounded hover:bg-custom-pink transition duration-300">Discover Now</a> </div>
            </div>
        </div>
    </div>
</div>

<div class="background-image grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 hover:transform hover:scale-105 transition-all duration-300"> <!-- Added padding on the sides -->
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
        <div class="bg-white rounded-lg shadow-md overflow-hidden h-80 p-2" style="margin-bottom: -15px;">
            <img src="../../images/<?php echo $image; ?>" alt="<?php echo pathinfo($image, PATHINFO_FILENAME); ?>" class="w-full h-full object-cover">
        </div>
    <?php
    }
    ?>
</div> 


    <div class="text-center p-15 bg-cool-toned-pink text-white">
        <h2 class="text-4xl pb-5 text-l font-bold"> 
            What Animal Is Best Suited For You?
        </h2>
        <span class=" block text-2xl py-4"> <!-- Added padding class -->
            <a href="/sharehub" class="px-6 py-3 bg-custom-pink hover:bg-red text-white font-bold rounded-full inline-block transition duration-300">Click To Find Out</a> <!-- Added px-6 and py-3 classes -->
        </span>
    </div>

    
<div class="homepage-section bg-pale-orange py-40 penguin-section"> <!-- Added class name for penguin section -->
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold text-center text-white mb-8">Explore More Images</h2>
        <div class="flex justify-center">
            <div class="bg-white rounded-lg shadow-md overflow-hidden h-80 p-2 hover:transform hover:scale-105 transition-all duration-300">
                <img src="../../images/pengu.png" alt="Penguin" class="w-full h-full object-cover">
            </div>
        </div>
        <div class="text-center mt-8">
            <p class="text-xl mb-4 text-white">Meet our adorable penguin friend!</p>
            <a href="/sharehub" class="bg-custom-pink hover:bg-red text-white font-bold py-2 px-4 rounded-full inline-block transition duration-300">View More Animals</a>
        </div>
    </div>
</div>

<div>
    <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
</div>

@endsection
