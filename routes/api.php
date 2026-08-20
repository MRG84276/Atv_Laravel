<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;

Route::get('/test', function (){
    return 200;
});

Route::get('/post', [PostController::class, 'index']);
Route::post('/post', [PostController::class, 'store']);
Route::get('/post/{id}', [PostController::class, 'show']);
Route::put('/post/{id}', [PostController::class, 'update']);
Route::delete('/post/{id}', [PostController::class, 'destroy']);

Route::get('/chats', [ChatController::class, 'index']);
Route::get('/chats/create', [ChatController::class, 'create']);
Route::post('/chats', [ChatController::class, 'store']);
Route::get('/chats/{chat_id}', [ChatController::class, 'show']);
Route::get('/chats/{chat}/edit', [ChatController::class, 'edit']);
Route::put('/chats/{chat_id}', [ChatController::class, 'update']);
Route::delete('/chats/{chat_id}', [ChatController::class, 'destroy']);
?>