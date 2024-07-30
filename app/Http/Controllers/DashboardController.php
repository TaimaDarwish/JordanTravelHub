<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Mail\PostLiked;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    
    
    public function index()
    {
        Mail::to("tai20200415@std.psut.edu.jo")->send(new PostLiked());
        return view('dashboard');
    }
}