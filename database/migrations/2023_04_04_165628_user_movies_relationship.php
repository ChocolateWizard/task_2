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
        Schema::table('user_movies', function (Blueprint $table) {
            $table->index('user_id', 'UX_user_movies_user_id_library_users_id');
            $table->foreign('user_id', 'FK_user_movies_user_id_library_users_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->index('movie_id', 'UX_user_movies_movie_id_library_movies_id');
            $table->foreign('movie_id', 'FK_user_movies_movie_id_library_movies_id')->references('id')->on('movies')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_movies', function (Blueprint $table) {
            $table->dropForeign('FK_user_movies_movie_id_library_movies_id');
            $table->dropIndex('UX_user_movies_movie_id_library_movies_id');
            $table->dropForeign('FK_user_movies_user_id_library_users_id');
            $table->dropIndex('UX_user_movies_user_id_library_users_id');
        });
    }
};
