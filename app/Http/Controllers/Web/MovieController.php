<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        //
    }

    //==================================================================================
    //CUSTOM FUNCTIONS
    public static function getPopularMovies(int $thresholdRating,int $numberOfMovies)
    {
        return Movie::all()->where('rating','>=',$thresholdRating)->take($numberOfMovies);
    }
    public static function getCurrentMovies(int $thresholdYear,int $numberOfMovies)
    {
        return Movie::where(DB::raw('YEAR(release_date)'),'>=',$thresholdYear)->take($numberOfMovies)->get();
    }
}
