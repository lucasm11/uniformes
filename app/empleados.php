<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleados extends Model
{
    protected $primaryKey = 'id_emp';  
   protected $fillable=['id_emp','nombre','app','apm','edad','correo',
                       'sexo','tipo','archivo'];
}
