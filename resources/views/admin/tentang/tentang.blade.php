@extends('adminlte::page')

@section('title', 'Tentang')

@section('content_header')
    <h1>Tentang</h1>
@stop
@section('content')
<div class="page-wrapper">
    <div class="content">
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{url('/admin/tentang/store')}}" method="POST" enctype="multipart/form-data">
                          {{ csrf_field() }}
                            <div class="card">
                                <div class="card-body">
                                  <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama Organisasi</label>
                                        <input type="text" name="nama_organisasi" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Deskripsi</label>
                                        <textarea type="text" name="deskripsi" class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" name="alamat" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>No Telpon</label>
                                        <input type="text" name="no_telp" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control">
                                    </div>
                                </div>
                                  <div class="m-t-20">
                                      <button class="btn btn-primary submit-btn btn-sm" type="submit">Submit</button>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                              <div class="table-responsive">
                                <table class="table table-bordered" id="laravel_datatable">
                                   <thead>
                                      <tr>
                                         <th width="10px">No</th>
                                         <th>Nama Organisasi</th>
                                         <th>Deskripsi</th>
                                         <th>Email</th>
                                         <th>Alamat</th>
                                         <th>No Telp</th>
                                         <th width="10%">Action</th>
                                      </tr>
                                   </thead>
                                   <tbody>
                                     @foreach($data_tentang as $key => $tentang)
                                     <tr>
                                       <td>{{$key+1}}</td>
                                       <td>{{$tentang->nama_organisasi}}</td>
                                       <td>{{$tentang->deskripsi}}</td>
                                       <td>{{$tentang->email}}</td>
                                       <td>{{$tentang->alamat}}</td>
                                       <td>{{$tentang->no_telp}}</td>
                                       <td><a href="{{url('admin/tentang/delete/'.$tentang->id)}}" class="btn btn-danger btn-xs">Delete</a>
                                       <a href="{{url('admin/tentang/edit/'.$tentang->id)}}" class="btn btn-warning btn-xs">Edit</a></td>
                                     </tr>
                                     @endforeach
                                   </tbody>
                                </table>
                              </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@stop


@section('css')

@stop

@section('js')
  <script>
  $(document).ready( function () {
    $('#laravel_datatable').DataTable();
  });
  </script>
@stop
