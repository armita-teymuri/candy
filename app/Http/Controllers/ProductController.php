<?php

namespace App\Http\Controllers;

use App\Models\Candy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        if (!Auth::check() || (Auth::check() and Auth::user()->role != 2))
            return "<h1>Forbidden Action</h1>";
        $file = $request->file('imagefile');
        $uid = (string) Str::uuid() . "." . $file->getClientOriginalExtension();
        $file->move('uploads', $uid);
        $request["image"] = $uid;
        $request["user_id"] = Auth::user()->id;
        Candy::create($request->all());
        return redirect('home');
    }
}
