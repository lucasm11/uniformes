@extends('main')
@section('contenido')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<body>

<div class="card">
  <div class="card-header">
  <h3><span class="badge badge-secondary">Registro de Productos</span></h3>
  </div>


<div class="card-body">
<form action = '{{route('guardaproductos')}}' method = 'POST' enctype='multipart/form-data'>
{{csrf_field()}}

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputid_prod">Clave de Producto</label>
      @if($errors->first('id_prod')) 
<i> {{ $errors->first('id_prod') }} </i> 
@endif	
      <input type="text" class="form-control" id="inputid_prod" name = 'id_prod' value="{{$id_ps}}" readonly ='readonly' >
    </div>
    <div class="form-group col-md-6">
      <label for="inputtipo">Tipo</label>
      @if($errors->first('tipo')) 
<i> {{ $errors->first('tipo') }} </i> 
@endif
      <input type="text" class="form-control" id="inputtipo" name = 'tipo' value="{{old('tipo')}}" placeholder="Tipo">
    </div>

  <div class="form-group col-md-6">
    <label for="inputtalla">Talla</label>
    @if($errors->first('talla')) 
<i> {{ $errors->first('talla') }} </i> 
@endif
    <input type="text" class="form-control" id="inputtalla" name = 'talla' value="{{old('talla')}}" placeholder="Ch...Med...10...12">
  </div>
  <div class="form-group col-md-6">
    <label for="inputactivo">Disponible</label>
    <br>
    <input type = 'radio' name = 'disponible' value = 'No' checked >NO
<input type = 'radio' name = 'disponible' value = 'Si'>SI
</div>
  
 
    <div class="form-group col-md-6">
      <label for="inputubicacion">Ubicación</label>
      @if($errors->first('ubicacion')) 
<i> {{ $errors->first('ubicacion') }} </i> 
@endif
      <input type="text" class="form-control" id="inputubicacion" name = 'ubicacion' value="{{old('ubicacion')}}" placeholder="Ubicación">
    </div>
   
    <div class="form-group col-md-6">
      <label for="inputprecio">Precio</label>
      @if($errors->first('precio')) 
<i> {{ $errors->first('precio') }} </i> 
@endif
      <input type="text" class="form-control" id="inputprecio" name = 'precio' value="{{old('precio')}}" placeholder="$100.00" >
    </div>

    <div class="form-group col-md-6">
      <label for="inputState">Escuela</label>
      <select id="inputState" class="form-control"  name = 'id_esc'>
      @foreach($escuelas as $esc)
      <option value = '{{$esc->id_esc}}'>{{$esc->nombre}}</option>
      @endforeach
      </select>
    </div>
    
  
  </div>
  <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar Datos</button>
</form>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

@stop
