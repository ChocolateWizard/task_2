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
        Schema::create('people_production_roles', function (Blueprint $table) {
            $table->bigInteger('person_id', false, true);
            $table->bigInteger('production_role_id', false, true)->nullable(false);
            $table->primary(array('person_id', 'production_role_id'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people_production_roles');
    }
};
