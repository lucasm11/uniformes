<?php


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrdenesDeProducciones extends Migration
{
  
    public function up()
    {
        Schema::create('ordenes_de_producciones', function (Blueprint $table) {
            $table->increments('id_ord');
            $table->date('fecha_sol');
            $table->date('fecha_ent');
            $table->integer('cantidad');
            $table->integer('id_emp')->unsigned();
            $table->foreign('id_emp')->references('id_emp')->on('empleados');
            $table->integer('id_prod')->unsigned();
            $table->foreign('id_prod')->references('id_prod')->on('productos');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::drop('ordenes_de_producciones'); 
    }
}
