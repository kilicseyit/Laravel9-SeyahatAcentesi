@extends('layouts.adminbase')

@section('title','Add Category')




@section('content')
    <div class="main-panel">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Category Elements</h4>
                <p class="card-description"> Basic form layout </p>
                <form class="forms-sample" action="/admin/category/store" method="get">
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
                        <label for="exampleFormControlSelect2">Status</label>
                        <select style="color: #0f6674" class="form-control"  name="status">
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
