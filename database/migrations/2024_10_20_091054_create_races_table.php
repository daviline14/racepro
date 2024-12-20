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
    Schema::create('races', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->date('date');
        $table->foreignId('league_id')->constrained()->onDelete('cascade');
        $table->foreignId('track_id')->constrained()->onDelete('cascade');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('races');
}

};
