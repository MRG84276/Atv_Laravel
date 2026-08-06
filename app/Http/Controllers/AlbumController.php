<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Artista;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $album = Album::all();
        return view("album.index", compact("album"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("album.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'artista_id' =>'required|exists:artista,id',
            'ano_lancamento' => 'required|integer|min:1900|max:' . (date('Y') + 1),
            'url_imagem' => 'nullable|url', 
        ]);

        Album::create($request->all());

        return redirect()->route('album.index')->with('success','Álbum criado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $album = Album::with('musicas')->findOrFail($id);
        return view('album.show', compact('album'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $album = Album::findOrFail($id);
        $album->delete();

        return redirect()->route('album.index')->with('sucesso', 'Álbum exclúido com sucesso');
    }
}
