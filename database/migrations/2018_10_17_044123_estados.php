<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Estados extends Migration
{
    
    public function up()
    {
        Schema::create('estados', function(Blueprint $table){
            $table->increments('id_est');
            $table->string('nombre',40);
     
            $table->rememberToken();
            $table->timestamps();

});
    }

    
    public function down()
    {
        Schema::drop('estados'); 
    }
}
