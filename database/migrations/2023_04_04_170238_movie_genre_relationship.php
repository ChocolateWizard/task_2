<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('movie_genre', function (Blueprint $table) {
            $table->index('movie_id', 'UX_movie_genre_movie_id_isof_movies_id');
            $table->foreign('movie_id', 'FK_movie_genre_movie_id_isof_movies_id')->references('id')->on('movies')->onUpdate('cascade')->onDelete('cascade');
            $table->index('genre_id', 'UX_movie_genre_genre_id_isof_genres_id');
            $table->foreign('genre_id', 'FK_movie_genre_genre_id_isof_genres_id')->references('id')->on('genres')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('movie_genre', function (Blueprint $table) {
            $table->dropForeign('FK_movie_genre_genre_id_isof_genres_id');
            $table->dropIndex('UX_movie_genre_genre_id_isof_genres_id');
            $table->dropForeign('FK_movie_genre_movie_id_isof_movies_id');
            $table->dropIndex('UX_movie_genre_movie_id_isof_movies_id');
        });
    }
};
