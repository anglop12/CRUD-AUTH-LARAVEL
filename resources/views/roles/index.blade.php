@extends('adminlte::page')

@section('title', 'CRUD de Roles y Permisos')

@section('content_header')
    <h1>Roles de Usuario</h1>
@stop

@section('content')

    <table id="example" class="ui celled table" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Permisos</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $rol)
                <tr>
                    <td>{{ $rol->name }}</td>
                    <td>{{ $rol->permisos->implode('name', ', ') }}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Permisos</th>
                <th>Acción</th>
            </tr>
        </tfoot>

@stop


@push('js')

<script>
    $('#example').DataTable();
</script>

@endpush

