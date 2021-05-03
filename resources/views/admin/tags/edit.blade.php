@extends('adminlte::page')


@section('title', 'Sunqupacha')

@section('content_header')
    <h1>Editar detalle de la etiqueta</h1>
@stop

@section('content')
<div class="card">
    @if (session('info'))
        <div class="alert alert-success">
            <strong>
                {{session('info')}}
            </strong>
        </div>
    @endif
    <div class="card-body">
        {!! Form::model($tag, ['route' => ['admin.tags.update', $tag], 'method' => 'put']) !!}
        @include('admin.tags.partials.form')

        {!! Form::submit( 'Actualizar etiqueta', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{ asset('vendor/StringToSlug/jquery.stringToSlug.min.js') }}" ></script>
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@endsection