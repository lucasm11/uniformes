<html>
<body>
<h1>Reporte de Productos</h1>
<br>
<table border= 1>
<tr><td>Clave</td><td>Talla</td>
<td>Tipo</td><td>Escuela</td><td>Disponible</td><td>Ubicacion</td><td>Precio</td><td>Operaciones</td></tr>
@foreach($productos as $prod)
<tr><td>{{$prod->id_prod}}</td>
<td>{{$prod->talla}}</td>
<td>{{$prod->tipo}}</td>
<td>{{$prod->id_esc}}</td><td>{{$prod->disponible}}</td>
<td>{{$prod->ubicacion}}</td>
<td>{{$prod->precio}}</td>
<td> 

</td></tr>
@endforeach
</table>
</body>
</html>






