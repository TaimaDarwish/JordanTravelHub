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

    //     // Retrieve the landmark by ID or fail if not found
    //     // $landmark = Landmark::findOrFail($id);
    //     // $landmark->tripOptions = json_decode($landmark->tripOptions, true);
    //     //$landmark->activities = json_decode($landmark->activities, true);
    //     // Retrieve posts related to this landmark
    //     // $posts = Post::where('landmark_id', $id)->get();
    //     // Return the view with the landmark and posts data

        $landmark = Landmark::with('posts.user')->findOrFail($id);
        $posts = $landmark->posts;
        return view('landmark.show', compact('landmark', 'posts'));
    }

//  public function index(): JsonResponse
//     {
//         // Sample landmarks array
//         $landmarks = [
//             ['id' => 1, 'name' => 'Eiffel Tower', 'location' => 'Paris'],
//             ['id' => 2, 'name' => 'Statue of Liberty', 'location' => 'New York'],
//             ['id' => 3, 'name' => 'Great Wall of China', 'location' => 'Beijing']
//         ];

//         return response()->json($landmarks);
//     }
    public function index()
    {
        $landmarks = Landmark::all();

        // return view ('home' , compact($landmarks));

        // return view('home', [
        //     'landmarks' => $landmarks,
        // ]);
          return response()->json(['landmarks' => $landmarks]);}


    }
    // public function apiIndex()
    // {
    //     $landmarks = Landmark::all(); // Retrieve all landmarks
    //     return response()->json(['landmarks' => $landmarks]);
    // }

