<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\Blog;
use App\Http\Middleware\IsUserAdmin;

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

/* Home */
Route::get('/', [Blog::class, 'index']);
/* All posts */
Route::get('/posts', [PostsController::class, 'index']);
/* Single Post */
Route::get('/posts/{id}', [PostsController::class, 'singlePost']);


/* Custom middleware for logged users */
Route::middleware('is.admin')->group(function() {
    /*  New Post form only for logged users */
    Route::get('/newPost', [PostsController::class, 'newPost']);

    /* Adding posts to mysql */
    Route::post('/newPost', [PostsController::class, 'savePost']);
});


// Antras budas 
/*  New Post form only for logged users */
// Route::middleware(IsUserAdmin::class)->get('/newPost', [PostsController::class, 'newPost']);
// /* Adding posts to mysql */
// Route::post('/newPost', [PostsController::class, 'savePost']);


/* Automatiskai sugeneruoti authenitifikacijos route'ai */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /* Home when user is logged in */
    Route::get('/', [Blog::class, 'index']);

});

require __DIR__.'/auth.php';
