@extends('layouts.main')

@section('content')

<a href="/" class="btn btn-success">Home</a>

    <h2>All Posts</h2>

    @foreach ($posts as $post)
        
        <div class="list-group w-auto mt-3 post-div">
            <a href="/posts/{{$post->id}}" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
            
            <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                    <img src="{{$post->photo}}" alt="{{$post->title}}">
                    <div class="d-flex gap-2 w-100 justify-content-between info">
                        <span>Author: {{$post->users->name}}</span>
                        <span>Comments: {{$post->comments_count}}</span>
                        <span>Created at: {{date('Y-m-d', strtotime($post->created_at))}}</span>
                    </div>
                    <h4 class="mt-2">{{$post->title}}</h4>
                </div>
            </div>
            </a>
        </div>

    @endforeach

@stop