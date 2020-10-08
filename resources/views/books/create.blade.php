@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Books Dashboard</h1>
@stop

@section('content')
    <p>Edit Books</p>

    <div class="card">
      <div class="card-body">
        <form action="{{ url('/admin/books-store') }}" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control" value="">
                @if($errors->has('title'))
                    <div class="error text-danger">{{$errors->first('title')}}</div>
                @endif
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="">Description</label>
                <textarea class="form-control" name="description" rows="3"></textarea>
                @if($errors->has('deskription'))
                    <div class="error text-danger">{{$errors->first('deskription')}}</div>
                @endif
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Harga sewa</label>
                <input type="text" name="harga_sewa" class="form-control" value="">
                @if($errors->has('harga_sewa'))
                    <div class="error text-danger">{{$errors->first('harga_sewa')}}</div>
                @endif
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Harga pinjam</label>
                <input type="text" name="harga_pinjam" class="form-control" value="">
                @if($errors->has('harga_pinjam'))
                    <div class="error text-danger">{{$errors->first('harga_pinjam')}}</div>
                @endif
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Harga beli</label>
                <input type="text" name="harga_beli" class="form-control" value="">
                @if($errors->has('harga_beli'))
                    <div class="error text-danger">{{$errors->first('harga_beli')}}</div>
                @endif
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Qty sewa</label>
                <input type="text" name="qty_sewa" class="form-control" value="">
                @if($errors->has('qty_sewa'))
                    <div class="error text-danger">{{$errors->first('qty_sewa')}}</div>
                @endif
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Qty pinjam</label>
                <input type="text" name="qty_pinjam" class="form-control" value="">
                @if($errors->has('qty_pinjam'))
                    <div class="error text-danger">{{$errors->first('qty_pinjam')}}</div>
                @endif
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Qty beli</label>
                <input type="text" name="qty_beli" class="form-control" value="">
                @if($errors->has('qty_beli'))
                    <div class="error text-danger">{{$errors->first('qty_beli')}}</div>
                @endif
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Halaman</label>
                <input type="text" name="halaman" class="form-control" value="">
                @if($errors->has('halaman'))
                    <div class="error text-danger">{{$errors->first('halaman')}}</div>
                @endif
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Diterbitkan Pada</label>
                <input type="text" name="publish_at" class="form-control datepicker" value="">
                @if($errors->has('publish_at'))
                    <div class="error text-danger">{{$errors->first('publish_at')}}</div>
                @endif
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">ISBN</label>
                <input type="text" name="isbn" class="form-control" value="">
                @if($errors->has('isbn'))
                    <div class="error text-danger">{{$errors->first('isbn')}}</div>
                @endif
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Bahasa</label>
                <select class="form-control" name="bahasa">
                  <option value="Indonesia">Indonesia</option>
                  <option value="Inggris">Inggris</option>
                  <option value="Mandarin">Mandaris</option>
                </select>
                @if($errors->has('bahasa'))
                    <div class="error text-danger">{{$errors->first('bahasa')}}</div>
                @endif
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Gambar</label>
                <div class="custom-file">
                  <input type="file" name="picture" class="custom-file-input" id="customFile" value="">
                  @if($errors->has('picture'))
                      <div class="error text-danger">{{$errors->first('picture')}}</div>
                  @endif
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">File PDF</label>
                <div class="custom-file">
                  <input type="file" name="files" class="custom-file-input" id="customFile" value="">
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
                <select class="form-control" name="category_id" required>
                  <option value="">Pilih Kategori</option>
                  @foreach($kategori as $key=>$value)
                  <option value="{{$value->id}}">{{$value->category_name}}</option>
                  @endforeach
                </select>
                @if($errors->has('category_id'))
                    <div class="error text-danger">{{$errors->first('category_id')}}</div>
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

@stop

@section('js')
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
