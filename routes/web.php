<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArtistaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicaController;

## Musicas
Route::get('/musics', [MusicaController::class, 'index'])->name('musics.index');
Route::get('/musics/create', [MusicaController::class, 'create'])->name('musics.create');
Route::post('/musics', [MusicaController::class, 'store'])->name('musics.store');
Route::get('/musics/{music}', [MusicaController::class, 'show'])->name('musics.show');
Route::get('/musics/{music}/edit', [MusicaController::class, 'edit'])->name('musics.edit');
Route::put('/musics/{music}', [MusicaController::class, 'update'])->name('musics.update');
Route::delete('/musics/{music}', [MusicaController::class, 'destroy'])->name('musics.destroy');

##Albuns
Route::get('/albuns', [AlbumController::class, 'index'])->name('album.index');
Route::get('/albuns/create', [AlbumController::class, 'create'])->name('album.create');
Route::post('/albuns', [AlbumController::class, 'store'])->name('album.store');
Route::get('/albuns/{music}', [AlbumController::class, 'show'])->name('album.show');
Route::get('/albuns/{music}/edit', [AlbumController::class, 'edit'])->name('album.edit');
Route::put('/albuns/{music}', [AlbumController::class, 'update'])->name('album.update');
Route::delete('/albuns/{music}', [AlbumController::class, 'destroy'])->name('album.destroy');


##Artistas
Route::get('/artistas', [ArtistaController::class, 'index'])->name('artista.index');
Route::get('/artistas/create', [ArtistaController::class, 'create'])->name('artista.create');
Route::post('/artistas', [ArtistaController::class, 'store'])->name('artista.store');
Route::get('/artistas/{music}', [ArtistaController::class, 'show'])->name('artista.show');
Route::get('/artistas/{music}/edit', [ArtistaController::class, 'edit'])->name('artista.edit');
Route::put('/artistas/{music}', [ArtistaController::class, 'update'])->name('artista.update');
Route::delete('/artistas/{music}', [ArtistaController::class, 'destroy'])->name('artista.destroy');

