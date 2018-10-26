<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    protected $primaryKey = 'id_prod';  
   protected $fillable=['id_prod','escuela','tipo','talla',
                       'disponoble','ubicacion','precio',id_escuela','id_det','id_orden'];
}
