<html>
<body>
<h1>Reporte de Productos</h1>
<br>
<table border= 1>
<tr><td>Clave</td><td>Foto</td><td>Nombre</td>
<td>Telefono</td><td>Correo</td><td>Operaciones</td></tr>
@foreach($productos as $prod)
<tr><td>{{$prod->id_prod}}</td>
<td><img src = "{{asset('archivos/'.$cli->archivo)}}"
        height =50 width=50></td>
<td>{{$prod->nombre}}</td><td>{{$prod->telefono}}</td>
<td>{{$prod->correo}}</td>
<td> 

</td></tr>
@endforeach
</table>
</body>
</html>






