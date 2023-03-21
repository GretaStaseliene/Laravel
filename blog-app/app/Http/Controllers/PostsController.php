<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostsController extends Controller
{
    public function index() {

        $posts = Posts::all();

        return view('posts', [
            'posts' => $posts
        ]);
    }

    public function newPost() {
        return view('newPost');
    }

    public function savePost(Request $request) {
        $newPost = new Posts;
        $newPost->title = $request->title;
        $newPost->content = $request->content;
        $newPost->photo = $request->photo;
        $newPost->comments_count = 0;
        $newPost->user_id = auth()->user()->id;
        $newPost->save();

        return redirect('/posts');
    }

    public function singlePost($id) {
        // Posts::where('id', $id)->get();
        $post = Posts::find($id);
        $post->users;

        return view('singlePost', [
            'post' => $post
        ]);
    }
}
