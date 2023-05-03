<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        if (Auth::attempt($request->only('phone', 'password')))
            return redirect('home');
        return redirect('login');
    }
}
