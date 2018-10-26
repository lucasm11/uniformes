<html>
<body>
<h1>Reporte de empleado</h1>
<br>
<table border= 1>
<tr><td>Clave</td><td>Foto</td><td>Nombre</td>
<td>Telefono</td><td>Correo</td><td>Operaciones</td></tr>
@foreach($empleado as $emple)
<tr><td>{{$emple->id_emple}}</td>
<td><img src = "{{asset('archivos/'.$emple->archivo)}}"
        height =50 width=50></td>
<td>{{$emple->nombre}}</td><td>{{$emple->telefono}}</td>
<td>{{$emple->correo}}</td>
<td> 

</td></tr>
@endforeach
</table>
</body>
</html>