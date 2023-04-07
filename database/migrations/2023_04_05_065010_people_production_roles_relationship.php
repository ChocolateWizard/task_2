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
        Schema::table('people_production_roles', function (Blueprint $table) {
            $table->index('person_id', 'UX_ppr_person_id_qualification_people_id');
            $table->foreign('person_id', 'FK_ppr_person_id_qualification_people_id')->references('id')->on('people')->onUpdate('cascade')->onDelete('cascade');
            $table->index('production_role_id', 'UX_ppr_production_role_id_qualification_production_roles_id');
            $table->foreign('production_role_id', 'FK_ppr_production_role_id_qualification_production_roles_id')->references('id')->on('production_roles')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('people_production_roles', function (Blueprint $table) {
            $table->dropForeign('FK_ppr_production_role_id_qualification_production_roles_id');
            $table->dropIndex('UX_ppr_production_role_id_qualification_production_roles_id');
            $table->dropForeign('FK_ppr_person_id_qualification_people_id');
            $table->dropIndex('UX_ppr_person_id_qualification_people_id');
        });
    }
};
