<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontEndController extends Controller
{


    public function home()
    {
        $popularMovies = MovieController::getPopularMovies(80, 10);
        $currentMovies = MovieController::getCurrentMovies(1960, 10);

        return view('index', ['popularMovies' => $popularMovies, 'currentMovies' => $currentMovies]);
    }
    public function show(Movie $movie)
    {
        return view('show', ['movie' => $movie]);
    }
}
