@extends('layouts.adminbase')

@section('title','Add Category')




@section('content')
    <div class="main-panel">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Category Elements</h4>
                <p class="card-description"> Basic form layout </p>

                <div class="form-group">
                    <label>Parent Category</label>

                <form class="forms-sample" action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">
                    <select class="form-control select2" name="parent_id" style="color: #6a6f85";>
                        <option value="0" selected="selected">Main Category</option>
                        @foreach($data as $rs)
                            <option value="{{$rs->id}}"> {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}} </option>
                        @endforeach
                    </select>

                </div>
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Keywords</label>
                        <input type="text" class="form-control" name="keywords" placeholder="Keywords">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDescription1">Description</label>
                        <input type="text" class="form-control" name="description" placeholder="description">
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label>File upload</label>
                            <input type="file" name="image" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" name="image" class="form-control file-upload-info" placeholder="Upload Image">
                                <span class="input-group-append">
                            <input type="file" name="image">
                          </span>
                            </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Status</label>
                        <select style="color: #6a6f85" class="form-control"  name="status">
                            <option>True</option>
                            <option>False</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Save</button>
                    <button class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>

        <div class="content-wrapper">
        </div>

@endsection


