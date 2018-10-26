<?php


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Escuelas extends Migration
{
    
    public function up()
    {
        Schema::create('escuelas', function(Blueprint $table){
            $table->increments('id_esc');
            $table->string('nombre',50);
            $table->string('telefono',10);
            $table->string('calle',50);
            $table->integer('numero');
            $table->string('municipio',50);
            $table->string('estado',50);
            $table->string('activo',2);
            $table->rememberToken();
            $table->timestamps();

});
    }

   
    public function down()
    {
        Schema::drop('escuelas');
    }
}
