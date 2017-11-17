<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariospagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('usuariospagos', function (Blueprint $table) {
            $table->increments('codigousuariopago');
            $table->integer('codigopago')->unsigned();
            $table->integer('codigousuario')->unsigned();
            $table->foreign('codigopago')->references('codigopago')->on('pagos')->onDelete('cascade');
            $table->foreign('codigousuario')->references('codigousuario')->on('usuarios')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuariospagos');
    }
}
