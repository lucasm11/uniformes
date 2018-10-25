<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class municipios extends Model
{
    protected $primaryKey = 'id_mun';  
   protected $fillable=['id_mun','nombre','id_est'];

}
