@extends('layouts.adminbase')

@section('title','Package List')

@section('content')
    <div class="main-panel">
        <h1> Package List </h1>
        <div class="card">
            <div class="card-body" >
                <a href="{{route('admin.package.create')}}" class="badge badge-success "style="margin-bottom: 20px">Add Package</a>
                <div class="col-sm-6">
                </div>
                <p class="card-description"> Package List</p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Image</th>
                            <th>Image Gallery</th>
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
                                <td>{{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category, $rs->category->title) }}</td>
                                <td>{{$rs -> title}} </td>
                                <td>{{$rs -> price}} </td>
                                <td>{{$rs -> quantity}} </td>
                                <td>
                                    @if ($rs->image)
                                        <img src="{{Storage::url($rs->image)}}">
                                    @endif
                                </td>
                                <td> <a href="{{route('admin.image.index',['pid'=> $rs -> id])}}"
                                        onclick="return !window.open(this.href, '','top=50 left=100 width=1100,height=700')">
                                    <img src="/assets/admin/assets/images/gallery.jpg" style="height: 30px">
                                    </a>
                                </td>
                                <td>{{$rs -> status}}</td>
                                <td><a href="{{route('admin.package.edit',['id'=> $rs -> id])}}" class="badge badge-info">Edit</a> </td>
                                <td><a href="{{route('admin.package.destroy',['id'=> $rs -> id])}}"class="badge badge-danger btn-fw" onclick="return confirm('Deleting !! Are you sure ?')">Delete</a> </td>
                                <td><a href="{{route('admin.package.show',['id'=> $rs -> id])}}"class="badge badge-success">Show</a> </td>
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
