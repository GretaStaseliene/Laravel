<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blog extends Controller
{
    public function index()
    {
        return view('home', [
            'pages' => [
                'Home',
                'About us',
                'Services',
                'Prices',
                'Contacts'
            ]
        ]);
    }
    
    public function aboutUs() {
        return view('aboutUs');
    }

    public function services() {
        return view('services', [
            'services' => ['Manicure', 'Pedicure', 'Makeup', 'Massage']
        ]);
    }

    public function prices() {
        return view('prices', [
            'prices' => ['manicure' => '25eur', 'Pedicure' => '35eur', 'Makeup' => '38eur', 'Massage' => '45eur']
        ]);
    }

    public function contacts() {
        return view('contacts', [
            'contacts' => [
                'name' => 'Onute',
                'surname' => 'Pakalnute',
                'email' => 'onutepakalnute@gmail.com',
                'phone' => '+37069854123'
            ]
        ]);
    }
}

