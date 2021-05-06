<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del rol']) !!}
    @error('name')
        <strong class="text-danger">
            {{$message}}
        </strong>
    @enderror
</div>
        <h2 class="h3">Lista de permisos</h2>
        @foreach ($persmissions as $persmission)
            <div>
                <label>
                   {!! Form::checkbox('permissions[]', $persmission->id, null, ['class' => 'mr-1']) !!}
                    {{$persmission->description}}
                </label>
            </div>
@endforeach
