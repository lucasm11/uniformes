@extends('main')
@section('contenido')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<body>
<h3><span class="badge badge-secondary">Reporte de Escuelas</span></h3>

<table class="table">
  <thead class="alert alert-primary" role="alert">
    <tr>
      <th scope="col">Clave</th>
      <th scope="col">Nombre</th>
      <th scope="col">Calle</th>
      <th scope="col">Numero</th>
      <th scope="col">Municipio</th>
      <th scope="col">Activo</th>
      <th scope="col">Telefono</th>
      <th scope="col">Operaciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($escuelas as $esc)
<tr><td>{{$esc->id_esc}}</td>

<td>{{$esc->nombre}}</td>
<td>{{$esc->calle}}</td>
<td>{{$esc->numero}}</td>
<td>{{$esc->municipio}}</td>
<td>{{$esc->activo}}</td>
<td>{{$esc->telefono}}</td>
<td> </td></tr>
@endforeach
      
  </tbody>
</table>



</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

@stop