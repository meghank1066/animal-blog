@extends('layouts.app')

@section('content')
<main class="flex items-center justify-center min-h-screen background-image max-height 40px" style="background-color: #a27754;">
    <div class="max-w-md w-full p-8 rounded-lg shadow-lg" style="background-color: #a27754; padding-top: 40px; padding-bottom: 40px; color: black;">
        <h1 class="text-6xl text-white mb-4">Create Post</h1>

        @if ($errors->any())
        <div class="w-full m-auto mb-8">
            <ul>
                @foreach ($errors->all() as $error)
                <li class="w-full mb-4 text-white bg-red-700 rounded-2xl py-4">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="/blog" method="POST" enctype="multipart/form-data" class="w-full pt-20">
            @csrf

            <input type="text" name="title" placeholder="Title..." class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none mb-8">

            <textarea name="description" placeholder="Description..." class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none mb-8"></textarea>

            <div class="bg-grey-lighter mb-8">
                <label class="w-44 flex flex-col items-center px-2 py-3 bg-white rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                    <span class="mt-2 text-base leading-normal">Select a file</span>
                    <input type="file" name="image" class="hidden">
                </label>
            </div>

            <button type="submit" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">Submit Post</button>
        </form>
    </div>
</main>
@endsection
