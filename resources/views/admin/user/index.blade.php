@extends('layouts.adminbase')

@section('title','User List')

@section('content')
    <div class="main-panel">
        <h1> User List </h1>
        <div class="card">
            <div class="card-body" >
                <div class="col-sm-6">
                </div>
                <p class="card-description"> User List</p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th style="width: 40px">Show</th>
                            <th style="width: 40px">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $rs)
                            <tr>
                                <td>{{$rs -> id}}</td>
                                <td>{{$rs -> name}} </td>
                                <td>{{$rs -> email}} </td>
                                <td>
                                    @foreach($rs->roles as $role)
                                {{$role->name}}
                                     @endforeach
                                </td>

                                <td>
                                    <a href="{{route('admin.user.show',['id'=> $rs -> id])}}" class="badge badge-success btn-fw"
                                       onclick="return !window.open(this.href, '','top=50 left=100 width=1100,height=700')">
                                        Show
                                    </a>
                                </td>
                                <td><a href="{{route('admin.user.destroy',['id'=> $rs -> id])}}"class="badge badge-danger btn-fw" onclick="return confirm('Deleting !! Are you sure ?')">Delete</a> </td>
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
