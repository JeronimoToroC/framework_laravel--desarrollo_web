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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100)->unique();;
            $table->text('descripcion')->nullable();
            $table->integer('duracion')->nullable();
            $table->decimal('precio', 8, 2)->default(0.00);
            $table->boolean('disponible')->default(true);
            $table->date('fecha_inicio');
            $table->time('hora_inicio')->nullable();
            $table->enum('nivel', ['básico', 'intermedio', 'avanzado']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
