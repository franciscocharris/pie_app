@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Tablero</h1>
<?php $user = Auth::user(); ?>
@stop

@section('content')
<div class="container-fluid">

  @can('user.index')


  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>150</h3>

          <p>New Orders</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>53<sup style="font-size: 20px">%</sup></h3>

          <p>Bounce Rate</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>{{ count($users) }}</h3>

          <p>Usuarios Registrados</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>65</h3>

          <p>Unique Visitors</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
  <!-- /.row -->


  <!-- tabla usuarios -->
  {{-- <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Usuarios Registrados</h3>

            icono para buscar
            <div class="card-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead class="thead-dark">
                <tr>
                  <th>nombre</th>
                  <th>correo</th>
                  <th>registrado el</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                  <tr>
                    <td>{{$user->name}}</td>
  <td>{{$user->email}}</td>
  <td>{{$user->created_at}}</td>
  </tr>
  @endforeach

  </tbody>
  <div class="clearfix paginacion">
    {{$users->links()}}
  </div>
  </table>
</div>
<!-- /.card-body -->
</div>
<!-- /.card -->
</div>

</div> --}}

  @endcan

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3>contenido para usuarios normales</h3>
      </div>

      <div class="card-body">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">CPU Traffic</span>
                <span class="info-box-number">
                  10
                  <small>%</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Likes</span>
                <span class="info-box-number">41,410</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Sales</span>
                <span class="info-box-number">760</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-map-marker-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Ubicaciones</span>
                <span class="info-box-number">12</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
      </div>

    </div>
  </div>
</div>


<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3>Yo vendedor</h3>
      </div>

      <div class="card-body">
        <div class="row">

          <div class="col-md-8">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Online Store Visitors</h3>
                  <a href="javascript:void(0);">View Report</a>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg">820</span>
                    <span>Visitors Over Time</span>
                  </p>
                  <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fas fa-arrow-up"></i> 12.5%
                    </span>
                    <span class="text-muted">Since last week</span>
                  </p>
                </div>
                <!-- /.d-flex -->

                <div class="position-relative mb-4">
                  <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                      <div class=""></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink">
                      <div class=""></div>
                    </div>
                  </div>
                  <canvas id="visitors-chart" height="200" width="723"
                    style="display: block; width: 723px; height: 200px;" class="chartjs-render-monitor"></canvas>
                </div>

                <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> This Week
                  </span>

                  <span>
                    <i class="fas fa-square text-gray"></i> Last Week
                  </span>
                </div>
              </div>
            </div>
            <!-- /.card -->

            <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">Products</h3>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-bars"></i>
                  </a>
                </div>
              </div>
              <div class="card-body p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                    <tr>
                      <th>Product</th>
                      <th>Price</th>
                      <th>Sales</th>
                      <th>More</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                        Some Product
                      </td>
                      <td>$13 USD</td>
                      <td>
                        <small class="text-success mr-1">
                          <i class="fas fa-arrow-up"></i>
                          12%
                        </small>
                        12,000 Sold
                      </td>
                      <td>
                        <a href="#" class="text-muted">
                          <i class="fas fa-search"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                        Another Product
                      </td>
                      <td>$29 USD</td>
                      <td>
                        <small class="text-warning mr-1">
                          <i class="fas fa-arrow-down"></i>
                          0.5%
                        </small>
                        123,234 Sold
                      </td>
                      <td>
                        <a href="#" class="text-muted">
                          <i class="fas fa-search"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                        Amazing Product
                      </td>
                      <td>$1,230 USD</td>
                      <td>
                        <small class="text-danger mr-1">
                          <i class="fas fa-arrow-down"></i>
                          3%
                        </small>
                        198 Sold
                      </td>
                      <td>
                        <a href="#" class="text-muted">
                          <i class="fas fa-search"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                        Perfect Item
                        <span class="badge bg-danger">NEW</span>
                      </td>
                      <td>$199 USD</td>
                      <td>
                        <small class="text-success mr-1">
                          <i class="fas fa-arrow-up"></i>
                          63%
                        </small>
                        87 Sold
                      </td>
                      <td>
                        <a href="#" class="text-muted">
                          <i class="fas fa-search"></i>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->
          </div>

          {{-- <div class="col-md-4">
            <div class="card card-primary collapsed-card">
              <div class="card-header">
                <h3 class="card-title">Cuentas de Banco <i class=" ml fas fa-money-check-alt"></i></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: none;">
              <a href="{{ route('location.create') }}" class="btn btn-secondary btn-sm mb-2">Registrar Cuenta</a>
                @if (count($user->locations) > 0)
                @foreach ($user->locations as $location)
                <div class="card">
                  <div class="card-header bg-primary">
                    <h3 class="card-title">
                      <i class="fas fa-text-width"></i>
                      {{$location->name}}
                    </h3>

                    <a href="{{ route('location.edit', $location->id) }}"
                      class="btn btn-warning btn-sm mb-2 float-right">editar
                      Direccion</a>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <dl>
                      <dt>Departamento</dt>
                      <dd>{{ $location->Department ? $location->Department : 'vacio'}}</dd>
                      <dt>municipio / ciudad</dt>
                      <dd>{{ $location->municipality ? $location->municipality : 'vacio'}}</dd>
                      <dt>vecindario / barrio</dt>
                      <dd>{{ $location->neighborhood ? $location->neighborhood : 'vacio'}}</dd>
                      <dt>Direccion</dt>
                      <dd>{{ $location->address ? $location->address : 'vacio'}}</dd>
                    </dl>
                  </div>
                  <!-- /.card-body -->
                  @endforeach
                </div>
                @else
                <h3>No tienes direcciones registradas. </h3>
                @endif
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            

          </div> --}}

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>
          <!-- /.col -->
        </div>
      </div>

    </div>
  </div>
</div>


<!-- /.row (main row) -->
</div><!-- /.container-fluid -->
@stop

@section('css')
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')

@stop