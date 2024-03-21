@extends('layouts.app')

@section('content')
<main class="flex items-center justify-center min-h-screen background-image">
    <div class="max-w-md w-full p-8 rounded-lg shadow-lg" style="background-color: #a27754; padding-top: 40px; padding-bottom: 40px; color: black;">
        <h2 class="text-2xl font-bold mb-4 text-white">Quiz Result</h2>

        <section class="flex flex-col break-words text-white">
            @if (empty($matchedPets))
                <p class="mb-4">Sorry, we couldn't find a suitable pet based on your preferences.</p>
            @else
                <p class="mb-4">Based on your preferences, here are some suitable pets for you:</p>
                @foreach ($matchedPets as $pet)
                    @if (isset($petSuggestions[$pet]))
                    <div class="flex items-center justify-center mb-4">
                        <img src="{{ asset('images/' . $petSuggestions[$pet]['image']) }}" alt="{{ $pet }} Image" class="w-32 h-32 rounded-full mr-4 border-grey border-4">
                        <div>
                            <p class="text-lg font-bold">{{ $pet }}</p>
                            <!-- Customize the message based on pet's cuddliness -->
                            @switch($pet)
                                @case('Dog')
                                    <p>A {{ $pet }} is suggested because they are as cuddly as a warm blanket on a winter night, always ready for a snuggle and some belly rubs!</p>
                                    @break
                                @case('Cat')
                                    <p>A {{ $pet }} is suggested because they are purr-fect cuddle companions, with their soft fur and soothing purrs, they'll make every cuddle session a delight!</p>
                                    @break
                                @case('Rabbit')
                                    <p>A {{ $pet }} is suggested because they are fluffy bundles of joy, hopping into your lap for a cozy cuddle session and bringing warmth to your heart!</p>
                                    @break
                                @case('Fish')
                                    <p>A {{ $pet }} is suggested because they may not cuddle in the traditional sense, but watching them swim gracefully in their tank will bring you a sense of calm and tranquility!</p>
                                    @break
                                @case('Hamster')
                                    <p>A {{ $pet }} is suggested because they may be small, but their cuddles are mighty! With their soft fur and adorable squeaks, they'll steal your heart with every cuddle session!</p>
                                    @break
                            @endswitch
                        </div>
                    </div>
                @endif
            @endforeach
        @endif
    </section>
</div>
</main>
@endsection