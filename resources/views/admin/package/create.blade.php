@extends('layouts.adminbase')

@section('title','Package Category')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <div class="main-panel">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Package Elements</h4>
                <p class="card-description"> Basic form layout </p>

                <div class="form-group">
                    <label>Parent Category</label>

                <form class="forms-sample" action="{{route('admin.package.store')}}" method="post" enctype="multipart/form-data">
                    <select class="form-control select2" name="category_id" style="color: #6a6f85";>
                        @foreach($data as $rs)
                            <option value="{{$rs->id}}"> {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}} </option>
                        @endforeach
                    </select>

                </div>
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Keywords</label>
                        <input type="text" class="form-control" name="keywords" placeholder="Keywords">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDescription1">Description</label>
                        <input type="text" class="form-control" name="description" placeholder="description">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDescription1">Price</label>
                        <input type="number" class="form-control" name="price" value="0">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDescription1">Quantity</label>
                        <input type="number" class="form-control" name="quantity" value="0">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDescription1">Min Quantity </label>
                        <input type="number" class="form-control" name="minquantity" value="0">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDescription1">Tax %</label>
                        <input type="number" class="form-control" name="tax" value="0">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDescription1">Detail </label>
                        <textarea class="form-control" id="detail" name="detail">
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

                    <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="image" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" name="image" class="form-control file-upload-info" placeholder="Upload Image">
                            <span class="input-group-append">
                            <input type="file" name="image">
                          </span>
                        </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Status</label>
                        <select style="color: #6a6f85" class="form-control"  name="status">
                            <option>True</option>
                            <option>False</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Save</button>
                    <button class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>

        <div class="content-wrapper">
        </div>

@endsection


