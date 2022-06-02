@extends('layouts.adminbase')

@section('title','Comment & Reviews List')

@section('content')
    <div class="main-panel">
        <h1> Commnet List </h1>
        <div class="card">
            <div class="card-body" >
                <div class="col-sm-6">
                </div>
                <p class="card-description"> Comment List</p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Subject</th>
                            <th>reviews</th>
                            <th>rate</th>
                            <th>Status</th>
                            <th style="width: 40px">Show</th>
                            <th style="width: 40px">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $rs)
                            <tr>
                                <td>{{$rs -> id}}</td>
                                <td>{{$rs -> user->name}} </td>
                                <td>{{$rs -> subject}} </td>
                                <td>{{$rs -> review}} </td>
                                <td>{{$rs -> rate}} </td>
                                <td>{{$rs -> status}} </td>
                                <td>
                                    <a href="{{route('admin.comment.show',['id'=> $rs -> id])}}" class="badge badge-success btn-fw"
                                       onclick="return !window.open(this.href, '','top=50 left=100 width=1100,height=700')">
                                        Show
                                    </a>
                                </td>
                                <td><a href="{{route('admin.comment.destroy',['id'=> $rs -> id])}}"class="badge badge-danger btn-fw" onclick="return confirm('Deleting !! Are you sure ?')">Delete</a> </td>

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
