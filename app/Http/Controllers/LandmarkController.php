<?php


// app/Http/Controllers/LandmarkController.php

namespace App\Http\Controllers;

use App\Models\Landmark;
use App\Models\Post;
use Illuminate\Http\Request;

class LandmarkController extends Controller
{
    public function show($id)
    {

        $landmark = Landmark::with('posts.user')->findOrFail($id); 
        $posts = $landmark->posts;
        // Retrieve the landmark by ID or fail if not found
        $landmark = Landmark::findOrFail($id);

        // $landmark->tripOptions = json_decode($landmark->tripOptions, true);
        //$landmark->activities = json_decode($landmark->activities, true);

        // Retrieve posts related to this landmark
       // $posts = Post::where('landmark_id', $id)->get();

        // Return the view with the landmark and posts data
        return view('landmark.show', compact('landmark', 'posts'));
    }


    public function index()
    {
        $landmarks = Landmark::all();

        return view('home', [
            'landmarks' => $landmarks,
        ]);
    }
}
