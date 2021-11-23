@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Atributo</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">editar Atributo</h3>
        </div>

        <form method="POST" action="{{ route('attribute.update', $attribute->id) }}" enctype="multipart/form-data">
            @method('PATCH')
            @include('includes.form.formAttribute')

            
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Actualizar</button>
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