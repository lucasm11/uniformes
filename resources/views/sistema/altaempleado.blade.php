@extends('main')
@section('contenido')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"><html>
<body>
<div class="card">
  <div class="card-header">
  <h3><span class="badge badge-secondary">Registro de Empleados</span></h3>
  </div>

<div class="card-body">
<form action = '{{route('guardaempleado')}}' method = 'POST' enctype='multipart/form-data'>
{{csrf_field()}}


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputid_emp">Numero de Empleado</label>
      @if($errors->first('id_emp')) 
<i> {{ $errors->first('id_emp') }} </i> 
@endif
      <input type="text" class="form-control" id="inputid_emp" name = 'id_emp' value="{{$id_ems}}" readonly ='readonly' >
    </div>
    <div class="form-group col-md-6">
      <label for="inputnombre">Nombre</label>
      
@if($errors->first('nombre')) 
<i> {{ $errors->first('nombre') }} </i> 
@endif
      <input type="text" class="form-control" id="inputnombre"  name = 'nombre' value="{{old('nombre')}}" placeholder="Ingrese Nombre">
    </div>
    <div class="form-group col-md-6">
      <label for="inputapp">Apellido Paterno</label>
      @if($errors->first('app')) 
<i> {{ $errors->first('app') }} </i> 
@endif
      <input type="text" class="form-control" id="inputtext" name = 'app' value="{{old('app')}}" placeholder="Apellido paterno">
    </div>
    <div class="form-group col-md-6">
      <label for="inputapm">Apellido Materno</label>
      @if($errors->first('apm')) 
<i> {{ $errors->first('apm') }} </i> 
@endif
      <input type="text" class="form-control" id="inputapm" name = 'apm' value="{{old('apm')}}" placeholder="Apellido Materno">
    </div>
  <div class="form-group col-md-6">
    <label for="inputedad">Edad</label>
    @if($errors->first('edad')) 
<i> {{ $errors->first('edad') }} </i> 
@endif
    <input type="text" class="form-control" id="inputedad" name = 'edad' value="{{old('edad')}}" placeholder="Edad">
  </div>
  <div class="form-group col-md-6">
    <label for="inputcorreo">Correo</label>
    @if($errors->first('correo')) 
<i> {{ $errors->first('correo') }} </i> 
@endif
    <input type="email" class="form-control" id="inputcorreo" name = 'correo' value="{{old('correo')}}" placeholder="Correo">
  </div>
   <div class="form-group col-md-6">
    <label for="inputAddress2">Sexo</label>
    <br>
    <input type = 'radio' name = 'sexo' value = 'H' checked >H
<input type = 'radio' name = 'sexo' value = 'M'>M
</div>
    <div class="form-group col-md-6">
      <label for="inputCity">Tipo</label>
      @if($errors->first('tipo')) 
<i> {{ $errors->first('tipo') }} </i> 
@endif
      <input type="text" class="form-control" name = 'tipo' value="{{old('tipo')}}" id="inputtipo">
    </div>

    <div class="form-group ">
  <label for="inputfoto"> Seleccione Foto</label>
    @if($errors->first('archivo')) 
<i> {{ $errors->first('archivo') }} </i> 
@endif	
    <input type="file" class="form-control" id="inputfoto" name = 'archivo' >
   </div>
    
  </div>

  <br>
  <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar Datos</button>
  
</form>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
@stop

