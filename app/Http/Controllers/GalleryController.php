<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // max 2MB
            'description' => 'nullable|string',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);

        Gallery::create([
            'image_name' => $imageName,
            'image_description' => $request->description,
            'comments' => [] // Initialize comments as an empty array
        ]);

        return redirect()->back()->with('success');
    }

  

    public function index()
    {
        $images = Gallery::all();
        return view('layouts.feature.sharehub')->with('images', $images);
    }


    public function deleteImage(Gallery $image)
    {
        $image->delete();
    
        return redirect()->back()->with('success', 'Image and associated comments deleted successfully.');
    }

    public function updateDescription(Request $request, Gallery $image)
    {
        // Check if the user is authenticated
        if (!auth()->check()) {
            return redirect()->back()->with('error', 'You must be logged in to update the description.');
        }
    
        // Check if the authenticated user owns the image (assuming you have a user_id column in your Gallery model)
        if (auth()->user()->id !== $image->user_id) {
            return redirect()->back()->with('error', 'You are not authorized to update this image description.');
        }
    
        // Validate the request data
        $request->validate([
            'description' => 'nullable|string',
        ]);
    
        // Update the image description
        $image->update(['image_description' => $request->description]);
    
        // Redirect back with success message
        return redirect()->back()->with('success', 'Image description updated successfully.');
    }
}    