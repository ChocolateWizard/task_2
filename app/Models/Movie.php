<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_movies', 'movie_id', 'user_id');
    }
    //======================================================================================
    


}
