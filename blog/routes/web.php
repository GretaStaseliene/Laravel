<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Blog;
use App\Http\Controllers\Posts;
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
// $pages = array('Home', 'About us', 'Services', 'Prices', 'Contacts');

Route::get('/', [Blog::class, 'index']);

Route::get('/Home', [Blog::class, 'index']);

Route::get('/About us', [Blog::class, 'aboutUs']);

Route::get('/Prices', [Blog::class, 'prices']);

Route::get('/Contacts', [Blog::class, 'contacts']);

// Visu irasu atvaizdavimas
Route::get('/Posts', [Posts::class, 'index']);

// Naujo iraso formos atvaizdavimas
Route::get('/New Post', [Posts::class, 'newPost']);

// Iraso priemimas ir pridejimas i db
Route::post('/New Post', [Posts::class, 'savePost']);