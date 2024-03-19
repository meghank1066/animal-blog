@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-4xl font-bold py-10">Gallery</h2>

    <div class="gallery">
        @foreach ($images as $image)
        <div class="gallery-item rounded-lg overflow-hidden bg-white shadow-lg mb-8">
            <img src="{{ asset('uploads/' . $image->image_name) }}" alt="{{ $image->image_description }}" class="w-full">

            <h3 class="text-xl font-bold mb-2">Comments:</h3>
            <form action="{{ route('comment', $image) }}" method="POST">
                @csrf
                <input type="text" name="user_comment" placeholder="Your comment" class="block w-full border border-gray-300 rounded-md px-4 py-2 mb-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit Comment</button>
            </form>
        </div> 
        @endforeach
    </div>

    <h2 class="text-4xl font-bold py-10">
        Upload Image
    </h2>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

  
    <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data" class="mb-8">
        @csrf
        <input type="file" name="image" accept="image/*" class="block mb-4">
        <input type="text" name="description" placeholder="Image description" class="block w-full border border-gray-300 rounded-md px-4 py-2 mb-4">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Upload Image</button>
    </form>

</div>
@endsection
