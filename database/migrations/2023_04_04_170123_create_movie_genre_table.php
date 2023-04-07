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
        Schema::create('movie_genre', function (Blueprint $table) {
            $table->bigInteger('movie_id',false,true);
            $table->bigInteger('genre_id',false,true)->nullable(false);
            $table->primary(array('movie_id', 'genre_id'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie_genre');
    }
};
