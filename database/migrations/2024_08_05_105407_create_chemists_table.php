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
        Schema::create('chemists', function (Blueprint $table) {
            $table->bigIncrements('chemistID'); // Use 'artistId' as the primary key
            $table->string('name');
            $table->text('intro')->nullable();
            $table->date('birthdate')->nullable();
            $table->date('deathdate')->nullable();
            $table->string('nationality')->nullable();
            $table->string('institution')->nullable();
            $table->string('birthPlace')->nullable();
            $table->string('deathPlace')->nullable();
            $table->integer('deathAge')->nullable();
            $table->string('profilePicture')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artists');
    }
};
