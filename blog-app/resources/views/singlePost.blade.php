@extends('layouts.main')

@section('content')
    <a href="/posts" class="btn btn-outline-dark">Back to posts</a>
    <h1>{{$post->title}}</h1>
    <div class="d-flex gap-2 w-100 justify-content-between">
        <div>
            <img src="{{$post->photo}}" alt="{{$post->title}}">
            <h4 class="mt-2">{{$post->content}}</h4>
        </div>
    </div>
@stop