<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\escuelas;

class tab_escuelas extends Controller
{
    public function altaescuelas()
    {
		
        $clavequesigue = escuelas::orderBy('id_esc','desc')
        ->take(1)
        ->get();
        $id_es = $clavequesigue[0]->id_esc+1;
        
        
        
		
		
	 					
							
		//return $muncipios;
	   return view ("sistema.altaescuelas")
	  
	   ->with('id_es',$id_es);
    }	
    public function guardaescuelas(Request $request)
    { 
		$id_esc = $request->id_esc;
		$nombre = $request->nombre;
        $telefono= $request->telefono;
        $calle= $request->calle;
        $numero= $request->numero;
        $municipio= $request->municipio;
        $estado= $request->estado;
		$activo = $request->activo;
		
	
		
		///NUNCA SE RECIBEN LOS ARCHIVOS
		
		
		$this->validate($request,[
	     'id_esc'=>'required|numeric',
         'nombre'=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
         'telefono'=>'required|regex:/^[0-9]{10}$/',
         'calle'=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
         'numero'=>'required|regex:/^[0-9]+$/',
		 'municipio'=>'required|regex:/^[A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
         'estado'=>'required|regex:/^[A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
     
	     ]);

      
		 
		 //insert into clientes(idm,nombre,edad,sexo) values('$idm',
		 //'$nombre')
		    $esc = new escuelas;
			$esc->id_esc = $request->id_esc;
			$esc->nombre = $request->nombre;
			$esc->telefono =$request->telefono;
			$esc->calle= $request->calle;
			$esc->numero=$request->numero;
			$esc->municipio=$request->municipio;
			$esc->estado=$request->estado;
			$esc->activo=$request->activo;
			$esc->save();
		$proceso = "Alta Escuelas";	
	    $mensaje="Registro guardado correctamente";
		return view('sistema.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);
	}		
	public function reporteescuelas()
	{
	$escuelas = escuelas::orderBy('nombre','asc')->get();
	return view ('sistema.reporteescuelas')
	->with('escuelas',$escuelas);
	
	}
	
}
