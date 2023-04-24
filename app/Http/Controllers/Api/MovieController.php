<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Collection\MovieCollection;
use App\Http\Resources\Single\MovieResource;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();
        if (is_null($movies)) {
            return response()->json('Data not found', 404);
        }
        return new MovieCollection($movies);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->json('Page not found', 404);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', Rule::unique('movies')->where(function ($query) use ($request) {
                return $query->where('release_date', $request->release_date)->where('description', $request->description)
                    ->where('rating', $request->rating);
            })],
            'release_date' => 'required|date_format:Y-m-d',
            'cover' => 'required|mimes:jpg,bmp,png|max:30720',
            'description' => 'required',
            'rating' => 'required|integer|gte:0|lte:100'
        ]);
        if ($request->hasFile('cover') === true) {
            $cover_url = $request->file('cover')->store('movies/covers', 'public');
            $request->request->remove('cover');
            $request->request->add(['cover_url' => 'storage/' . $cover_url]);
            return Movie::create($request->all());
        }
        return response()->json('Cover image is required', 404);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        if (!ctype_digit($id)) {
            return response()->json('Data not found', 404);
        }
        $movie = Movie::find($id);
        if (is_null($movie)) {
            return response()->json('No movie with given id', 404);
        }
        return new MovieResource($movie);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        return response()->json('Page not found', 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if (!ctype_digit($id)) {
            return response()->json('Data not found', 404);
        }
        $movie = Movie::find($id);
        if (is_null($movie)) {
            return response()->json('No movie with given id', 404);
        }
        $request->validate([
            'title' => 'sometimes|required',
            'release_date' => 'sometimes|required|date_format:Y-m-d',
            'cover' => 'sometimes|required|mimes:jpg,bmp,png|max:30720',
            'description' => 'sometimes|required',
            'rating' => 'sometimes|required|integer|gte:0|lte:100'
        ]);
        if ($request->hasFile('cover') === true) {
            $cover_url = $movie->cover_url;
            if ($cover_url == null || empty($cover_url) || (str_starts_with($cover_url, 'storage') === false)) {
                $cover_url = $request->file('cover')->store('movies/covers', 'public');
                $request->request->remove('cover');
                $request->request->add(['cover_url' => 'storage/' . $cover_url]);
            } else {
                if (File::delete($cover_url)) {
                    $cover_url = $request->file('cover')->store('movies/covers', 'public');
                    $request->request->remove('cover');
                    $request->request->add(['cover_url' => 'storage/' . $cover_url]);
                } else {
                    return response()->json('Unable to update cover image', 404);
                }
            }
        }
        $movie->update($request->all());
        return $movie;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if (!ctype_digit($id)) {
            return response()->json('Data not found', 404);
        }
        $movie = Movie::find($id);
        if (is_null($movie)) {
            return response()->json('No movie with given id', 404);
        }
        if (str_starts_with($movie->cover_url, 'storage') === true) {
            File::delete($movie->cover_url);
        }
        return Movie::destroy($id) == true ? response()->json('Movie deleted successfully') : response()->json('Error in deleting movie', 404);
    }


    //==================================================================================
    //CUSTOM FUNCTIONS

    /**
     * Search for specified movie in storage based on title.
     */
    public function search($title)
    {
        $movies= Movie::where('title', 'like', '%' . $title . '%')->get();
        return new MovieCollection($movies);
    }

    //show popular movies
    public function popular()
    {
        $thresholdRating = 80;
        $movies = Movie::all()->where('rating', '>=', $thresholdRating);
        if (is_null($movies)) {
            return response()->json('Data not found', 404);
        }
        return new MovieCollection($movies);
    }
    //show current movies, aka. those made in current year
    public function current()
    {
        $thresholdYear = date("Y");
        $movies = Movie::where(DB::raw('YEAR(release_date)'), '>=', $thresholdYear)->get();
        if (is_null($movies)) {
            return response()->json('Data not found', 404);
        }
        return new MovieCollection($movies);
    }
}
