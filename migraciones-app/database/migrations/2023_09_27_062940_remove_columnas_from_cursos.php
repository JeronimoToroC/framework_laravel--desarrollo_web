<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('cursos', function (Blueprint $table) {
            $table->dropColumn('duracion');
            $table->dropColumn('hora_inicio');
        });
    }

    public function down()
    {
        Schema::table('cursos', function (Blueprint $table) {
            $table->integer('duracion')->nullable();
            $table->time('hora_inicio')->nullable();
        });
    }
};
