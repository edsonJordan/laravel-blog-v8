@extends('adminlte::page')


@section('title', 'Sunqupacha')

@section('content_header')
    <h1>Crear nuevo Post</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.posts.store', 'autocomplete' => 'off', 'files' => true]) !!}

                {!! Form::hidden('user_id', auth()->user()->id) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del Post']) !!}
                    @error('name')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('slug', 'Slug') !!}
                    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug del Post', 'readonly']) !!}
                    @error('slug')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('category_id', 'Categoria') !!}
                    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
                    @error('category_id')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
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
                    
                    @error('tags')
                    <br>
                    <small class="text-danger">{{$message}}</small>
                    @enderror
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
                        
                        @error('status')
                        <br>
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <div class="image-wrapper">
                            <img id="picture" src="https://cdn.pixabay.com/photo/2020/05/05/12/12/coffee-5132832_960_720.jpg" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            {!! Form::label('file', 'Imagen que se mostrar en Post') !!}
                            {!! Form::file('file',['class' => 'form-control', 'accept' => 'image/*']) !!}
                        </div>
                        @error('file')                    
                    <small class="text-danger">{{$message}}</small>
                    <br>
                    @enderror
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. A, sint? Facere a blanditiis ipsam magnam culpa amet quod, exercitationem at temporibus incidunt et quibusdam molestias deleniti esse aliquid ex commodi.
                    </div>
                    
                </div>
                <div class="form-group">
                    {!! Form::label('stract', 'Extracto') !!}
                    {!! Form::textarea('stract', null, ['class' => 'form-control']) !!}
                    
                    @error('stract')
                    <br>
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('body', 'Cuerpo del Blog') !!}
                    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                    
                    @error('body')
                    <br>
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                {!! Form::submit('Crear Post', ['class' => 'btn btn-primary btn-sm']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <style>
        .image-wrapper{
            position: relative;
            padding-bottom: 56.25%;
        }
        .image-wrapper img{
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

    </style>
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

        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        }

    </script>
@endsection