<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('posts', Posts::class);
Route::get('/posts', [Posts::class, 'index']);
Route::get('/posts/{id}', [Posts::class, 'show'])->name('post.show');

Route::get('/create', [Posts::class, 'create']);
Route::post('/posts', [Posts::class, 'store']);

Route::get('/posts/{id}/edit', [Posts::class, 'edit'])->name('post.edit');
Route::put('/posts/{id}', [Posts::class, 'update'])->name('post.update');;

Route::get('/posts/{id}/destroy', [Posts::class, 'destroy'])->name('post.destroy');

