<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // Remove the index method if it's not needed
    public function index()
    {
        // If you want to keep the index method for some reason, consider updating it to fit new requirements
        $posts = Post::latest()->with('user', 'likes');
        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        return view('post.show', [
            'post' => $post
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'body' => 'required|string',
            // 'landmark_id' => 'required|exists:landmarks,id', 
        ]);

        // dd('ok');
       
        Post::create([
            'body' => $request->body,
            'landmark_id' => $request->input('landmark_id'),
        ]);


        return back()->with('status', 'Post created successfully!');
    }


    public function destroy(Post $post)
    {
        $post->delete();
        return back();
    }
}
