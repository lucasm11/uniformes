@extends('main')
@section('contenido')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<body>
<h3><span class="badge badge-secondary">Reporte de Empleados</span></h3>



<table class="table">
  <thead class="alert alert-primary" role="alert">
    <tr>
      <th scope="col">Clave</th>
      <th scope="col">Talla</th>
      <th scope="col">Tipo</th>
      <th scope="col">Escuela</th>
      <th scope="col">Disponible</th>
      <th scope="col">Ubicacion</th>
      <th scope="col">Precio</th>
      <th scope="col">Operaciones</th>
    </tr>
    @foreach($productos as $prod)
    <tbody>
    <tr><td>{{$prod->id_prod}}</td>
<td>{{$prod->talla}}</td>
<td>{{$prod->tipo}}</td>
<td>{{$prod->id_esc}}</td><td>{{$prod->disponible}}</td>
<td>{{$prod->ubicacion}}</td>
<td>{{$prod->precio}}</td>
<td> </td>
</tr>
@endforeach
  </thead>

   
  </tbody>
</table>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

@stop







