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
            'body' => 'required'
        ]);
        $request->user()->posts()->create($request->only('body'));
        return back()->with('status', 'Post created successfully!');
    }
    public function destroy(Post $post){
            //$this->authorize('delete',$post);
            $post->delete();
            return back();
    }

}
