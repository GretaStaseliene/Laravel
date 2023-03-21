@extends('layouts.main')

@section('content')
    <a href="/posts" class="btn btn-outline-dark">Back to posts</a>
    <h1>{{$post->title}}</h1>
    <div class="d-flex gap-2 w-100 justify-content-between">
        <div>
            <img src="{{$post->photo}}" alt="{{$post->title}}">
            <div class="d-flex gap-2 w-100 justify-content-between info">
                <span>Author: {{$post->users->name}}</span>
                <span>Comments: {{$post->comments_count}}</span>
                <span>Created at: {{date('Y-m-d', strtotime($post->created_at))}}</span>
            </div>
            <p class="mt-2">{!! $post->content !!}</p>
        </div>
    </div>
@stop