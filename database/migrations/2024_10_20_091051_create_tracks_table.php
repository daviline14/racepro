<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('tracks', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->foreignId('country_id')->constrained('countries')->onDelete('cascade'); // Relación con la tabla de países
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('tracks');
}

};
