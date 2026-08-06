<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artista;

class ArtistaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artista = Artista::all();
        return view("artista.index", compact("artista"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("artista.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'foto_url' => 'nullable|url', 
            'data_origem' => 'required|integer|min:1900|max:' . (date('Y') + 1),
        ]);

        Artista::create($request->all());
        return redirect()->route('artista.index')->with('success','Artista criado com sucesso!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $artista = Artista::with('albuns')->findOrFail($id);
        return view('artista.show', compact('artista'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $artista = Artista::findOrFail($id);
        return view('artista.edit', compact('artista'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $artista = Artista::findOrFail($id);
        $artista->update([
            "name"=> $request->name,
            "foto_url"=> $request->foto_url,
            "data_origem"=> $request->data_origem,
        ]);

        return redirect()->route('artista.index')->with("success","Artista $artista->name atualizado com sucesso!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $artista = Artista::findOrFail($id);
        $artista->delete();

        return view("artista.index");
    }
}
