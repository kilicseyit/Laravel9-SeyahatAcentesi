@extends('layouts.adminbase')

@section('title','FAQ List')

@section('content')
    <div class="main-panel">
        <h1> FAQ List </h1>
        <div class="card">
            <div class="card-body" >
                <a href="{{route('admin.faq.create')}}" class="badge badge-success "style="margin-bottom: 20px">Add Question</a>
                <div class="col-sm-6">
                </div>
                <p class="card-description"> FAQ List</p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Question</th>
                            <th>Answer</th>
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
                                <td>{{$rs -> question}} </td>
                                <td>{!! $rs -> answer !!} </td>
                                <td>{{$rs -> status}}</td>
                                <td><a href="{{route('admin.faq.edit',['id'=> $rs -> id])}}" class="badge badge-info">Edit</a> </td>
                                <td><a href="{{route('admin.faq.destroy',['id'=> $rs -> id])}}"class="badge badge-danger btn-fw" onclick="return confirm('Deleting !! Are you sure ?')">Delete</a> </td>
                                <td><a href="{{route('admin.faq.show',['id'=> $rs -> id])}}"class="badge badge-success">Show</a> </td>
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
