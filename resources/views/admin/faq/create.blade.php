@extends('layouts.adminbase')

@section('title','FAQ Category')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <div class="main-panel">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">FAQ Elements</h4>
                <p class="card-description"> Basic form layout </p>

                <form class="forms-sample" action="{{route('admin.faq.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">Question</label>
                        <input type="text" class="form-control" name="question" placeholder="question">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDescription1">Answer</label>
                        <textarea class="form-control" id="answer" name="answer">
                        </textarea>
                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#answer' ) )
                                .then( editor => {
                                    console.log( editor );
                                } )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>
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


