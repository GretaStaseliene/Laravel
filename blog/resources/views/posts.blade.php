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

    <h2>All Posts</h2>

        <div class="list-group w-auto">
            <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
            <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
            <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                    <h4 class="mb-0">Pavadinimas</h4>
                </div>
            </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
                <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                        <h4 class="mb-0">Pavadinimas</h4>
                    </div>
                </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                    <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
                    <div class="d-flex gap-2 w-100 justify-content-between">
                        <div>
                            <h4 class="mb-0">Pavadinimas</h4>
                        </div>
                    </div>
                    </a>
        </div>

@stop