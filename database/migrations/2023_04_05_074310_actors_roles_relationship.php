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
        Schema::table('actors_roles', function (Blueprint $table) {
            $table->index('production_id', 'UX_actors_roles_production_id_actingrole_production_id');
            $table->foreign('production_id', 'FK_actors_roles_production_id_actingrole_production_id')->references('id')->on('production')->onUpdate('cascade')->onDelete('cascade');          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('actors_roles', function (Blueprint $table) {
            $table->dropForeign('FK_actors_roles_production_id_actingrole_production_id');
            $table->dropIndex('UX_actors_roles_production_id_actingrole_production_id');          
        });
    }
};
