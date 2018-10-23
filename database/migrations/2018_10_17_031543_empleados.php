<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Empleados extends Migration
{
   
    public function up()
    {
        Schema::create('empleados', function(Blueprint $table){
            $table->increments('id_emp');
            $table->string('nombre',40);
            $table->string('tipo',20);
            $table->rememberToken();
            $table->timestamps();

});
    }

    
    public function down()
    {
        Schema::drop('empleados');
    }
    }

