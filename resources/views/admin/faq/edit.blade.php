@extends('layouts.adminbase')

@section('title','Edit FAQ : ' .$data -> title)
@section('head')

    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <div class="main-panel">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit FAQ:  {{$data ->title}} </h4>
                <form class="forms-sample" action="{{route('admin.faq.update',['id'=> $data -> id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">Question</label>
                        <input type="text" class="form-control" name="question" value="{{$data -> question}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDescription1">Answer </label>
                        <textarea class="form-control" id='answer' name="answer">
                            {{$data->answer}}
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
