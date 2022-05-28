
@extends('layouts.frontbase')

@section('title', 'Travel agency Project ')

@section('content')
    <br>
    <br>
    <br>

    <section id="gallery">
        <div class="container">
            <div class="row">
                @foreach($category->packages as $rs)
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <a href="{{route('package', ['id'=>$rs->id])}}" ><img src="{{Storage::url($rs->image)}}" width="350" height="300" alt="" class="card-img-top"></a>
                            <div class="card-body">
                                <h5 class="card-title">{{$rs->title}}</h5>
                                <p class="card-text">{{$rs->description}}</p>
                                <a href="{{route('categorypackages', ['id'=>$rs->id, 'slug'=>$rs->title])}}" class="btn btn-outline-success btn-sm">Read More</a>
                                <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
