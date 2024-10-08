<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;


class PostLikecontroller extends Controller
{

    // public function __construct()
    // {
    //     $this ->middleware("auth");

    // }
    public function store(Request $request, Post $post)
    {
        if ($post->likedBy($request->user())) {
            return response(null, 409);
        }

        $post->likes()->create([
            'user_id' => $request->user()->id,
        ]);
        return back();
    }
    public function destroy(Request $request,Post $post){
        $request->user()->likes()->where('post_id', $post->id)->delete();
        return back();
    }
}
