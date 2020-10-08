@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>User Configuration Dashboard</h1>
@stop

@section('content')
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
    @endif
    <div class="card">
      <div class="card-header">
        Featured
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="laravel_datatable">
             <thead>
                <tr>
                   <th width="10px">No</th>
                   <th>Name</th>
                   <th>Email</th>
                   <th>Token</th>
                   <th>Action</th>
                </tr>
             </thead>
          </table>
        </div>
      </div>
      <div class="card-footer text-muted">
        2 days ago
      </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js" charset="utf-8"></script>
    <script>
   $(document).ready( function () {
    $('#laravel_datatable').DataTable({
           processing: true,
           serverSide: true,
           ajax: "{{ url('/admin/JSON-user-config') }}",
           columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'Nama' },
                    { data: 'email', name: 'Email' },
                    { data: 'token', name: 'Token' },
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                 ]
        });
     $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })
    });
  </script>
@stop
