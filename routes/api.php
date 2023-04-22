<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\MovieController;
use App\Http\Resources\MovieResource;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/movies',[MovieController::class,'index']);
// Route::post('/movies',[MovieController::class,'store']);
// // Route::get('/movies/popular',[MovieController::class,'popular']);
// Route::get('/movies/{id}',[MovieController::class,'show']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('movies/search/{title}', [MovieController::class, 'search']);
Route::get('movies/popular', [MovieController::class, 'popular']);
Route::get('movies/current', [MovieController::class, 'current']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::resource('movies', MovieController::class)->only(['update', 'store', 'destroy']);

    // API route for logout user
    Route::post('/logout', [AuthController::class, 'logout']);
});
