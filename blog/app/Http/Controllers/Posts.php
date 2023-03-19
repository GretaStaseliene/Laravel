<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts as PostModel;

class Posts extends Controller
{
    public function index() {
        return view('posts');
    }

    public function newPost() {
        return view('newPost');
    }

    public function savePost(Request $request) {
        $newPost = new PostModel;
        $newPost->title = $request->title;
        $newPost->content = $request->content;
        $newPost->save();

        return redirect('/Posts');
    }
}
