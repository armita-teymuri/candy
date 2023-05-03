<?php

use App\Http\Controllers\loginController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('home');
});

Route::get("/register", [RegisterController::class, "index"]);
Route::post("/register", [RegisterController::class, "register"]);


Route::get("/login", [LoginController::class, "index"]);
Route::post("/login", [LoginController::class, "login"]);

Route::get("/home", [HomeController::class, "index"]);
Route::get("/logout", [LogoutController::class, "index"]);

Route::get("/create", [ProductController::class, "index"]);
Route::post("/create", [ProductController::class, "store"]);
