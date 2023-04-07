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
        Schema::create('user_movies', function (Blueprint $table) {
            $table->bigInteger('user_id',false,true);
            $table->bigInteger('movie_id',false,true);
            $table->primary(array('user_id', 'movie_id'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_movies');
    }
};
