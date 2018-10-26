<html>
<body>
<h1> Alta de Productos </h1>
<br>
<form action = '{{route('guardaproductos')}}' method = 'POST' enctype='multipart/form-data'>
{{csrf_field()}}
<br>
@if($errors->first('id_prod')) 
<i> {{ $errors->first('id_prod') }} </i> 
@endif	
<br>
Clave del Producto <input type = 'text' name = 'id_prod' value="{{$id_ps}}" readonly ='readonly'>
<br>
<br>
Seleccione Escuela<select name = 'id_esc'>
            @foreach($escuelas as $esc)
			<option value = '{{$esc->id_esc}}'>{{$esc->nombre}}</option>
			@endforeach
                  </select>
<br>
@if($errors->first('tipo')) 
<i> {{ $errors->first('tipo') }} </i> 
@endif	
<br>
Tipo<input type  ='text' name = 'tipo' value="{{old('tipo')}}">
<br>
@if($errors->first('talla')) 
<i> {{ $errors->first('talla') }} </i> 
@endif	
<br>
Talla<input type  ='text' name = 'talla' value="{{old('talla')}}">
<br>
<br>
Disponible <input type = 'radio' name = 'activo' value = 'si' checked >Si
<input type = 'radio' name = 'activo' value = 'no'>No

<br>
@if($errors->first('ubicacion')) 
<i> {{ $errors->first('ubicacion') }} </i> 
@endif	
<br>
Ubicacion<input type = 'text' name = 'ubicacion' value="{{old('ubicacion')}}" >
<br>
@if($errors->first('precio')) 
<i> {{ $errors->first('precio') }} </i> 
@endif	
<br>
Precio<input type = 'text' name = 'precio' value="{{old('precio')}}" >
<br>
<br>
<input type = 'submit' value = 'Guardar'>
<br>
</form>
</body>
</html>