@extends('adminlte::page')

@section('title', 'Asignar Rol a Usuario')

@section('content_header')
    <h1>Cambiar de rol a Usuarios</h1>
@stop

@section('content')
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Rol a Usuario</h3>
    </div>
    @include('includes.message')
    
    <div class="row">
        <div class="col-md-6 ml-2">
            @auth
                <label for="name">nombre</label>
            @endauth
            <div class="input-group mb-3">
                <p class="form-control" disabled>{{ $user->name }}</p>
            
            </div>
            
        </div>

        <div class="col-md-12">
            @if ($user->seller)
            <table class="table table-hover table-responsive ml-2">
                <thead class="thead-dark">
                  <tr>
                      <th>activo</th>
                      <th>N. documento</th>
                      <th>Nombre tienda</th>
                      <th>saldo</th>
                      <th>correo</th>
                      <th>solicitud</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <td>
                        {{-- rol en caso de que exista --}}
                        @if ($user->hasRole('vendedor'))
                            {{ 'si' }}
                        @else 
                            {{ 'no' }}
                        @endif 
                      </td>
                      
                    <td>
                        {{$user->seller->user->document}}
                    </td>
                    <td>
                        {{$user->seller->store_name}}
                    </td>
                    <td>
                        {{$user->seller->balance}}
                    </td>
                    <td>{{$user->seller->user->email}}</td>
                    <td>
                        {{\Helper::LongTimeFilter($user->seller->created_at)}} <br>
                        {{$user->seller->created_at}}
                    </td>
                  </tr>
            
                </tbody>
              </table>
            @endif
        </div>
        
    </div>

    <form method="POST" action="{{ route('user.saverole') }}">
        @csrf @method('PATCH')

        <div class="card-body">
            <label for="roles">Roles</label>
            @foreach ($roles as $role)
                @if ($user->hasRole($role))
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="roles[]" value="{{$role->id}}" checked   >
                        <label class="form-check-label" for="exampleCheck1">{{$role->name}}</label>
                    </div>
                @else
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="roles[]" value="{{$role->id}}"    >
                        <label class="form-check-label" for="exampleCheck1">{{$role->name}}</label>
                    </div>
                @endif
                
            @endforeach
        </div>

        {{-- id del user --}}
        <input type="hidden" name="user" value="{{ $user->id }}">

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Asignar Rol</button>
      </div>
    </form>
  </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop

