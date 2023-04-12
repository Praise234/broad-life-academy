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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('instructorId');
            $table->unsignedBigInteger('topicId');
            $table->unsignedBigInteger('languageId');
            $table->string('name');
            $table->integer('duration');
            $table->string('description');
            $table->string('objectives');
            $table->timestamps();

            $table->foreign('instructorId')->references('id')->on('instructors');
            $table->foreign('topicId')->references('id')->on('topics');
            $table->foreign('languageId')->references('id')->on('languages');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
