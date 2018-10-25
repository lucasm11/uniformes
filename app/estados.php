<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estados extends Model
{
    protected $primaryKey = 'id_est';  
   protected $fillable=['id_est','nombre'];

}
