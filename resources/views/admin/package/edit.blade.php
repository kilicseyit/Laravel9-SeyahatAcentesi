@extends('layouts.adminbase')

@section('title','Edit Category : ' .$data -> title)




@section('content')
    <div class="main-panel">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Category:  {{$data ->title}} </h4>
                <form class="forms-sample" action="{{route('admin.category.update',['id'=> $data -> id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Parent Category</label>

                        <select class="form-control select2" name="parent_id" style="color: #6a6f85";>
                            <option value="0" selected="selected">Main Category</option>
                            @foreach($datalist as $rs)
                                <option value="{{ $rs -> id }}" @if($rs->id == $data -> parent_id) selected="selected" @endif >
                                    {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs -> title) }}
                                </option>
                            @endforeach
                        </select >

                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Title</label>
                        <input type="text" class="form-control" name="title" value="{{$data -> title}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Keywords</label>
                        <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDescription1">Description</label>
                        <input type="text" class="form-control" name="description" value="{{$data->description}}">
                    </div>
                    <div
                    <div class="input-group col-xs-12">
                        <input type="text" name="image" class="form-control file-upload-info" placeholder="Upload Image">
                        <span class="input-group-append">
                            <input type="file" name="image">
                          </span>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Status</label>
                        <select style="color: #0f6674" class="form-control"  name="status">
                            <option selected>{{$data->status}}</option>
                            <option>True</option>
                            <option>False</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Update Date</button>
                    <button class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>

        <div class="content-wrapper">
        </div>

@endsection
