<?php


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Municipios extends Migration
{
   
    public function up()
    {
        Schema::create('municipios', function(Blueprint $table){
            $table->increments('id_mun');
            $table->string('nombre',40);
            $table->integer('id_est')->unsigned();
            $table->foreign('id_est')->references('id_est')->on('estados');
            $table->rememberToken();
            $table->timestamps();

});
    }

    
    public function down()
    {
        Schema::drop('municipios'); 
    }
}
