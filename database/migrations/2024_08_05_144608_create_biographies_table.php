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
        Schema::create('biographies', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('title'); // Title of the biography
            $table->string('timeline'); // Timeline for the biography event
            $table->text('description'); // Detailed description
            $table->string('imageURL'); // URL for the image
            $table->unsignedBigInteger('chemistID');
            $table->foreign('chemistID')->references('chemistID')->on('chemists')->onDelete('cascade'); // Add foreign key constraint
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biographies');
    }
};
