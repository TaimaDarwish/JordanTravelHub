<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    
    public function index()
    {
        $posts= Post::latest()->with('user','likes')->paginate(2);
        return view('posts.index',[
            'posts'=> $posts
        ]);
    }
    public function show(Post $post)
    {
        return view('post.show',[
        'post'=> $post
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'body' => 'required|string',
            'landmark' => 'required|string|in:petra,wadi_rum,roman_theater,dead_sea,aqaba',
        ]);
    
        $request->user()->posts()->create([
            'body' => $request->body,
            'landmark' => $request->landmark,
        ]);
    
        return back()->with('status', 'Post created successfully!');
    }
    
    public function destroy(Post $post){
            $post->delete();
            return back();
    }

}
