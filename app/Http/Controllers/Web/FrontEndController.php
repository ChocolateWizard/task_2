<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Country;
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
        $genresAsString = $movie->genresAsString();
        $directorsAsString = $movie->directorsAsString();
        $writersAsString = $movie->writersAsString();
        $actorsAsString = $movie->actorsAsString();

        $actors = $movie->actors->all();
        return view('show', [
            'movie' => $movie,
            'genresAsString' => $genresAsString,
            'directorsAsString' => $directorsAsString,
            'writersAsString' => $writersAsString,
            'actorsAsString' => $actorsAsString,
            'actors' => $actors
        ]);
    }
    public function register()
    {
        $countries = Country::all();
        return view('users.register', ['countries' => $countries]);
    }
    public function login()
    {
        return view('users.login');
    }
}
