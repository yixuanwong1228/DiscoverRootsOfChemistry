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
        Schema::table('examples', function (Blueprint $table) {
            $table->double('molecular_weight', 8,3);
            $table->string('state');
            $table->text('structure');
            $table->text('physical_properties');
            $table->string('boiling_point');
            $table->string('density');
            $table->text('chemical_properties');
            $table->text('uses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('examples', function (Blueprint $table) {
            //
        });
    }
};
