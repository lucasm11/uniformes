<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ventas extends Migration
{
   
    public function up()
    {
        
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('id_ven');
            $table->date('fecha');
            $table->time('hora');
            $table->integer('id_cli')->unsigned();
            $table->foreign('id_cli')->references('id_cli')->on('clientes');
            $table->integer('id_emp')->unsigned();
            $table->foreign('id_emp')->references('id_emp')->on('empleados');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::drop('ventas'); 
    }
}
