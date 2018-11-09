@extends('main')
@section('contenido')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<body>

<div class="card">
  <div class="card-header">
  <h3><span class="badge badge-secondary">Registro de Clientes</span></h3>
  </div>
<div class="card-body">
  <form action = '{{route('guardacliente')}}' method = 'POST' enctype='multipart/form-data'>
{{csrf_field()}}


  <div class="form-row">
    <div class="form-group col-md-6">
       <label for="inpuid_cli">Clave del Cliente</label>
      @if($errors->first('id_cli')) 
<i> {{ $errors->first('id_cli') }} </i> 
@endif
      <input type="text" class="form-control" id="inputId_cli"  name='id_cli' value="{{$id_cs}}" readonly ='readonly' >
    </div>

    <div class="form-group col-md-6">
      <label for="inputnombre">Nombre(s)</label>
      @if($errors->first('nombre')) 
<i> {{ $errors->first('nombre') }} </i> 
@endif
      <input type="text" class="form-control" id="inputnombre" name = 'nombre' value="{{old('nombre')}}" placeholder="Nombre(s)">
    </div>
    
    <div class="form-group col-md-6">
      <label for="inputapp">Apellido Paterno</label>
      @if($errors->first('app')) 
<i> {{ $errors->first('app') }} </i> 
@endif
      <input type="app" class="form-control" id="inputapp" name = 'app' value="{{old('app')}}" placeholder="Apellido Paterno">
    </div>
    
    <div class="form-group col-md-6">
      <label for="inputapm">Apellido Materno</label>
      @if($errors->first('apm')) 
<i> {{ $errors->first('apm') }} </i> 
@endif
      <input type="text" class="form-control" id="inputapm" name = 'apm' value="{{old('apm')}}" placeholder="Apellido Materno">
    </div>
  </div>


  <div class="form-group">
    <label for="inputtelefono">Telefono</label>
    @if($errors->first('telefono')) 
<i> {{ $errors->first('telefono') }} </i> 
@endif
    <input type="text" class="form-control" id="inputtelefono" name = 'telefono' value="{{old('telefono')}}"  placeholder="10 digitos">
  </div>
  
  <div class="form-group">
    <label for="inputcorreo">Correo Electronico</label>
    @if($errors->first('correo')) 
<i> {{ $errors->first('correo') }} </i> 
@endif
    <input type="text" class="form-control" id="correo" name = 'correo' value="{{old('correo')}}"  placeholder="Ejemplo@ejemplo">
  </div>
  
  <div class="form-group">
    <label for="inputcalle">Calle</label>
    @if($errors->first('calle')) 
<i> {{ $errors->first('calle') }} </i> 
@endif
    <input type="text" class="form-control" id="inputcalle" name = 'calle' value="{{old('calle')}}" placeholder="Calle">
  </div>


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputnum_ext">Numero Ext.</label>
      @if($errors->first('num_ext')) 
<i> {{ $errors->first('num_ext') }} </i> 
@endif
      <input type="text" class="form-control" id="inputnum_ext"  name = 'num_ext' value="{{old('num_ext')}}" placeholder="Numero Ext.">
    </div>
    
    <div class="form-group col-md-6">
      <label for="inputnum_int">Numero Int.</label>
      @if($errors->first('num_int')) 
<i> {{ $errors->first('num_int') }} </i> 
@endif
      <input type="text" class="form-control" id="inputnum_int" name = 'num_int' value="{{old('num_int')}}" placeholder="Numero Int.">
    </div>
  
  <div class="form-group col-md-6">
      <label for="inputmun">Municipio</label>
      <select id="inputmun" class="form-control" name = 'id_mun'>
      @foreach($municipios as $mn)
        <option value = '{{$mn->id_mun}}'>{{$mn->nombre}}</option>
        @endforeach
      </select>
  </div>
 
  <div class="form-group col-md-6">
  <label for="inputfoto">Seleccione Foto</label>
    @if($errors->first('archivo')) 
<i> {{ $errors->first('archivo') }} </i> 
@endif	
    <input type="file" class="form-control" id="inputfoto" name = 'archivo' >
   
  </div>
  
  </div>
</div>
  <br>  <br>
  <button type="submit" class="btn btn-primary btn-lg btn-block" value = 'Guardar'> Guardar Cliente</button>  
</form>   
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
@stop






