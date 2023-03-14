<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home', [
        'pages' => [
            'Home',
            'About us',
            'Services',
            'Prices',
            'Contacts'
        ]
    ]);
});

Route::get('/Home', function () {
    return view('home', [
        'pages' => [
            'Home',
            'About us',
            'Services',
            'Prices',
            'Contacts'
        ]
    ]);
});

Route::get('/About us', function () {
    return view('aboutUs');
});

Route::get('/Services', function () {
    return view('services');
});

Route::get('/Prices', function () {
    return view('prices');
});

Route::get('/Contacts', function () {
    return view('contacts');
});
