<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Support\Facades\DB;

class Movie extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'movies';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'release_date',
        'cover_url',
        'description',
        'rating'
    ];

    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class, 'movie_genre', 'movie_id', 'genre_id');
    }

    public function genresAsString(): string
    {
        $genres = $this->belongsToMany(Genre::class, 'movie_genre', 'movie_id', 'genre_id')->get();
        $pom = '';
        $noComma = true;
        foreach ($genres as $genre) {
            if ($noComma == true) {
                $pom = $genre->name;
                $noComma = false;
                continue;
            }
            $pom = $pom . ', ' . $genre->name;
        }
        return $pom;
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_movies', 'movie_id', 'user_id');
    }
    //======================================================================================
    public function directors(): BelongsToMany
    {
        $directorClassId = ProductionRole::where('name', '=', 'Director')->first()->id;
        return $this->belongsToMany(Person::class, 'production', 'movie_id', 'person_id')
            ->where('production_role_id', '=', $directorClassId);
    }
    public function writers(): BelongsToMany
    {
        $writerClassId = ProductionRole::where('name', '=', 'Writer')->first()->id;
        return $this->belongsToMany(Person::class, 'production', 'movie_id', 'person_id')
            ->where('production_role_id', '=', $writerClassId);
    }
    public function actors(): BelongsToMany
    {
        $actorClassId = ProductionRole::where('name', '=', 'Actor')->first()->id;
        return $this->belongsToMany(Person::class, 'production', 'movie_id', 'person_id')
            ->where('production_role_id', '=', $actorClassId);
    }
    public function directorsAsString(): string
    {
        $directorClassId = ProductionRole::where('name', '=', 'Director')->first()->id;
        $directors = $this->belongsToMany(Person::class, 'production', 'movie_id', 'person_id')
            ->where('production_role_id', '=', $directorClassId)->get();
        $pom = '';
        $noComma = true;
        foreach ($directors as $director) {
            if ($noComma == true) {
                $pom = $director->first_name . ' ' . $director->last_name;
                $noComma = false;
                continue;
            }
            $pom = $pom . ', ' . $director->first_name . ' ' . $director->last_name;
        }
        return $pom;
    }
    public function writersAsString(): string
    {
        $writerClassId = ProductionRole::where('name', '=', 'Writer')->first()->id;
        $writers = $this->belongsToMany(Person::class, 'production', 'movie_id', 'person_id')
            ->where('production_role_id', '=', $writerClassId)->get();
        $pom = '';
        $noComma = true;
        foreach ($writers as $writer) {
            if ($noComma == true) {
                $pom = $writer->first_name . ' ' . $writer->last_name;
                $noComma = false;
                continue;
            }
            $pom = $pom . ', ' . $writer->first_name . ' ' . $writer->last_name;
        }
        return $pom;
    }
    public function actorsAsString(): string
    {
        $actorClassId = ProductionRole::where('name', '=', 'Actor')->first()->id;
        $actors = $this->belongsToMany(Person::class, 'production', 'movie_id', 'person_id')
            ->where('production_role_id', '=', $actorClassId)->get();
        $pom = '';
        $noComma = true;
        foreach ($actors as $actor) {
            if ($noComma == true) {
                $pom = $actor->first_name . ' ' . $actor->last_name;
                $noComma = false;
                continue;
            }
            $pom = $pom . ', ' . $actor->first_name . ' ' . $actor->last_name;
        }
        return $pom;
    }
    
}
