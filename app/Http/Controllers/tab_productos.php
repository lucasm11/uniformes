<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productos;
use App\escuelas;


class tab_productos extends Controller
{
	
	    public function altaproductos()
    {
		// ORM ELOQUENT
		//select * from carreras
		//$carreras=carreras::all();
		//select * from carreras where activo = 'si' order by nombre asc
        $clavequesigue = productos::orderBy('id_prod','desc')
        ->take(1)
        ->get();
        $id_ps = $clavequesigue[0]->id_prod+1;
        
        
		$escuelas=escuelas ::where('activo','=','si')
		->orderBy('nombre','Asc')
		->get();
		
		
	 					
							
		//return $muncipios;
		return view ("sistema.altaproductos")
		->with('escuelas',$escuelas)
		->with('id_ps',$id_ps);
    }	
    public function guardaproductos(Request $request)
    { 
		$id_prod = $request->id_prod;
		$id_esc = $request->id_esc;
        $talla= $request->talla;
        $tipo= $request->tipo;
        $disponible= $request->disponible;
        $ubicacion= $request->ubicacion;
		$precio = $request->precio;
	
		
		///NUNCA SE RECIBEN LOS ARCHIVOS
		
		
		$this->validate($request,[
	     'id_prod'=>'required|numeric',
         'escuela'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'talla'=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'tipo'=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'disponible'=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
		 'ubicacion'=>'required',['regex:/^[A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'precio'=>'required',['regex:/^[0-9]+$/'],
		 
	     ]);

    
		 
		 //insert into clientes(idm,nombre,edad,sexo) values('$idm',
		 //'$nombre')
		    $produ = new productos;
			$produ->id_prod = $request->id_prod;
			$produ->id_esc = $request->id_esc;
			$produ->talla = $request->talla;
			$produ->tipo= $request->tipo;
			$produ->disponible = $request->disponible;
			$produ->ubicacion = $request->ubicacion;
			$produ->precio = $request->precio;
			$produ->save();
		$proceso = "Alta Productos";	
	    $mensaje="Registro guardado correctamente";
		return view('sistema.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);
	}		
	public function reporteproductos()
	{
	$productos = productos::orderBy('id_prod','asc')->get();
	return view ('sistema.reporteproductos')
	->with('productos',$productos);
	
	}
}
