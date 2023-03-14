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
// $pages = array('Home', 'About us', 'Services', 'Prices', 'Contacts');

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
        'pages' => ['Home', 'About us', 'Services', 'Prices', 'Contacts']
    ]);
});

Route::get('/About us', function () {
    return view('aboutUs');
});

Route::get('/Services', function () {
    return view('services', [
        'services' => ['Manicure', 'Pedicure', 'Makeup', 'Massage']
    ]);
});

Route::get('/Prices', function () {
    return view('prices', [
        'prices' => ['manicure' => '25eur', 'Pedicure' => '35eur', 'Makeup' => '38eur', 'Massage' => '45eur']
    ]);
});

Route::get('/Contacts', function () {
    return view('contacts', [
        'contacts' => [
            'name' => 'Onute',
            'surname' => 'Pakalnute',
            'email' => 'onutepakalnute@gmail.com',
            'phone' => '+37069854123'
        ]
    ]);
});
