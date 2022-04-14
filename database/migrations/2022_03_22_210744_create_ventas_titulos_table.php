<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTitulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas_titulos', function (Blueprint $table) {
            $table->timestamps();
            $table->float('cantidad');

            $table->unsignedInteger('id_titulos');
            $table->unsignedBigInteger('id_ventas');

            $table->foreign('id_ventas')->references('id')->on('ventas');
            $table->foreign('id_titulos')->references('id')->on('titulos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas_titulos');
    }
}
