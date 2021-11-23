@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <a href="{{ route('roles.create') }}" class="btn btn-secondary btn-sm float-right">Crear Role</a>
    <h1>Lista de Roles</h1>
    @include('includes.message')
@stop

@section('content')
<div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
      <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Creado el</th>
            <th colspan="2">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($roles as $role)
          <tr>
              <td>{{ $role->id }}</td>
              <td>{{$role->name}}</td>
              <td>{{$role->created_at}}</td>
              <td style="width: 2rem;">
                  <a class="btn btn-primary" href="{{ route('roles.edit', $role) }}">Editar</a>
              </td>

              <td style="width: 2rem;">
                <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#modalEliminar_{{$role->id}}">Eliminar</button>
              </td>

              <div class="modal fade" id="modalEliminar_{{$role->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Eliminar Role</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      Estas Seguro de Eliminar el rol({{$role->name}}) (esto puede desvincular a mucha gente)?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <form method="POST" action="{{ route('roles.destroy', $role) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
          </tr>
        @endforeach
        
      </tbody>
    </table>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop