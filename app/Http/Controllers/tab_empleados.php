<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\empleados;

class tab_empleados extends Controller
{
    public function altaempleado()
    {
		// ORM ELOQUENT
		//select * from carreras
		//$carreras=carreras::all();
		//select * from carreras where activo = 'si' order by nombre asc
		$clavequesigue = empleados::orderBy('id_emp','desc')
        ->take(1)
        ->get();
        $id_ems = $clavequesigue[0]->id_emp+1;
        
        
        //$municipios=municipios ::where('id_est','=','1')
		                   // ->orderBy('nombre','Asc')
							//->get();
		
		
	 					
							
		//return $muncipios;
	   return view ("sistema.altaempleado")
	   
	   ->with('id_ems',$id_ems);
    }	
    public function guardaempleado(Request $request)
    { 
		$id_emp = $request->id_emp;
		$nombre = $request->nombre;
        $app= $request->app;
        $apm= $request->apm;
        $edad= $request->edad;
        $correo= $request->correo;
        $sexo= $request->sexo;
        $tipo= $request->tipo;
	
		
		///NUNCA SE RECIBEN LOS ARCHIVOS
		
		
		$this->validate($request,[
	     'id_emp'=>'required|numeric',
         'nombre'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'app'=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'apm'=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
	
		'tipo'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
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
		    $emple = new empleados;
			$emple->id_emp = $request->id_emp;
			$emple->nombre = $request->nombre;
			$emple->app =$request->app;
            $emple->apm= $request->apm;
            $emple->edad= $request->edad;
			$emple->correo= $request->correo;
			$emple->sexo= $request->sexo;
			$emple->tipo= $request->tipo;
			$emple->archivo = $img2;
			$emple->save();
		$proceso = "Alta Empleado";	
	    $mensaje="Registro guardado correctamente";
		return view('sistema.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);
	}		
	public function reporteempleado()
	{
	$empleados = empleados::orderBy('nombre','asc')->get();
	return view ('sistema.reporteempleado')
	->with('empleados',$empleados);
	
	}
}
