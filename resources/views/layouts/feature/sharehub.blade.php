@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-4xl font-bold py-10">Gallery</h2>

    <div class="gallery">
    @foreach ($images as $image)
    <div class="gallery-item">
        <img src="{{ asset('uploads/' . $image->image_name) }}" alt="{{ $image->image_description }}">
        <div class="comments">
            <h3>Comments:</h3>
        <form action="{{ route('comment', $image) }}" method="POST">
            @csrf
            <input type="text" name="user_comment" placeholder="Your comment">
            <button type="submit">Submit Comment</button>
        </form>
    </div>
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

    <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" accept="image/*">
        <input type="text" name="description" placeholder="Image description">
        <button type="submit">Upload Image</button>
    </form>

</div>
@endsection


