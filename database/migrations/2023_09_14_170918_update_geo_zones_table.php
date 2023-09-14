<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('geo_zones', function (Blueprint $table) {
            $table->renameColumn('code_ge', 'code_geo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('geo_zones', function (Blueprint $table) {
            $table->renameColumn('code_geo', 'code_ge');
        });
    }
};
