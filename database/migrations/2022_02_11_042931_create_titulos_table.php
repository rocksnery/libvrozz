<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titulos', function (Blueprint $table) {
            $table->id();
            $table->string('nom_libro',40);
            $table->float('precio');
            $table->float('adelanto');
            $table->float('vtas_totales');
            $table->date('fecha_publicion');
            $table->text('nota');
            $table->timestamps();
            $table->unsignedBigInteger('id_editoriales');
            $table->foreign('id_editoriales')->references('id')->on('editoriales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('titulos');
    }
}
