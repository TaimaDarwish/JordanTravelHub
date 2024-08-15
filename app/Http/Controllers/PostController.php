<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
class PostController extends Controller
{
    // Remove the index method if it's not needed
    public function index()
    {
        // If you want to keep the index method for some reason, consider updating it to fit new requirements
        $posts = Post::latest()->with('user', 'likes')->get();
        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        $post->load('user', 'likes');
        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'body' => 'required|string',
           'landmark_id' => 'required|exists:landmarks,id', 
        ]);

        // dd('ok');
        $user = auth()->user();
        Post::create([
            'body' => $request->body,
            'landmark_id' => $request->input('landmark_id'),
            'user_name' => $user->username,
        ]);
        
        // return redirect()->route('landmarks.show', $request->landmark_id);

        return back()->with('status', 'Post created successfully!');
    }


    public function destroy(Post $post)
    {
        // Check if the authenticated user is the owner of the post
        if ($post->user_id !== Auth::id()) {
            return redirect()->route('posts.index')->with('error', 'You do not have permission to delete this post.');
        }

        $post->delete();
        return back()->with('status', 'Post deleted successfully!');
    }
}
