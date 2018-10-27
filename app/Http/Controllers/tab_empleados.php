<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tab_empleados extends Controller
{
    public function altaempleado()
    {
		// ORM ELOQUENT
		//select * from carreras
		//$carreras=carreras::all();
		//select * from carreras where activo = 'si' order by nombre asc
        $clavequesigue = empleado::orderBy('id_emple','desc')
        ->take(1)
        ->get();
        $id_es = $clavequesigue[0]->id_emple+1;
        
        
        //$municipios=municipios ::where('id_est','=','1')
		                   // ->orderBy('nombre','Asc')
							//->get();
		
		
	 					
							
		//return $muncipios;
	  // return view ("sistema.altacliente")
	   //->with('municipios',$municipios)
	   //->with('id_cs',$id_cs);
    }	
    public function guardaempleado(Request $request)
    { 
		$id_emple = $request->id_emple;
		$nombre = $request->nombre;
        $app= $request->app;
        $apm= $request->apm;
        $edad= $request->edad;
        $sexo= $request->sexo;
        $telefono= $request->telefono;
        $correo= $request->correo;
        
	
		
		///NUNCA SE RECIBEN LOS ARCHIVOS
		
		
		$this->validate($request,[
	     'id_emple'=>'required|numeric',
         'nombre'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'app'=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'apm'=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'telefono'=>['regex:/^[0-9]{10}$/'],
		 'correo'=>'required|email|unique:clients',
		 
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
		    $emple = new empleado;
			$emple->id_emple = $request->id_emple;
			$emple->nombre = $request->nombre;
			$emple->app =$request->app;
            $emple->apm= $request->apm;
            $emple->edad= $request->edad;
            $emple->sexo= $request->sexo;
			$emple->telefono=$request->telefono;
			$emple->correo=$request->correo;
			
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
	$empleado = empleado::orderBy('nombre','asc')->get();
	return view ('sistema.reporteempleado')
	->with('empleado',$empleado);
	
	}
}
