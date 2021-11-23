@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registrar nuevo Usuario</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Crear Usuario Nuevo</h3>
        </div>

        <div class="card-body">

            <form method="POST" action="{{ route('user.store') }}">
                @csrf
                @include('includes.form.formUser')
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
          
    </div>
</div><!-- /.container-fluid -->
@stop

@section('css')
@stop

@section('js')
@stop