
@extends('layouts.frontbase')

@section('title','User Order List')

@section('content')

    <div class="card-body">
        <h4 class="card-title">User Menu</h4>
        @include('home.user.usermenu')
    </div>
    <div class="row">
        <div class="side"></div>
        <div class="main" >
            <p style="white-space:pre-wrap; ">
            <div class = "product-preview__title">
                <h1 class = "h1 alt-h1 "> User Orders</h1>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name & Surname</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th style="width: 40px">Cancel</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $rs)
                        <tr>
                            <td>{{$rs -> id}}</td>
                            <td>{{$rs -> name}}</td>
                            <td>{{$rs -> phone}} </td>
                            <td>{{$rs -> email}} </td>
                            <td>{{$rs -> address}} </td>
                            <td>{{$rs -> status}} </td>
                            <td><a href="{{route('userpanel.orderdetail',['id'=> $rs -> id])}}"class="badge badge-danger btn-fw" >Show Detail </a> </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            </p>
        </div>

    </div>


@endsection
