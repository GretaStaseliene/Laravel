@extends('layouts.main')

@section('content')

<a href="/" class="btn btn-success">Home</a>

    <h2>All Posts</h2>

    @foreach ($posts as $post)
        
        <div class="list-group w-auto">
            <a href="/posts/{{$post->id}}" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
            
            <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                    <img src="{{$post->photo}}" alt="{{$post->title}}">
                    <h4 class="mt-2">{{$post->title}}</h4>
                </div>
            </div>
            </a>
        </div>

    @endforeach

@stop