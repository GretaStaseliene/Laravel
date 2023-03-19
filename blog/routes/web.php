<?php

use Illuminate\Support\Facades\Route;
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
// $pages = array('Home', 'About us', 'Services', 'Prices', 'Contacts');

Route::get('/', [Blog::class, 'index']);

Route::get('/Home', [Blog::class, 'index']);

Route::get('/About us', [Blog::class, 'aboutUs']);

Route::get('/Services', [Blog::class, 'services']);

Route::get('/Prices', [Blog::class, 'prices']);

Route::get('/Contacts', [Blog::class, 'contacts']);
