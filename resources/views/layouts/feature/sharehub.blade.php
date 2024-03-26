@extends('layouts.app')

@section('content' )  <div class='custom-image'>
    <div class="custom-container">
  
        <h2 class="text-2xl font-bold py-10"><img src="{{ asset('images/font.png') }}" style="width: 400px; padding-left: 5%" alt="Font Image"></h2>
        <div class="gallery">
            @foreach ($images as $image)
            <div class="gallery-item rounded-lg overflow-hidden bg-white shadow-lg">
                <div class="image-container relative">
                    <img src="{{ asset('uploads/' . $image->image_name) }}" alt="{{ $image->image_description }}" class="w-full"> <!-- Fixed image src -->
                    <div class="button-container">
                        <div class="description-container">
                            <p id="description_{{ $image->id }}" class="description">{{ $image->image_description }}</p>
                            <input type="text" name="description" value="{{ $image->image_description }}" class="form-input w-full border border-gray-300 rounded-md px-4 py-2 mb-2 hidden" id="edit_{{ $image->id }}">
                        </div>
                        <div class="action-buttons">
                            <form action="{{ route('delete', $image) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-button bg-red hover:bg-red-700 text-white font-bold py-1 px-2 p-2 rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                    </svg>
                                </button>
                            </form>
                            <form action="{{ route('updateDescription', $image) }}" method="POST" class="edit-form">
                                @csrf
                                <button type="button" class="edit-button bg-grey hover:bg-green text-white font-bold py-1 px-2 rounded" onclick="toggleEdit({{ $image->id }})">
                                    Edit Description
                                </button>
                                <button type="submit" class="save-button bg-red hover: bg-green  text-white font-bold py-1 px-2 rounded hidden" id="save_{{ $image->id }}">
                                    Save
                                </button>
                            </form>
                        </div>
                    </div>
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

    <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data" class="mb-8">
        @csrf
        <label for="image-upload" class="bg-dark-brown  hover:bg-ed-brown text-white font-bold py-2 px-4 p-5 rounded cursor-pointer">Choose Image</label>
        <input type="file" id="image-upload" name="image" accept="image/*" class="hidden">
        <div class="mt-6">
            <input type="text" name="description" placeholder="Image description" class="block w-full border border-gray-300 rounded-md px-4 py-2 mb-4">
        </div>
        <button type="submit" class="bg-dark-brown hover:bg-ed-brown text-white font-bold py-2 px-4 rounded">Post</button>
    </form>
</div>
</div>

<script>
    function toggleEdit(id) {
    var description = document.getElementById("description_" + id);
    var edit = document.getElementById("edit_" + id);
    var save = document.getElementById("save_" + id);
    
    description.classList.toggle("hidden");
    edit.classList.toggle("hidden");
    save.classList.toggle("hidden");

    if (!save.classList.contains("hidden")) {
        // If Save button is visible, focus on the input field
        edit.focus();
    }
}

</script>
@endsection
