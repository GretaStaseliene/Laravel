<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\Blog;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Home
Route::get('/', [Blog::class, 'index']);
//All posts
Route::get('/posts', [PostsController::class, 'index']);
//Single Post
Route::get('/posts/{id}', [PostsController::class, 'singlePost']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Home when user is logged in
    Route::get('/', [Blog::class, 'index']);
    // New Post form only for logged users
    Route::get('/newPost', [PostsController::class, 'newPost']);
    // Adding posts to mysql
    Route::post('/newPost', [PostsController::class, 'savePost']);

});

require __DIR__.'/auth.php';
