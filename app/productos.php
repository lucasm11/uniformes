<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    protected $primaryKey = 'id_prod';  
   protected $fillable=['id_prod','id_esc','tipo','talla',
                       'disponoble','ubicacion','precio'];
}
