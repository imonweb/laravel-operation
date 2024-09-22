<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

 
Route::get("posts", [PostController::class, 'index'])->name("posts.index");

// create method
Route::get("posts/create", [PostController::class, 'create'])->name("posts.create");
Route::post("posts/create", [PostController::class, 'store'])->name("posts.store");

// update method
Route::get("posts/{id}/edit", [PostController::class, 'edit'])->name("posts.edit");
Route::put("posts/{id}", [PostController::class, 'update'])->name("posts.update");

// display method
Route::get("posts/{id}", [PostController::class, 'show'])->name("posts.show");

// delete method
Route::delete("posts/{id}", [PostController::class, 'destroy'])->name("posts.destroy");
 

/*  Resource route */

// Route::resource("posts", PostController::class);