<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    protected $primaryKey = 'id_emple';  
   protected $fillable=['id_emple','nombre','app','apm','edad','sexo',
                       'telefono','correo',];
}
