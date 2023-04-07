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
        Schema::table('production', function (Blueprint $table) {
            $table->index('movie_id', 'UX_production_movie_id_agregation_movies_id');
            $table->foreign('movie_id', 'FK_production_movie_id_agregation_movies_id')->references('id')->on('movies')->onUpdate('cascade')->onDelete('cascade');
            $table->index('person_id', 'UX_production_person_id_agregation_people_id');
            $table->foreign('person_id', 'FK_production_person_id_agregation_people_id')->references('id')->on('people')->onUpdate('cascade')->onDelete('cascade');
            $table->index('production_role_id', 'UX_production_production_role_id_agregation_production_roles_id');
            $table->foreign('production_role_id', 'FK_production_production_role_id_agregation_production_roles_id')->references('id')->on('production_roles')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('production', function (Blueprint $table) {
            $table->dropForeign('FK_production_production_role_id_agregation_production_roles_id');
            $table->dropIndex('UX_production_production_role_id_agregation_production_roles_id');
            $table->dropForeign('FK_production_person_id_agregation_people_id');
            $table->dropIndex('UX_production_person_id_agregation_people_id');
            $table->dropForeign('FK_production_movie_id_agregation_movies_id');
            $table->dropIndex('UX_production_movie_id_agregation_movies_id');
        });
    }
};
