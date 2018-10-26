<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\municipios;
use App\clientes;

class uniformes extends Controller
{
   

    public function altacliente()
    {
		// ORM ELOQUENT
		//select * from carreras
		//$carreras=carreras::all();
		//select * from carreras where activo = 'si' order by nombre asc
        $clavequesigue = clientes::orderBy('id_cli','desc')
        ->take(1)
        ->get();
        $id_cs = $clavequesigue[0]->id_cli+1;
        
        
        $municipios=municipios ::where('id_est','=','1')
		                    ->orderBy('nombre','Asc')
							->get();
		
		
	 					
							
		//return $muncipios;
	   return view ("sistema.altacliente")
	   ->with('municipios',$municipios)
	   ->with('id_cs',$id_cs);
    }	
    public function guardacliente(Request $request)
    { 
		$id_cli = $request->id_cli;
		$nombre = $request->nombre;
        $app= $request->app;
        $apm= $request->apm;
        $telefono= $request->telefono;
        $correo= $request->correo;
        $calle= $request->calle;
		$num_ext = $request->num_ext;
		$num_int= $request->num_int;
	
		
		///NUNCA SE RECIBEN LOS ARCHIVOS
		
		
		$this->validate($request,[
	     'id_cli'=>'required|numeric',
         'nombre'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'app'=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'apm'=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'telefono'=>['regex:/^[0-9]{10}$/'],
		 //'correo'=>'required|email|unique:clients',
		 'calle'=>'required',['regex:/^[A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'num_ext'=>'required',['regex:/^[0-9]+$/'],
         'num_int'=>['regex:/^[0-9]+$/'],
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
		    $clie = new clientes;
			$clie->id_cli = $request->id_cli;
			$clie->nombre = $request->nombre;
			$clie->app =$request->app;
			$clie->apm= $request->apm;
			$clie->telefono=$request->telefono;
			$clie->correo=$request->correo;
			$clie->calle=$request->calle;
			$clie->num_ext=$request->num_ext;
			$clie->num_int=$request->num_int;
			$clie->id_mun=$request->id_mun;
			$clie->archivo = $img2;
			$clie->save();
		$proceso = "Alta Cliente";	
	    $mensaje="Registro guardado correctamente";
		return view('sistema.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);
	}		
	public function reporteclientes()
	{
	$clientes = clientes::orderBy('nombre','asc')->get();
	return view ('sistema.reporteclientes')
	->with('clientes',$clientes);
	
	}
	
}
