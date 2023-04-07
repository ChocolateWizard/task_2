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
        Schema::table('users', function (Blueprint $table) {
            $table->bigInteger('country_id', false, true)->nullable(false);
            $table->index('country_id', 'UX_users_country_id_isfrom_countries_id');
            $table->foreign('country_id', 'FK_users_country_id_isfrom_countries_id')->references('id')->on('countries')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('FK_users_country_id_isfrom_countries_id');
            $table->dropIndex('UX_users_country_id_isfrom_countries_id');
            $table->dropColumn('country_id');
        });
    }
};
