@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Nuevo atributo</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Crear atributo Nuevo</h3>
        </div>

        <form method="POST" action="{{ route('attribute.store') }}" enctype="multipart/form-data">
            @include('includes.form.formAttribute')
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
          
      </div>
</div><!-- /.container-fluid -->
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
@stop