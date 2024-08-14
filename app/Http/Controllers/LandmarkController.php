<?php


// app/Http/Controllers/LandmarkController.php

namespace App\Http\Controllers;

use App\Models\Landmark;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;


class LandmarkController extends Controller
{
    public function show($id)
    {

       
        $landmark = Landmark::with('posts.user')->findOrFail($id);
        $posts = $landmark->posts;
        return view('landmark.show', compact('landmark', 'posts'));
    }

    public function index()
    {
        $landmarks = Landmark::with(['activities', 'tripOptions'])->get();

        $landmarks = Landmark::all();

        
        return response()->json(['landmarks' => $landmarks]);
    }


}


