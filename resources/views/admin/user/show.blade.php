@extends('layouts.adminwindow')

@section('title','User Detail :' .$data -> title)

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
                                <th>E mail</th>
                                <th>Roles</th>
                                <th>Created Date</th>
                                <th>Update Date</th>
                                <th>Admin Note</th>
                            </tr>
                            <tbody>
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td>
                                    @foreach($data->roles as $role)
                                        {{$role->name}}
                                        <a href="{{route('admin.user.destroyrole',['uid'=> $data -> id,'rid'=> $role -> id ])}}"class="badge badge-danger btn-fw" onclick="return confirm('Deleting !! Are you sure ?')">[x]</a>
                                        @endforeach
                                </td>

                                <td>{{$data->created_at}}</td>
                                <td>{{$data->updated_at}}</td>
                                <td>
                                    <form class="forms-sample" action="{{route('admin.user.addrole',['id'=> $data -> id])}}" method="post">
                                        @csrf
                                        <select name="role_id">
                                            @foreach($roles as $role)
                                                <option value="{{$role->id}}">{{$role->name}}</option>
                                            @endforeach
                                        </select>
                                        <button type="submit" class="btn btn-primary mr-2">Add Role</button>
                                    </form>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
