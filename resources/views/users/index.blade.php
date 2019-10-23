@extends('adminlte::page')

@section('title', 'CRUD de Roles y Permisos')

@section('content_header')
    <h1>Usuarios</h1>
@stop

@section('content')

    <table id="example" class="ui celled table" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Acción</th>
            </tr>
        </tfoot>

@stop


@push('js')

<script>
    $('#example').DataTable();
</script>

@endpush

