<html>
<body>
<h1> Alta de clientes </h1>
<br>
<form action = '{{route('guardacliente')}}' method = 'POST' enctype='multipart/form-data'>
{{csrf_field()}}

@if($errors->first('id_cli')) 
<i> {{ $errors->first('id_cli') }} </i> 
@endif	<br>
        

Clave del cliente <input type = 'text' name = 'id_cli' value="{{$id_cs}}" readonly ='readonly'>
<br>
@if($errors->first('nombre')) 
<i> {{ $errors->first('nombre') }} </i> 
@endif	<br>

Nombre<input type  ='text' name = 'nombre' value="{{old('nombre')}}">
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
@if($errors->first('calle')) 
<i> {{ $errors->first('calle') }} </i> 
@endif	<br>
Calle<input type  ='text' name = 'calle' value="{{old('calle')}}">
<br>
@if($errors->first('num_ext')) 
<i> {{ $errors->first('num_ext') }} </i> 
@endif	<br>
Numero exterior<input type  ='text' name = 'num_ext' value="{{old('num_ext')}}">
<br>
@if($errors->first('num_int')) 
<i> {{ $errors->first('num_int') }} </i> 
@endif	<br>
Num_int<input type  ='text' name = 'num_int' value="{{old('num_int')}}">
<br>
Seleccione Municipio<select name = 'id_mun'>
            @foreach($municipios as $mn)
			<option value = '{{$mn->id_mun}}'>{{$mn->nombre}}</option>
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






