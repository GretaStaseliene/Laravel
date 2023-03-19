@include('navigation', [
    'pages' => [
        'Home',
        'About us',
        'Services',
        'Prices',
        'Contacts'
    ]
]);
@extends('layouts.main');

<div class="container">
    <a href="/" class="btn btn-success">Home</a>
    
    <h2>contacts</h2>
    
    @foreach($contacts as $key => $value)
        <div>
            {{$key}}: {{$value}}
        </div>
    @endforeach
</div>