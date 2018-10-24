<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uniformes extends Controller
{
    public function areacirculo($radio)
    {
        $pi = 3.14;
        $area = $pi * $radio * $radio;
        echo "el area circulo es: ". $area;
    }
}
