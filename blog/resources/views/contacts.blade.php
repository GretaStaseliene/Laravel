@include('navigation', [
    'pages' => [
        'Home',
        'About us',
        'New Post',
        'Posts',
        'Prices',
        'Contacts'
    ]
])

@extends('layouts.main')

@section('content')

    <a href="/" class="btn btn-success">Home</a>
    
    <h2>contacts</h2>
    
    @foreach($contacts as $key => $value)
        <div>
            {{$key}}: {{$value}}
        </div>
    @endforeach

@stop