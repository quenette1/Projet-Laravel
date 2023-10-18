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
        Schema::table('articles', function (Blueprint $table) {
            $table->string('description',1000);
            $table->string('emplacement',50);
            $table->unsignedBigInteger('idOrganisateur')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            Schema::table('articles', function (Blueprint $table) {
                $table->dropColumn('description');
                $table->dropColumn('emplacement');
                $table->dropColumn('idOrganisateur');
            });
        });
    }
};
