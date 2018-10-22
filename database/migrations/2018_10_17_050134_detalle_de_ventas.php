<?php


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleDeVentas extends Migration
{
   
    public function up()
    {
        Schema::create('detalle_de_ventas', function (Blueprint $table) {
            $table->increments('id_det');
            $table->integer('cantidad');
            $table->double('total');
            $table->integer('id_ven')->unsigned();
            $table->foreign('id_ven')->references('id_ven')->on('ventas');
            $table->integer('id_prod')->unsigned();
            $table->foreign('id_prod')->references('id_prod')->on('productos');
            $table->rememberToken();
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::drop('detalle_de_ventas'); 
    }
}
