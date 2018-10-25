<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $primaryKey = 'id_cli';  
   protected $fillable=['id_cli','nombre','app','apm',
                       'telefono','correo','calle','num_ext','num_int','id_mun','archivo'];

}
