<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index() {
        $photos = Photo::latest()->get();
        return view('admin.photos.index', compact('photos'));
    }

    public function create() {
        return view('admin.photos.create');
    }

    public function store(Request $req) {
        $req->validate([
            'image' => 'required|image'
        ]);

        $path = $req->file('image')->store('photos', 'public');

        Photo::create([
            'title' => $req->title,
            'description' => $req->description,
            'image' => $path
        ]);

        return redirect()->route('photos.index');
    }

    public function destroy($id) {
        $photo = Photo::find($id);
        Storage::disk('public')->delete($photo->image);
        $photo->delete();

        return back();
    }

    // Guest view
    public function guest() {
        $photos = Photo::latest()->get();
        return view('homepage', compact('photos'));
    }
}
