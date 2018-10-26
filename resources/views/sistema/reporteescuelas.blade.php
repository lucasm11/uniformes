<html>
<body>
<h1>Reporte de Escuelas</h1>
<br>
<table border= 1>
<tr><td>Clave</td><td>Nombre</td><td>Activo</td>
<td>Telefono</td><td>Operaciones</td></tr>
@foreach($escuelas as $esc)
<tr><td>{{$esc->id_esc}}</td>

<td>{{$esc->nombre}}</td><td>{{$esc->activo}}</td>
<td>{{$esc->telefono}}</td>
<td> 

</td></tr>
@endforeach
</table>
</body>
</html>