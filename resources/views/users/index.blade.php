@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<a href="{{ route('user.create') }}" class="btn btn-secondary btn-sm float-right">Registrar Usuario</a>

<h1>Lista de usuarios</h1>
@include('includes.message')
@stop

@section('content')
@if (count($users) > 0)
<div class="card-body table-responsive p-0">
  <table class="table table-hover text-nowrap">
    <thead class="thead-dark">
      <tr>
        <th>T. doc</th>
        <th>N. documento</th>
        <th>nombre(rol)</th>
        <th>correo</th>
        <th>registrado el</th>
        <th colspan="3">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
        @if (auth()->user()->hasRole('admin'))
          <tr>

            <td>
              {{$user->document_type}}
            </td>
            <td>
              {{$user->document}}
            </td>

            <td>
              {{$user->name}}
              {{-- rol en caso de que exista --}}
              @if ($user->roles()->first())
              ( {{ $user->roles()->first()->name }})
              @endif
            </td>

            <td>{{$user->email}}</td>
            <td>{{$user->created_at}}</td>

            @can('user.role')
            <td style="width: 2rem;">
              <a class="btn btn-warning" href="{{ route('user.role', $user->id) }}">Gestionar Rol</a>
            </td>
            @endcan
            <td style="width: 2rem;">
              <a class="btn btn-primary" href="{{ route('user.edit', $user->id) }}">Editar</a>
            </td>

            @can('user.destroy')
              <td style="width: 2rem;">
                <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#modalEliminar_{{$user->id}}">Eliminar</button>
              </td>
            @endcan

            <!-- Modal -->
            <div class="modal fade" id="modalEliminar_{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Estas Seguro de Eliminar al usuario({{$user->name}}) y toda su informacion?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <form method="POST" action="{{ route('user.destroy', $user->id) }}">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </tr>
        @elseif (!isset($user->roles()->first()->name)  || (isset($user->roles()->first()->name) && $user->roles()->first()->name !== 'admin' && auth()->user()->id != $user->id))
          <tr>

            <td>
              {{$user->document_type}}
            </td>
            <td>
              {{$user->document}}
            </td>

            <td>
              {{$user->name}}
              {{-- rol en caso de que exista --}}
              @if ($user->roles()->first())
              ( {{ $user->roles()->first()->name }})
              @endif
            </td>

            <td>{{$user->email}}</td>
            <td>{{$user->created_at}}</td>

            @can('user.role')
            <td style="width: 2rem;">
              <a class="btn btn-warning" href="{{ route('user.role', $user->id) }}">Gestionar Rol</a>
            </td>
            @endcan
            <td style="width: 2rem;">
              <a class="btn btn-primary" href="{{ route('user.edit', $user->id) }}">Editar</a>
            </td>

            @can('user.destroy')
              <td style="width: 2rem;">
                <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#modalEliminar_{{$user->id}}">Eliminar</button>
              </td>
            @endcan

            <!-- Modal -->
            <div class="modal fade" id="modalEliminar_{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Estas Seguro de Eliminar al usuario({{$user->name}}) y toda su informacion?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <form method="POST" action="{{ route('user.destroy', $user->id) }}">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </tr>
        @endif
      @endforeach

    </tbody>
    <div class="clearfix paginacion">
      {{$users->links()}}
    </div>
  </table>
</div>  
@else
  <h2>No hay Registros</h2>
@endif
@stop

@section('css')
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
{{-- <script> console.log('Hi!'); </script> --}}
@stop