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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('commentable_id');
            $table->string('commentable_type');
            $table->text('body');
            $table->timestamps();


             // Define foreign key constraints
             $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
             $table->foreign('commentable_id')->references('id')->on('cars')->onDelete('cascade');
             $table->foreign('commentable_id')->references('id')->on('car_events')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
