@extends('layouts.main')

@section('content')

    <a href="/" class="btn btn-success">Home</a>

    <h1>New Post</h1>

    <form method="POST">
        {{-- Prie formu privaloma VISADA prideti toki inputa !!!!!!!!! --}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Photo URL</label>
            <input type="text" name="photo" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Content</label>
            <input type="text" name="content" class="form-control">
        </div>
        <button class="btn btn-primary">Add Post</button>
    </form>

@stop