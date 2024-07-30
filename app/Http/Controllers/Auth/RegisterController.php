<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{


   
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
         

        // validation 
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed',
        ]);
        // dd('store');
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if(!auth()->attempt($request->only('email','password')))
        {
            return back()->with('status','Invalid login details');
        }
      
        return redirect()->route('dashboard');
    }
}
