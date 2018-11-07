<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<body>
<h3><span class="badge badge-secondary">Reporte de Clientes</span></h3>
<br>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Clave</th>
      <th scope="col">Foto</th>
      <th scope="col">Nombre</th>
      <th scope="col">Telefono</th>
      <th scope="col">Correo</th>
      <th scope="col">Operaciones</th>
    </tr>
  </thead>
 
  <tbody>

  @foreach($clientes as $cli)
    <tr><td> {{$cli->id_cli}}</td>
    
    <td><img src="{{asset('archivos/'.$cli->archivo)}}" heigh0t =75 width=75 alt="..." class="rounded-circle"></td>

        <td>{{$cli->nombre}}</td><td>{{$cli->telefono}}</td>
<td>{{$cli->correo}}</td>


@endforeach

      
    
</tbody>
</table>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>