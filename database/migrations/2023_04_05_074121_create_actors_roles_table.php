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
        Schema::create('actors_roles', function (Blueprint $table) {          
            $table->bigInteger('production_id', false, true);
            $table->bigInteger('order_num', false, true);
            $table->string('role');
            $table->primary(array('production_id', 'order_num'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actors_roles');
    }
};
