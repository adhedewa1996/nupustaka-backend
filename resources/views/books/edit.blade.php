@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Books Dashboard</h1>
@stop

@section('content')
    <p>Edit Books</p>

    <div class="card">
      <div class="card-body">
        <form action="{{ url('/admin/books-update/'.$books->id) }}" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $books->title }}">
                @if($errors->has('title'))
                    <div class="error text-danger">{{$errors->first('title')}}</div>
                @endif
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="">Description</label>
                <textarea class="form-control" rows="5" name="description">{{$books->description}}</textarea>
                @if($errors->has('deskription'))
                    <div class="error text-danger">{{$errors->first('deskription')}}</div>
                @endif
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Harga sewa</label>
                <input type="text" name="harga_sewa" class="form-control" value="{{ $books->harga_sewa }}">
                @if($errors->has('harga_sewa'))
                    <div class="error text-danger">{{$errors->first('harga_sewa')}}</div>
                @endif
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Harga pinjam</label>
                <input type="text" name="harga_pinjam" class="form-control" value="{{ $books->harga_pinjam }}">
                @if($errors->has('harga_pinjam'))
                    <div class="error text-danger">{{$errors->first('harga_pinjam')}}</div>
                @endif
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Harga beli</label>
                <input type="text" name="harga_beli" class="form-control" value="{{ $books->harga_beli }}">
                @if($errors->has('harga_beli'))
                    <div class="error text-danger">{{$errors->first('harga_beli')}}</div>
                @endif
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Qty sewa</label>
                <input type="text" name="qty_sewa" class="form-control" value="{{ $books->qty_sewa }}">
                @if($errors->has('qty_sewa'))
                    <div class="error text-danger">{{$errors->first('qty_sewa')}}</div>
                @endif
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Qty pinjam</label>
                <input type="text" name="qty_pinjam" class="form-control" value="{{ $books->qty_pinjam }}">
                @if($errors->has('qty_pinjam'))
                    <div class="error text-danger">{{$errors->first('qty_pinjam')}}</div>
                @endif
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Qty beli</label>
                <input type="text" name="qty_beli" class="form-control" value="{{ $books->qty_beli }}">
                @if($errors->has('qty_beli'))
                    <div class="error text-danger">{{$errors->first('qty_beli')}}</div>
                @endif
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Halaman</label>
                <input type="text" name="halaman" class="form-control" value="{{ $books->halaman }}">
                @if($errors->has('halaman'))
                    <div class="error text-danger">{{$errors->first('halaman')}}</div>
                @endif
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Publish at</label>
                <input type="text" name="publish_at" class="form-control datepicker" value="{{ $books->publish_at }}">
                @if($errors->has('publish_at'))
                    <div class="error text-danger">{{$errors->first('publish_at')}}</div>
                @endif
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Isbn</label>
                <input type="text" name="isbn" class="form-control" value="{{ $books->isbn }}">
                @if($errors->has('isbn'))
                    <div class="error text-danger">{{$errors->first('isbn')}}</div>
                @endif
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">bahasa</label>
                <select class="form-control" name="bahasa">
                  <option value="Indonesia" <?php if ($books->isbn=="Indonesia"): ?>selected<?php endif; ?>>Indonesia</option>
                  <option value="Inggris" <?php if ($books->isbn=="Inggris"): ?>selected<?php endif; ?>>Inggris</option>
                  <option value="Mandarin" <?php if ($books->isbn=="Mandarin"): ?>selected<?php endif; ?>>Mandaris</option>
                </select>
                @if($errors->has('isbn'))
                    <div class="error text-danger">{{$errors->first('bahasa')}}</div>
                @endif
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Picture</label>
                <div class="custom-file">
                  <input type="file" name="picture" class="custom-file-input" id="customFile" value="{{ $books->picture }}">
                  @if($errors->has('picture'))
                      <div class="error text-danger">{{$errors->first('picture')}}</div>
                  @endif
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Files</label>
                <div class="custom-file">
                  <input type="file" name="files" class="custom-file-input" id="customFile" value="{{ $books->files }}">
                  @if($errors->has('files'))
                      <div class="error text-danger">{{$errors->first('files')}}</div>
                  @endif
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Kategori Buku</label>
                <select class="form-control" name="id_kategori" required>
                  <option value="">Pilih Kategori</option>
                  @foreach($kategori as $key=>$value)
                  <option value="{{$value->id}}">{{$value->category_name}}</option>
                  @endforeach
                </select>
                @if($errors->has('id_kategori'))
                    <div class="error text-danger">{{$errors->first('id_kategori')}}</div>
                @endif
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer text-muted">
          <div class="form-group">
            <button type="submit" name="button" class="btn btn-primary">Save</button>
          </div>
        </div>
      </form>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css">
@stop

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" charset="utf-8"></script>
    <script> console.log('Hi!'); </script>
    <script>
   $(document).ready( function () {
   $('.datepicker').datepicker({
                 format: "yyyy-mm-dd",
                 autoclose:true
             });
    $('#laravel_datatable').DataTable({
           processing: true,
           serverSide: true,
           ajax: "{{ url('/admin/JSONbooks') }}",
           columns: [
                    { data: 'id', name: 'id' },
                    { data: 'title', name: 'Title' },
                    { data: 'description', name: 'Description' },
                    { data: 'harga_sewa', name: 'Rental price' },
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                 ]
        });
     });
  </script>
@stop
