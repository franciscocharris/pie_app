@extends('adminlte::page')

@section('title', 'Attributos lista')

@section('content_header')
<a href="{{ route('attribute.create') }}" class="btn btn-secondary btn-sm float-right">Registrar Categoria</a>

<h1>Lista de Categorias</h1>
@include('includes.message')
@stop

@section('content')
@if (count($attributes) > 0)
<div class="card-body table-responsive p-0">
  <table class="table table-hover text-nowrap">
    <thead class="thead-dark">
      <tr>
        <th>nombre</th>
        <th>unidad de medida del atributo</th>
        <th>multivalor</th>
        <th>registrado el</th>
        <th colspan="2">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($attributes as $attribute)
      <tr>
        <td>{{$attribute->name}}</td>
        <td>{{$attribute->units}}</td>
        <td>{{$attribute->multi_value == 1 ? 'si' : 'no'}}</td>
        <td>{{$attribute->created_at}}</td>
        @can('attribute.edit')
          <td style="width: 2rem;">
            <a class="btn btn-warning" href="{{ route('attribute.edit', $attribute->id) }}">Editar</a>
          </td>
        @endcan

        {{-- @can('user.destroy')
          <td style="width: 2rem;">
            <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#modalEliminar_{{$attribute->id}}">Eliminar</button>
          </td>
        @endcan --}}

        <!-- Modal -->
        {{-- <div class="modal fade" id="modalEliminar_{{$attribute->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                Estas Seguro de Eliminar al usuario({{$attribute->name}}) y toda su informacion?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form method="POST" action="{{ route('attribute.destroy', $attribute->id) }}">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
              </div>
            </div>
          </div>
        </div> --}}
      </tr>
      @endforeach

    </tbody>
    {{-- <div class="clearfix paginacion">
      {{$attributes->links()}}
    </div> --}}
  </table>
</div>  
@else
<hr/>
  <h2>No hay Registros</h2>
@endif
@stop

@section('css')
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
{{-- <script> console.log('Hi!'); </script> --}}
@stop