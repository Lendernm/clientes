@extends ('layouts.base')


<div class="container mt-5">
<div class="row justify-content-center">
<div class="col-md-7 mt-5">

@if(session('usuarioGuardado'))
<div class="alert alert-success">
   {{session('usuarioGuardado')}}
</div>    
@endif

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li> {{ $error }} </li>
        @endforeach
    </ul>
</div>    
@endif



<div class="card">
<form action="{{ url ('/save')}}" method ="POST">
@csrf
    <div class="card-header text-center">AGREGAR CLIENTE</div>
    <div class="card-body">
    <div class="row form-group">
        <label for="" class="col-2">Nombre</label>
        <input type="text" name="nombre" class="form control col-md-9">
    </div>

    <div class="row form-group">
        <label  for="" class="col-2">Apellido Paterno</label>
        <input type="text" name="apellido_paterno" class="form control col-md-9">
    </div>

    <div class="row form-group">
        <label for="" class="col-2">Apellido Materno</label>
        <input type="text" name="apellido_materno" class="form control col-md-9">
    </div>

    <div class="row form-group">
        <label for="" class="col-2">E-mail</label>
        <input type="text" name="email" class="form control col-md-9">
    </div>

    <div class="row form-group">
        <label for="" class="col-2">Telefono</label>
        <input type="text" name="telefono"  maxlength="10" class="form control col-md-9">
    </div>

    <div class="row form-group">
        <button type="sumit"  class="btn btn-success col-md-9 offset-2">Guardar</button>
    </div>

    </div>


</form>

</div>


</div>



</div>

<a class="btn btn-light btn-xs mt-5" href="{{ url ('/') }}"> &laquo volver</a>
</div>