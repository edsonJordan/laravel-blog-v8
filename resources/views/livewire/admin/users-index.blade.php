<div>
   <div class="card">
       <div class="card-header">
           <input wire:model="search" class="form-control" type="text" placeholder="Ingrese el nombre que desea buscar">
       </div>
      @if ($users->count())
        <div class="card-body">
            <table class="table table-striped" >
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td width="10px" >
                                <a href="{{route('admin.users.edit', $user)}}" class="btn btn-warning">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
        </div>
        {{$users->links()}}
        @else 
        <div class="card-body">
            <strong>No hay registros</strong>
        </div>
      @endif
   </div>
</div>
