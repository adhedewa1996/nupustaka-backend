@extends('adminlte::page')

@section('title', 'Edit')

@section('content_header')
    <h1>Edit Category</h1>
@stop

@section('content')
<div class="page-wrapper">
    <div class="content">
    <div class="card">
        <div class="card-body">
            <form action="{{url('admin/category/update/'.$category->id)}}" method="POST" enctype="multipart/form-data">            
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" name="category_name" class="form-control" value="{{$category->category_name}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Category Picture</label>
                            <input type="file" name="category_picture" class="form-control" value="{{$category->category_picture}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Category Slug</label>
                            <input type="text" name="category_slug" class="form-control" value={{$category->category_slug}}>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Parent Id</label>
                            <select name="parent_id" class="form-control">
                                <option value="">Select Category</option>
                                @foreach($categories as $cate)
                                    <option value="{{$cate->id}}" {{ $cate->id == $category->parent_id ? 'selected' : ''}}>{{$cate->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
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
