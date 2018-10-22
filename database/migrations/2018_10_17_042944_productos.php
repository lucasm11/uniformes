<?php


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Productos extends Migration
{
    
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id_prod');
            $table->string('tipo',40);
            $table->integer('talla');
            $table->string('disponible');
            $table->string('ubicacion');
            $table->double('precio');
            $table->integer('id_esc')->unsigned();
            $table->foreign('id_esc')->references('id_esc')->on('escuelas');
            $table->rememberToken();
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::drop('productos');   
    }
}
