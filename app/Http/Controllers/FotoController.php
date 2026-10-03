<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;

class FotoController extends Controller
{
    public function index()
    {
        $fotos = Foto::all();
        return view('admin.foto.index', compact('fotos'));
    }

    public function create()
    {
        return view('admin.foto.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required|image',
        ]);

        $file = $request->file('gambar');
        $namaFile = time() . '.' . $file->extension();
        $file->move('uploads/foto/', $namaFile);

        Foto::create([
            'judul' => $request->judul,
            'gambar' => $namaFile,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('/admin/foto');
    }

    public function delete($id)
    {
        $foto = Foto::find($id);
        unlink('uploads/foto/' . $foto->gambar);
        $foto->delete();

        return back();
    }
}
