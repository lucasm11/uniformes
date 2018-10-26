<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productos;

class tab_productos extends Controller
{
	
	    public function altaproductos()
    {
		// ORM ELOQUENT
		//select * from carreras
		//$carreras=carreras::all();
		//select * from carreras where activo = 'si' order by nombre asc
        $clavequesigue = clientes::orderBy('id_prod','desc')
        ->take(1)
        ->get();
        $id_cs = $clavequesigue[0]->id_prod+1;
        
        
        $municipios=escuelas ::where('id_escuelas','=','1')
		                    ->orderBy('id_escuelas','nombre')
							->get();
		
		
	 					
							
		//return $muncipios;
	   return view ("sistema.altaproductos")
	   ->with('escuelas',$escuelas)
	   ->with('id_cs',$id_cs);
    }	
    public function guardaproductos(Request $request)
    { 
		$id_cli = $request->id_prod;
		$escuela = $request->escuela;
        $talla= $request->tipo;
        $tipo= $request->talla;
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
		 'archivo'=>'image|mimes:jpg,jpeg,png,gif'
	     ]);

     $file = $request->file('archivo');
	 if($file!="")
	 {
	 $ldate = date('Ymd_His_');
	 $img = $file->getClientOriginalName();
	 $img2 = $ldate.$img;
	 \Storage::disk('local')->put($img2, \File::get($file));
	 }
	 else
	 {
      $img2= 'sinfoto.png';
	 }
		 
		 
		 //insert into clientes(idm,nombre,edad,sexo) values('$idm',
		 //'$nombre')
		    $produ = new productos;
			$produ->id_prod = $request->id_prod;
			$produ->escuela = $request->escuela;
			$produ->talla =$request->talla;
			$produ->tipo= $request->tipo;
			$produ->disponible =$request->disponible;
			$produ->ubicacion =$request->ubicacion;
			$produ->precio =$request->precio;
			$produ->archivo = $img2;
			$produ->save();
		$proceso = "Alta Productos";	
	    $mensaje="Registro guardado correctamente";
		return view('sistema.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);
	}		
	public function reporteproductos()
	{
	$clientes = productos::orderBy('escuela','asc')->get();
	return view ('sistema.reporteproductos')
	->with('productos',$productos);
	
	}
}
