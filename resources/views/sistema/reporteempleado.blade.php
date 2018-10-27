<html>
<body>
<h1>Reporte de empleado</h1>
<br>
<table border= 1>
<tr><td>Clave</td><td>Foto</td><td>Nombre</td>
<td>Correo</td><td>Operaciones</td></tr>
@foreach($empleados as $emple)
<tr><td>{{$emple->id_emp}}</td>
<td><img src = "{{asset('empleados/'.$emple->archivo)}}"
        height =50 width=50></td>
<td>{{$emple->nombre}}</td>
<td>{{$emple->correo}}</td>
<td> 

</td></tr>
@endforeach
</table>
</body>
</html>