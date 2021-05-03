@extends('adminlte::page')


@section('title', 'Sunqupacha')

@section('content_header')
    <h1>Crear nuevo Post</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.posts.store', 'autocomplete' => 'off']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del Post']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('slug', 'Slug') !!}
                    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug del Post', 'readonly']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('category_id', 'Categoria') !!}
                    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    <p class="font-weight-bold">
                        Etiquetas
                    </p>
                    @foreach ($tags as $tag)
                        <label for="" class="mr-2">
                            {!! Form::checkbox('tags[]', $tag->id,null) !!}
                            {{$tag->name}}
                        </label>
                    @endforeach
                </div>
                <div class="form-group">
                    <p class="font-weight-bold">Estado</p>
                        
                        <label>
                            {!! Form::radio('status', 1, true) !!}
                            Borrador
                        </label>
                        <label>
                            {!! Form::radio('status', 2) !!}
                            Publicado
                        </label>
                    
                </div>
                <div class="form-group">
                    {!! Form::label('stract', 'Extracto') !!}
                    {!! Form::textarea('stract', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('body', 'Cuerpo del Blog') !!}
                    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{ asset('vendor/StringToSlug/jquery.stringToSlug.min.js') }}" ></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
        
        ClassicEditor
        .create( document.querySelector( '#stract' ) )
        .catch( error => {
            console.error( error );
        } );

        ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );

    </script>
@endsection