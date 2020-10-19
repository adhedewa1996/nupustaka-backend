@extends('adminlte::page')

@section('title', 'Edit')

@section('content_header')
    <h1>Edit Tentang</h1>
@stop

@section('content')
<div class="page-wrapper">
    <div class="content">
    <div class="card">
        <div class="card-body">
            <form action="{{url('admin/tentang/update/'.$tentang->id)}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Nama Organisasi</label>
                            <input type="text" name="nama_organisasi" class="form-control" value="{{$tentang->nama_organisasi}}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" value="{{$tentang->email}}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="{{$tentang->alamat}}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>No Telpon</label>
                            <input type="text" name="no_telp" class="form-control" value="{{$tentang->no_telp}}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea type="text" name="deskripsi" class="form-control"> {{$tentang->deskripsi}} </textarea>
                        </div>
                    </div>
                    {{-- <div class="col-md-6">
                        <div class="form-group">
                            <label>Category Picture</label>
                            <input type="file" name="category_picture" class="form-control" value={{$tentang->category_picture}}>
                        </div>
                    </div> --}}
                </div>
                <div class="m-t-20 text-center">
                    <button class="btn btn-primary submit-btn" type="submit">Update</button>
                </div>
            </form>
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
