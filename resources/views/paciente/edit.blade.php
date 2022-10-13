@extends('adminlte::page')

@section('title', 'SERVICIOS')

@section('content_header')
    <h1>EDITAR SERVICIOS</h1>
@stop

@section('content')
<form action="/Paciente/{{$paciente->id}}" method="POST">
@csrf
@method('PUT')
<div class="mb-3">
    <label for="" class="form-label">Codigo</label>
    <input id="codigo" name="codigo" type="text" class="form-control" value="{{$paciente->codigo}}">
</div>
<div class="mb-3">
    <label for="" class="form-label">Descripcion</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$paciente->descripcion}}">
</div>
<div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
<input id="cantidad" name="cantidad" type="number" class="form-control"  value="{{$paciente->cantidad}}">
</div>
<div> 
    <label for="" class="form-label">Precio</label>
    <input id="precio" name="precio" type="number" step="any" class="form-control"  value="{{$paciente->precio}}">
</div>
<a href="/Paciente" class="btn btn-secondary">Cancelar</a>
<button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
   
@stop