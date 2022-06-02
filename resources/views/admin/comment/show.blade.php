@extends('layouts.adminwindow')

@section('title','Show Message : ' .$data -> title)

@section('content')
    <div class="main-panel">
        <div class="card">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="col-sm-6">
                        </div>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Ip Number</th>
                                <th>Status</th>
                                <th>Created Date</th>
                                <th>Update Date</th>
                                <th>Admin Note</th>
                            </tr>
                            <tbody>
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->user->name}}</td>
                                <td>{{$data->subject}}</td>
                                <td>{{$data->rate}}</td>
                                <td>{{$data->ip}}</td>
                                <td>{{$data->status}}</td>
                                <td>{{$data->created_at}}</td>
                                <td>{{$data->updated_at}}</td>
                                <td>
                                    <form class="forms-sample" action="{{route('admin.comment.update',['id'=> $data -> id])}}" method="post">
                                        @csrf
                                        <select>
                                            <option selected>{{$data->status}}</option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>

                                        <button type="submit" class="btn btn-primary mr-2">Update Comment</button>
                                    </form>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-wrapper">
@endsection
