@extends('layouts.adminbase')

@section('title','Edit Package : ' .$data -> title)
@section('head')

    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection




@section('content')
    <div class="main-panel">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Package:  {{$data ->title}} </h4>
                <form class="forms-sample" action="{{route('admin.package.update',['id'=> $data -> id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Parent Category</label>
                        <select class="form-control select2" name="category_id" style="color: #6a6f85";>
                            <option value="0" selected="selected">Main Package</option>
                            @foreach($datalist as $rs)
                                <option value="{{ $rs -> id }}" @if($rs->id == $data -> category_id) selected="selected" @endif >
                                    {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs -> title) }}
                                </option>
                            @endforeach
                        </select >

                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Title</label>
                        <input type="text" class="form-control" name="title" value="{{$data -> title}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Keywords</label>
                        <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDescription1">Description</label>
                        <input type="text" class="form-control" name="description" value="{{$data->description}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDescription1">Price</label>
                        <input type="number" class="form-control" name="price" value="{{$data->price}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDescription1">Quantity</label>
                        <input type="number" class="form-control" name="quantity" value="{{$data->quantity}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDescription1">Min Quantity </label>
                        <input type="number" class="form-control" name="minquantity" value="{{$data->minquantity}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDescription1">Tax %</label>
                        <input type="number" class="form-control" name="tax" value="{{$data->tax}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDescription1">Detail </label>
                        <textarea class="form-control" id='detail' name="detail">
                            {{$data->detail}}
                        </textarea>
                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#detail' ) )
                                .then( editor => {
                                    console.log( editor );
                                } )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>
                    </div>
                    <div class="input-group col-xs-12">
                        <input type="text" name="image" class="form-control file-upload-info" placeholder="Upload Image">
                        <span class="input-group-append">
                            <input type="file" name="image">
                          </span>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Status</label>
                        <select style="color: #0f6674" class="form-control"  name="status">
                            <option selected>{{$data->status}}</option>
                            <option>True</option>
                            <option>False</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Update Date</button>
                    <button class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>

        <div class="content-wrapper">
        </div>

@endsection
@section('foot')
            <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        $(function () {

            $('.textarea').summernote()
        })
        </script>
@endsection
