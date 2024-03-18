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
        ]);

        return redirect()->back()->with('success', 'Image uploaded successfully.');
    }

 

    public function comment(Request $request, Gallery $image)
{
    
    $image->comments()->create(['content' => $request->user_comment]);

    return redirect()->back()->with('success', 'Comment submitted successfully.');
}

public function index()
{
    $images = Gallery::all();
    return view('layouts.feature.sharehub')->with('images', $images);
}


}


