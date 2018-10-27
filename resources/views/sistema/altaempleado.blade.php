<html>
<body>
<h1> Alta de Empleado </h1>
<br>
<form action = '{{route('guardaempleado')}}' method = 'POST' enctype='multipart/form-data'>
{{csrf_field()}}

@if($errors->first('id_emple')) 
<i> {{ $errors->first('id_emple') }} </i> 
@endif	<br>
        

Clave del empleado <input type = 'text' name = 'id_emple' value="{{$id_es}}" readonly ='readonly'>
<br>
@if($errors->first('nombre')) 
<i> {{ $errors->first('nombre') }} </i> 
@endif	<br>

Nombre del empleado<input type  ='text' name = 'nombre' value="{{old('nombre')}}">
<br>
@if($errors->first('app')) 
<i> {{ $errors->first('app') }} </i> 
@endif	<br>

Apellido paterno<input type  ='text' name = 'app' value="{{old('app')}}">
<br>
@if($errors->first('apm')) 
<i> {{ $errors->first('apm') }} </i> 
@endif	<br>

Apellido  materno<input type  ='text' name = 'apm' value="{{old('apm')}}">
<br>
@if($errors->first('edad')) 
<i> {{ $errors->first('edad') }} </i> 
@endif	<br>
Edad<input type = 'text' name = 'edad' value="{{old('edad')}}" >
<br>
Sexo <input type = 'radio' name = 'sexo' value = 'M' checked >M
<input type = 'radio' name = 'sexo' value = 'F'>F
<br>
@if($errors->first('telefono')) 
<i> {{ $errors->first('telefono') }} </i> 
@endif	<br>
Telefono<input type = 'text' name = 'telefono' value="{{old('telefono')}}" >
<br>
@if($errors->first('correo')) 
<i> {{ $errors->first('correo') }} </i> 
@endif	<br>
Correo<input type = 'email' name = 'correo' value="{{old('correo')}}" >
<br>

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
