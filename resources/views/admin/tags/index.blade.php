@extends('adminlte::page')


@section('title', 'Sunqupacha')

@section('content_header')
        
    <a href="{{route('admin.tags.create')}}" class="btn btn-success btn-sm float-right">Agregar Etiqueta</a>    
    <h1>Mostrar listado de la etiqueta</h1>
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
                        <th>ID</th>
                        <th>NAME</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{$tag->id}}</td>
                            <td>{{$tag->name}}</td>
                            <td width="10px"><a class="btn btn-primary btn-sm" href="{{route('admin.tags.edit', $tag)}}">Editar</a></td>
                            <td width="10px">
                                <form action="{{route('admin.tags.destroy', $tag)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
