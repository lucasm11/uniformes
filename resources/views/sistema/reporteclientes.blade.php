<html>
<body>
<h1>Reporte de clientes</h1>
<br>
<table border= 1>
<tr><td>Clave</td><td>Foto</td><td>Nombre</td>
<td>Telefono</td><td>Correo</td><td>Operaciones</td></tr>
@foreach($clientes as $cli)
<tr><td>{{$cli->id_cli}}</td>
<td><img src = "{{asset('archivos/'.$cli->archivo)}}"
        height =50 width=50></td>
<td>{{$cli->nombre}}</td><td>{{$cli->telefono}}</td>
<td>{{$cli->correo}}</td>
<td> 

</td></tr>
@endforeach
</table>
</body>
</html>