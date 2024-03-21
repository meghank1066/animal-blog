
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
<div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
            {{-- <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                AnimalHub
            </h1> --}}
    
            {{-- Content container --}}
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <div class="bg-dark-brown rounded-lg p-8 text-white text-center relative z-10 rounded-image ">
                    <h2 class="text-4xl font-bold mb-6"><img src="../../images/animalhub.png"  style="width: 300px; height: auto; padding: 10px;" alt="Animalhub" />
                    <p class="text-xl mb-5 p-10">Discover the wonderful world of animals with us!</p>
                    <a href="/quiz" class="bg-#FF9090 text-white font-semibold py-2 px-4 p-10 border border-white rounded hover:bg-custom-pink transition duration-300">Discover Now</a> </div>
            </div>
        </div>
    </div>
</div>




<div class="sm:grid grid-cols-2 gap-8 mx-auto p-6 bg-cool-orange rounded-web">
    <div class="flex justify-center items-center">
        <img src="../../images/bunny.png" alt="bunny" class="mt-4 sm:mt-0 rounded-lg border border-white rounded-image">
    </div>
    <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-4xl font-bold text-white">
            Help Support Animals in Need
        </h2>
        <p class="py-4 text-white text-lg">
            Join us in making a difference for animals everywhere by donating to an organization you can trust.
        </p>
        <p class=" text-white text-lg pb-6">
            Every donation goes towards providing shelter, medical care, and love to animals waiting for their forever homes.
        </p>
        <a href="https://www.dogstrust.org.uk/donate/" target="_blank" rel="noopener noreferrer" class="bg-#FF9090 text-white font-semibold py-2 px-4 p-20 border border-white rounded hover:bg-custom-pink transition duration-300">
            Donate Now
        </a>
    </div>
</div>




            
        </div> 



    </div> 
    

     {{-- <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l"> 
            I'm an expert in...
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Ux Design
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Project Management
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Digital Strategy
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Backend Development
        </span>
    </div> --}}

    {{-- <div class="text-center py-15"  style="background-color: #F6C49C; border-top: 10px solid white;  border-bottom: 20px solid white">
        <span class="uppercase text-s text-white">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10 text-white">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500 text-white">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque exercitationem saepe enim veritatis, eos temporibus quaerat facere consectetur qui.
        </p>
        
    </div> --}}

    

    {{-- <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    PHP
                </span>

                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas necessitatibus dolorum error culpa laboriosam. Enim voluptas earum repudiandae consequuntur ad? Expedita labore aspernatur facilis quasi ex? Nemo hic placeat et?
                </h3>

                <a 
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div> --}}







        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
        </div>
    </div>
@endsection