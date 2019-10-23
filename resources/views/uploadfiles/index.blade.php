@extends('adminlte::page')

@section('title', 'CRUD de Roles y Permisos')

@section('content_header')
    <h1>Archivos</h1>
@stop

@section('content')

    <table id="example" class="ui celled table" style="width:100%">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Descripcion</th>
                <th>Nombre</th>
                <th>Ruta</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($files as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Titulo</th>
                <th>Descripcion</th>
                <th>Nombre</th>
                <th>Ruta</th>
                <th>Acción</th>
            </tr>
        </tfoot>

@stop


@push('js')

<script>
    $('#example').DataTable();
</script>

@endpush

