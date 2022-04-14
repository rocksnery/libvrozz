<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaAutores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autores', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->String('au_nombre',40);
            $table->String('au_ap',20);
            $table->String('au_am',20);
            $table->String('telefono',15);
            $table->String('calle',40);
            $table->String('ciudad',40);
            $table->String('estado',20);
            $table->String('pais',20);
            $table->date('fecha_nac');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autores');
    }
}
