@extends('adminlte::page')


@section('title', 'Sunqupacha')

@section('content_header')
    <h1>Crear detalle de la etiqueta</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.tags.store']) !!}
        @include('admin.tags.partials.form')

        {!! Form::submit( 'Crear Etiqueta', ['class' => 'btn btn-primary']) !!}

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
