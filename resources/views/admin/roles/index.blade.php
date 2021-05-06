@extends('adminlte::page')


@section('title', 'Sunqupacha')

@section('content_header')
    <a href="{{route('admin.roles.create')}}" class="btn btn-success btn-sm float-right">Nuevo Rol</a>
    <h1>Lista de roles</h1>
@stop

@section('content')
        @if (session('info'))
            <div class="alert alert-success">
                <strong>
                    {{session('info')}}
                </strong>
            </div>
        @endif
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Role</td>
                        <td colspan=""></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td>{{$role->name}}</td>
                            <td width="10px" >
                                <a href="{{route('admin.roles.edit', $role)}}" class="btn btn-warning btn-sm">Editar</a>
                            </td>
                            <td width="10px" >
                                <form action="{{route('admin.roles.destroy', $role)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                              
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop