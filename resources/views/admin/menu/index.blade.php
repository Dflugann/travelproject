@extends('adminlte::page')

@section('title', 'Flaaps')

@section('content_header')
    <h1>Menu</h1>
@stop

@section('content')
<section class="content-header">
    @if(session()->get('success'))
        <div class="alert alert-success">
        {{ session()->get('success') }}
        </div><br />
    @endif
      <h1>
        Lista de Menus
        <small>Criar, alaterar e deletar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Simple</li>
      </ol>
    </section>

    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Menus</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Titulo</th>
                  <th>Url</th>
                  <th>Status</th>
                  <th>Descricao</th>
                  <th>action</th>
                </tr>
                @foreach($menus as $menu)
                <tr>
                    <td>{{ $menu->id }}</td>
                    <td>{{ $menu->title }}</td>
                    <td>{{ $menu->url }}</td>
                    <td><span class="{{ $menu->status == 'ativo' ? 'label label-success' : 'label label-danger' }}">{{ $menu->status}}</span></td>
                    <td>{{ $menu->description }}</td>
                    <td>
                        <span><i class="fa fa-plus text-success"></i></a></span>
                        <span><i class="fa fa-pencil text-warning"></i></a></span>
                        <span><i class="fa fa-minus text-danger"></i></a></span>
                    </td>
                </tr>
                @endforeach
                <!-- <tr>
                  <td>219</td>
                  <td>Alexander Pierce</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-warning">Pausado</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>657</td>
                  <td>Bob Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-primary">Approved</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>175</td>
                  <td>Mike Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-danger">Bloqueado</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr> -->
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
