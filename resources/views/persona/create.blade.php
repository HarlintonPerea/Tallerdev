@extends('layout.plantilla')
@section('titulo') AppDev-Persona-Insertar
@endsection
@section('contenido')

<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> <h4>Ingresar Persona</h4>
@if (count($errors)>0)
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>
</div>
@endif
</div>
</div>
{!!Form::open(array('url'=>'persona','method'=>'POST','autocomplete'=>'off')
)!!}
{{Form::token()}}
<div class="row">
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
 <div class="form-group">
<label for="documento">Numero Documento</label>
<input type="number" name="documento_identidad"
id="documento_identidad" class="form-control"placeholder="Digite el número Documento">
</div>
</div>
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
<div class="form-group">
<label for="nombre">Nombres</label>
<input type="text" name="nombre" id="nombre" class="form-control"placeholder="Nombre Completo">
</div>
</div>
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
<div class="form-group">
<label for="apellido">Apellidos</label>
<input type="text" name="apellido" id="apeliido" class="form-control"placeholder="Apellidos Completos">
</div>
</div>
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
<div class="form-group">
<label for="email">Email</label>
<input type="text" name="email" id="email" class="form-control"placeholder="Correo Electrónico">
</div>
</div>
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
<div class="form-group">
<label for="email">Telefono</label>
<input type="text" name="telefono" id="telefono" class="form-control"placeholder="Telefono">
</div>
</div>
<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
<div class="form-group"> <br>
<button class="btn btn-primary" type="submit"><span
class="glyphicon glyphicon-ok"></span> Guardar</button>
<button class="btn btn-danger" type="reset"><spanclass="glyphicon glyphicon-remove"></span> Vaciar Campos</button>
</div>
</div>
</div>
{!!Form::close()!!}
@endsection