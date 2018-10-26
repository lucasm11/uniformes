<html>
<body>
<h1> Alta de Productos </h1>
<br>fg7
<form action = '{{route('guardaproductos')}}' method = 'POST' enctype='multipart/form-data'>
{{csrf_field()}}
<br>
@if($errors->first('id_prod')) 
<i> {{ $errors->first('id_prod') }} </i> 
@endif	
<br>
Clave del Producto <input type = 'text' name = 'id_prod' value="{{$id_cs}}" readonly ='readonly'>
<br>
@if($errors->first('escuela')) 
<i> {{ $errors->first('escuela') }} </i> 
@endif	
<br>
Escuela<input type  ='text' name = 'escuela' value="{{old('escuela')}}">
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
@if($errors->first('disponible')) 
<i> {{ $errors->first('disponible') }} </i> 
@endif	
<br>
Disponible<input type = 'text' name = 'disponible' value="{{old('disponible')}}" >
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
@if($errors->first('archivo')) 
<i> {{ $errors->first('archivo') }} </i> 
@endif	
<br>
Seleccione foto<input type= 'file' name = 'archivo'>
<br>
<input type = 'submit' value = 'Guardar'>
<br>
</form>
</body>
</html>