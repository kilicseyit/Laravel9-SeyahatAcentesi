@extends('layouts.adminwindow')

@section('title','Package Image Gallery')

@section('content')
    <h3>{{$package->title}}</h3>
    <hr>

    <form class="forms-sample" action="{{route('admin.image.store',['pid'=>$package->id])}}" method="post" enctype="multipart/form-data">
     @csrf
        <div class="form-group">
            <label for="exampleInputUsername1">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title">
            <div class="form-group">
                <label>File upload</label>
                <input type="file" name="image" class="file-upload-default">
                <div class="input-group col-xs-12">
                    <input type="text" name="image" class="form-control file-upload-info" placeholder="Upload Image">
                    <span class="input-group-append">
                            <input type="file" name="image">
                          </span>
                </div>
                <span class="input-group-append">
                    <input class="file-upload-browse btn btn-primary" type="submit" value="Upload">
                          </span>
            </div>
        </div>

    </form>

    <div class="main-panel">
        <h1>Package Image List </h1>
        <div class="card">
            <div class="card-body" >
                <div class="col-sm-6">
                </div>
                <p class="card-description"> Package Image List</p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th style="width: 40px">Update</th>
                            <th style="width: 40px">Delete</th>


                        </tr>
                        </thead>
                        <tbody>
                        @foreach($images as $rs)
                            <tr>
                                <td>{{$rs -> id}}</td>
                                <td>{{$rs -> title}} </td>


                                <td>
                                    @if ($rs->image)
                                        <img src="{{Storage::url($rs->image)}}">
                                    @endif
                                </td>
                                <td><a href="{{route('admin.image.destroy',['pid'=> $package -> id,'id'=> $rs -> id])}}"class="badge badge-danger btn-fw" onclick="return confirm('Deleting !! Are you sure ?')">Delete</a> </td>
                            </tr>
                        @endforeach



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="content-wrapper">
        </div>
@endsection
