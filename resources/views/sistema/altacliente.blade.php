<html>
<body>
<h1> Alta de clientes </h1>
<br>
<form action = '{{route('guardacliente')}}' method = 'POST' enctype='multipart/form-data'>
{{csrf_field()}}

@if($errors->first('id_cli')) 
<i> {{ $errors->first('id_cli') }} </i> 
@endif	<br>
        

Clave profesor <input type = 'text' name = 'id_cli' value="{{$id_cs}}" readonly ='readonly'>
<br>
@if($errors->first('nombre')) 
<i> {{ $errors->first('nombre') }} </i> 
@endif	<br>

Nombre<input type  ='text' name = 'nombre' value="{{old('nombre')}}">
<br>
@if($errors->first('edad')) 
<i> {{ $errors->first('edad') }} </i> 
@endif	<br>
Edad<input type = 'text' name = 'edad' value="{{old('edad')}}" >
<br>
Sexo <input type = 'radio' name = 'sexo' value = 'M' checked >M
<input type = 'radio' name = 'sexo' value = 'F'>F
<br>
@if($errors->first('cp')) 
<i> {{ $errors->first('cp') }} </i> 
@endif	<br>
Codigo postal<input type  ='text' name = 'cp' value="{{old('cp')}}">
<br>
@if($errors->first('beca')) 
<i> {{ $errors->first('beca') }} </i> 
@endif	<br>
Beca<input type  ='text' name = 'beca' value="{{old('beca')}}">
<br>
Seleccione Carrera<select name = 'idc'>
            @foreach($carreras as $cr)
			<option value = '{{$cr->idc}}'>{{$cr->nombre}}</option>
			@endforeach
                  </select>
<br>
@if($errors->first('archivo')) 
<i> {{ $errors->first('archivo') }} </i> 
@endif	<br>
Seleccione foto<input type= 'file' name = 'archivo'>
<br>
<input type = 'submit' value = 'Guardar'>
<br>
</form>
</body>
</html>






