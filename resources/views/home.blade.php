@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
              <p>Welcome to this beautiful admin panel.</p>
          </div>
          <div class="card-body">
              <p>Welcome to this beautiful admin panel.</p>
          </div>
        </div>
      </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
                <p>Welcome to this beautiful admin panel.</p>
            </div>
            <div class="card-body">
                <p>Welcome to this beautiful admin panel.</p>
            </div>
          </div>
        </div>
    </div>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
