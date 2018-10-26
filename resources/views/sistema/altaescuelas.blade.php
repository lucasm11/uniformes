<html>
<body>
<h1> Alta de escuelas </h1>
<br>
<form action = '{{route('guardaescuelas')}}' method = 'POST' enctype='multipart/form-data'>
{{csrf_field()}}

@if($errors->first('id_esc')) 
<i> {{ $errors->first('id_esc') }} </i> 
@endif	<br>
        

Clave de la escuela <input type = 'text' name = 'id_esc' value="{{$id_es}}" readonly ='readonly'>
<br>
@if($errors->first('nombre')) 
<i> {{ $errors->first('nombre') }} </i> 
@endif	<br>

Nombre<input type  ='text' name = 'nombre' value="{{old('nombre')}}">
<br>
@if($errors->first('telefono')) 
<i> {{ $errors->first('telefono') }} </i> 
@endif	<br>

Telefono<input type  ='text' name = 'telefono' value="{{old('telefono')}}">
<br>
@if($errors->first('calle')) 
<i> {{ $errors->first('calle') }} </i> 
@endif	<br>

Calle<input type  ='text' name = 'calle' value="{{old('calle')}}">
<br>
@if($errors->first('numero')) 
<i> {{ $errors->first('numero') }} </i> 
@endif	<br>
Numero<input type = 'text' name = 'numero' value="{{old('numero')}}" >
<br>
@if($errors->first('municipio')) 
<i> {{ $errors->first('municipio') }} </i> 
@endif	<br>
Municipio<input type = 'text' name = 'municipio' value="{{old('municipio')}}" >
<br>
@if($errors->first('estado')) 
<i> {{ $errors->first('estado') }} </i> 
@endif	<br>
Estado<input type  ='text' name = 'estado' value="{{old('estado')}}">
<br>

Activo <input type = 'radio' name = 'activo' value = 'si' checked >Si
<input type = 'radio' name = 'sexo' value = 'no'>No
<br>

<input type = 'submit' value = 'Guardar'>
<br>
</form>
</body>
</html>


