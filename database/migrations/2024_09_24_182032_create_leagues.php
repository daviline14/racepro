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
        Schema::create('leagues', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('name');
            $table->unsignedBigInteger('simulator');
            $table->unsignedBigInteger('category');
            $table->integer('max_racers');
            $table->unsignedBigInteger('user');
            $table->timestamps();

            $table->foreign('simulator')->references('id')->on('simulators')->onDelete('cascade');
            $table->foreign('category')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leagues');
    }
};
