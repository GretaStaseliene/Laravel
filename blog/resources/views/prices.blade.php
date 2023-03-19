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

    <h2>prices</h2>
    @foreach($prices as $service => $price)
        <div class="list-group w-auto">
            <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
            <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
            <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                <h4 class="mb-0">{{$service}}</h4>
                <p class="mb-0 opacity-75">{{$price}}</p>
                </div>
            </div>
            </a>
        </div>
    @endforeach
</div>
