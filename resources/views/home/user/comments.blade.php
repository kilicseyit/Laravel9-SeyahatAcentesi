
@extends('layouts.frontbase')

@section('title','User Comments & Reviews')

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
                <h1 class = "h1 alt-h1 "> User Comments</h1>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Product</th>
                        <th>Subject</th>
                        <th>reviews</th>
                        <th>rate</th>
                        <th>Status</th>
                        <th style="width: 40px">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($comments as $rs)
                        <tr>
                            <td>{{$rs -> id}}</td>
                            <td><a href="{{route('package',['id'=>$rs->package_id])}}" >
                                    {{$rs -> package->title}}</a>
                            </td>
                            <td>{{$rs -> subject}} </td>
                            <td>{{$rs -> review}} </td>
                            <td>{{$rs -> rate}} </td>
                            <td>{{$rs -> status}} </td>
                            <td><a href="{{route('userpanel.reviewdestroy',['id'=> $rs -> id])}}"class="badge badge-danger btn-fw" onclick="return confirm('Deleting !! Are you sure ?')">Delete</a> </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            </p>
        </div>

    </div>


@endsection
