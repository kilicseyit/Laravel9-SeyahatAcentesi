@extends('layouts.adminbase')

@section('title','Category List')




@section('content')
    <div class="main-panel">
        <h1> Category List </h1>
        <div class="card">
            <div class="card-body" >
                <a href="{{route('admin.category.create')}}" class="badge badge-success "style="margin-bottom: 20px">Add Category</a>
                <div class="col-sm-6">
                </div>
                <p class="card-description"> Category List</p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Keywords</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th style="width: 40px">Edit</th>
                            <th style="width: 40px">Delete</th>
                            <th style="width: 40px">Show</th>


                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $rs)
                        <tr>
                            <td>{{$rs -> id}}</td>
                            <td>{{$rs -> title}} </td>
                            <td>{{$rs -> keywords}}</td>
                            <td>{{$rs -> description}}</td>
                            <td>
                                @if ($rs->image)
                                <img src="{{Storage::url($rs->image)}}">
                                @endif
                            </td>
                            <td>{{$rs -> status}}</td>
                            <td><a href="{{route('admin.category.edit',['id'=> $rs -> id])}}" class="badge badge-info">Edit</a> </td>
                            <td><a href="{{route('admin.category.destroy',['id'=> $rs -> id])}}"class="badge badge-danger btn-fw" onclick="return confirm('Deleting !! Are you sure ?')">Delete</a> </td>
                            <td><a href="{{route('admin.category.show',['id'=> $rs -> id])}}"class="badge badge-success">Show</a> </td>
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
