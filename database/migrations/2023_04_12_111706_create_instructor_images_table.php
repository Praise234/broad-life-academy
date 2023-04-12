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
        Schema::create('instructor_images', function (Blueprint $table) {
            $table->id();
            $table->string("url");
            $table->unsignedBigInteger('instructorId');
            $table->timestamps();

            $table->foreign('instructorId')->references('id')->on('instructors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructor_images');
    }
};
