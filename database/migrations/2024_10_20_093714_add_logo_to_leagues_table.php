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
    Schema::table('leagues', function (Blueprint $table) {
        $table->string('icon')->nullable(); // Campo para el nombre del archivo del logo
    });
}

public function down()
{
    Schema::table('leagues', function (Blueprint $table) {
        $table->dropColumn('icon');
    });
}

};
