@extends('adminlte::page')

@section('title', 'Category')

@section('content_header')
    <h1>Category</h1>
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
                      <form action="{{url('/admin/category/store')}}" method="POST" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="card">
                              <div class="card-body">
                                  <div class="row">
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label>Category Name</label>
                                              <input type="text" class="form-control" name="category_name">
                                              @if($errors->has('category_name'))
                                                  <div class="error text-danger">{{$errors->first('category_name')}}</div>
                                              @endif
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label>Parent Category</label>
                                              <select name="parent_id" class="form-control">
                                                  <option value="">Select Category</option>
                                                  @foreach($data_category as $category)
                                                      <option value="{{$category->id}}">{{$category->category_name}}</option>
                                                  @endforeach
                                              </select>
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label>Category Picture</label>
                                              <input type="file" class="form-control" name="category_picture">
                                          </div>
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
                                         <th>Nama Category</th>
                                         <th width="10%">Action</th>
                                      </tr>
                                   </thead>
                                   <tbody>
                                     @foreach($data_category as $key => $category)
                                     <tr>
                                       <td>{{$key+1}}</td>
                                       <td>{{$category->category_name}}</td>
                                       <td><a href="{{url('admin/category/delete/'.$category->id)}}" class="btn btn-danger btn-xs">Delete</a>
                                       <a href="{{url('admin/category/edit/'.$category->id)}}" class="btn btn-warning btn-xs">Edit</a></td>
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
