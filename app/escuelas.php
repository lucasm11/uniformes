<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class escuelas extends Model
{
    protected $primaryKey = 'id_esc';  
    protected $fillable=['id_esc','nombre','telefono','calle',
                        'numero','municipio','estado','activo'];
 
}
