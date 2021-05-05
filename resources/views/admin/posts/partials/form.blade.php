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
            @isset ($post->image)
                <img id="picture" src="http://127.0.0.1:8000/storage/{{$post->image->url }}" alt="">
            @else
            <img id="picture" src="https://cdn.pixabay.com/photo/2020/05/05/12/12/coffee-5132832_960_720.jpg" alt="">
            @endisset
            
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