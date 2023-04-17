<?php

use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;
use App\Models\Movie;
use Illuminate\Support\Facades\Route;

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

//show home page
Route::get('/', [FrontEndController::class,'home'])->name('home');

//show movie info
Route::get('/movie/{movie}', [FrontEndController::class,'show']);

//show register form
Route::get('/register',[FrontEndController::class,'register'])->middleware('guest');

//show login form
Route::get('/login',[FrontEndController::class,'login'])->middleware('guest');

//create new user
Route::post('/users',[UserController::class,'store']);

//login user
Route::post('/users/login',[UserController::class,'login']);

//logout user
Route::post('/logout',[UserController::class,'logout']);
