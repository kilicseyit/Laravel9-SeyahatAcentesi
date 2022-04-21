@extends('layouts.adminbase')

@section('title','Show Package : ' .$data -> title)




@section('content')
    <div class="main-panel">
        <div class="card">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('admin.package.edit',['id'=> $data -> id])}}" class="badge badge-info "style="margin-bottom: 20px">Edit</a>
                    <a href="{{route('admin.package.destroy',['id'=> $data -> id])}}" onclick="return confirm('Deleting !! Are you sure ?')" class="badge badge-danger "style="margin-bottom: 20px">Delete</a>
                    <div class="table-responsive">
                        <div class="col-sm-6">
                        </div>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category</th>
                                <th>Title</th>
                                <th>Keywords</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Min Quantity</th>
                                <th>Tax</th>
                                <th>Detail</th>
                                <th>Image</th>
                                <td>
                                    @if ($data->image)
                                        <img src="{{Storage::url($data->image)}}" style="height: 50px;">
                                    @endif
                                </td>
                                <th>Status</th>
                                <th>Created Date</th>
                                <th>Update Date</th>
                            </tr>
                            <tbody>
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data->category,$data->category->title) }}</td>
                                <td>{{$data->title}}</td>
                                <td>{{$data->description}}</td>
                                <td>{{$data->keywords}}</td>
                                <td>{{$data->price}}</td>
                                <td>{{$data->quantity}}</td>
                                <td>{{$data->minquantity}}</td>
                                <td>{{$data->tax}}</td>
                                <td>{{$data->detail}}</td>
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
