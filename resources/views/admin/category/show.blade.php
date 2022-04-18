@extends('layouts.adminbase')

@section('title','Show Category : ' .$data -> title)




@section('content')
    <div class="main-panel">
        <div class="card">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('admin.category.edit',['id'=> $data -> id])}}" class="badge badge-info "style="margin-bottom: 20px">Edit</a>
                    <a href="{{route('admin.category.destroy',['id'=> $data -> id])}}" onclick="return confirm('Deleting !! Are you sure ?')" class="badge badge-danger "style="margin-bottom: 20px">Delete</a>
                    <div class="table-responsive">
                        <div class="col-sm-6">
                        </div>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Keywords</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Created Date</th>
                                <th>Update Date</th>
                            </tr>
                            <tbody>
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->title}}</td>
                                <td>{{$data->keywords}}</td>
                                <td>{{$data->description}}</td>
                                <td>{{$data->image}}</td>
                                <td>{{$data->status}}</td>
                                <td>{{$data->created_at}}</td>
                                <td>{{$data->updated_at}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-wrapper">
@endsection
