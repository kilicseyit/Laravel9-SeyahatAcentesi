@extends('layouts.frontbase')

@section('title','User Panel')

@section('content')

    <div class="card-body">
        <h4 class="card-title">User Menu</h4>
        @include('home.user.usermenu')
    </div>
    <div class="row">
        <div class="col-md-11">
            <div class="row">
                <div class="col-md-1">

                        <p style="white-space:pre-wrap; ">
                        <div class="product-preview__title">
                            <h1 class="h1 alt-h1 "> User Profile</h1>
                        </div>
                        </p>

                </div>
                <div class="col-md-10">
                    @include('profile.show')
                </div>

            </div>

        </div>

    </div>


@endsection
