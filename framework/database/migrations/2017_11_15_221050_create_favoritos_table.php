<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavoritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('favoritos', function (Blueprint $table) {
            $table->increments('codigofavorito');
            $table->integer('codigousuario')->unsigned();            
            $table->integer('codigousuariofavorito')->unsigned();
            $table->foreign('codigousuario')->references('codigousuario')->on('usuarios');
            $table->foreign('codigousuariofavorito')->references('codigousuario')->on('usuarios');
            $table->unique(['codigousuario', 'codigousuariofavorito']);
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
        Schema::dropIfExists('favoritos');
    }
}
