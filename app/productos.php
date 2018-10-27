<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    protected $primaryKey = 'id_prod';  
   protected $fillable=['id_prod','tipo','talla','disponible',
                       'ubicacion','precio','id_esc'];
}
