<?php

namespace App\Http\Controllers;

use App\Models\Landmark;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $places = Landmark::all();

        return view('home', compact('places'));
    }
}
