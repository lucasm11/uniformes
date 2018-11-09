@extends('main')
@section('contenido')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<body>
<div class="card">
  <div class="card-header">
  <h3><span class="badge badge-secondary">Registro de Escuelas</span></h3>
  </div>

<div class="card-body">
<form action = '{{route('guardaescuelas')}}' method = 'POST' enctype='multipart/form-data'>

{{csrf_field()}}

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputid_esc">Clave de la Escuela</label>
      @if($errors->first('id_esc')) 
<i> {{ $errors->first('id_esc') }} </i> 
@endif
      <input type="text" class="form-control" id="inputid_esc" name = 'id_esc' value="{{$id_es}}" readonly ='readonly' >
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Nombre</label>
      @if($errors->first('nombre')) 
<i> {{ $errors->first('nombre') }} </i> 
@endif
      <input type="text" class="form-control" id="inputnombre" name = 'nombre' value="{{old('nombre')}}" placeholder="Nombre de la Escuela">
    </div>
  <div class="form-group col-md-6">
    <label for="inputAddress">Telefono</label>
    @if($errors->first('telefono')) 
<i> {{ $errors->first('telefono') }} </i> 
@endif
    <input type="text" class="form-control" id="inputAddress" name = 'telefono' value="{{old('telefono')}}" placeholder="10 digitos">
  </div>
  <div class="form-group col-md-6">
    <label for="inputcalle">Calle</label>
    @if($errors->first('calle')) 
<i> {{ $errors->first('calle') }} </i> 
@endif
    <input type="text" class="form-control" id="inputcalle" name = 'calle' value="{{old('calle')}}" placeholder="Calle">
  </div>

    <div class="form-group col-md-6">
      <label for="inputnumero">Numero</label>
      @if($errors->first('numero')) 
<i> {{ $errors->first('numero') }} </i> 
@endif
      <input type="text" class="form-control" id="inputnumero"  name = 'numero' value="{{old('numero')}}" placeholder="Numero">
    </div>
    
    <div class="form-group col-md-6">
      <label for="inputmunicipio">Municipio</label>
      @if($errors->first('municipio')) 
<i> {{ $errors->first('municipio') }} </i> 
@endif
      <input type="text" class="form-control" id="inputmunicipio" name = 'municipio' value="{{old('municipio')}}" placeholder="Municipio">
    </div>
    <div class="form-group col-md-6">
      <label for="inputestado">Estado</label>
      @if($errors->first('estado')) 
<i> {{ $errors->first('estado') }} </i> 
@endif
      <input type="text" class="form-control" id="inputestado" name = 'estado' value="{{old('estado')}}"  placeholder="Estado">
    </div>
    <div class="form-group col-md-6">
    <label for="inputactivo">Activo</label>
    <br>
    <input type = 'radio' name = 'activo' value = 'No' checked >NO
<input type = 'radio' name = 'activo' value = 'Si'>SI
</div>
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

