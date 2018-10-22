<?php


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clientes extends Migration
{
    
    public function up()
    {
       
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id_cli');
            $table->string('nombre');
            $table->string('app');
            $table->string('apm');
            $table->string('telefono');
            $table->string('correo');
            $table->string('calle');
            $table->integer('num_ext');
            $table->integer('num_int');
            $table->integer('id_mun')->unsigned();
            $table->foreign('id_mun')->references('id_mun')->on('municipios');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::drop('clientes'); 
    }
}
