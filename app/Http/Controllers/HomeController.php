<?php

namespace App\Http\Controllers;

use App\Models\Candy;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $candies = Candy::all();
        return view('home', compact("candies"));
    }
}
