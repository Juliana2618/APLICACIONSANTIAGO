@extends('adminlte::page')

@section('title', 'SERVICIOS')

@section('content_header')
    <h1>LISTADO DE SERVICIOS</h1>
@stop

@section('content')
<a href="Paciente/create" class="btn btn-prymary mb-3">CREAR</a>

<table id="pacientes" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Sobre nosotros</th>
        <th scope="col">Acciones</th>
</tr>
</thead>
<tbody>
 @foreach($Paciente as $paciente)
 <tr>
    <td>{{$paciente->id}}</td>
    <td>{{$paciente->descripcion}}</td>
    <td>{{$paciente->cantidad}}</td>
    <td>{{$paciente->sobrenosotros}}</td>
    <td>
    <form action="{{route ('Paciente.destroy',$paciente->id)}}" method="POST">
        <a href="/Paciente/{{$paciente->id}}/edit" class="btn btn-info">Editar</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Borrar</button>
</form>
</td>
</tr>
 @endforeach
</tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function(){
        $('#pacientes').DataTable({
            "lengtMenu": [[5,10, 50, -1],[5,10,50,"All"]]
        });
    } );

</script>
@stop