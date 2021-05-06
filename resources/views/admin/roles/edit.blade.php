@extends('adminlte::page')


@section('title', 'Sunqupacha')

@section('content_header')
    <h1>Editar Rol</h1>
@stop
{{-- @dd($persmissions) --}}
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
            {!! Form::model($role,['route' => ['admin.roles.update', $role], 'method' => 'put']) !!}
            
            @include('admin.roles.partials.form')

            {!! Form::submit('Editar Rol', ['class' => 'btn btn-primary'] ) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop
