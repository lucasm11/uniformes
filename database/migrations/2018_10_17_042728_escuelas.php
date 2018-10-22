<?php


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Escuelas extends Migration
{
    
    public function up()
    {
        Schema::create('escuelas', function(Blueprint $table){
            $table->increments('id_esc');
            $table->string('nombre',40);
            $table->rememberToken();
            $table->timestamps();

});
    }

   
    public function down()
    {
        Schema::drop('escuelas');
    }
}
