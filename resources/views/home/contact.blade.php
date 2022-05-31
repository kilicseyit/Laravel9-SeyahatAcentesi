
@extends('layouts.frontbase')

@section('title','Contact | '.$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('content')

<div class="card-body">
    <h4 class="card-title">CONTACT FORM</h4>
    @include ('home.messages')
    <form class="forms-sample" action="{{route("storemessage")}}" method="post" >
        @csrf
        <div class="form-group">
            <input class="input"  type="text"  name="name" placeholder="Name & Surname">
        </div>
        <div class="form-group">
            <input class="input"  type="email" name="email" placeholder="E-mail">
        </div>
        <div class="form-group">
            <input class="input"  type="tel"  name="phone" placeholder="Phone Number">
        </div>
        <div class="form-group">
            <input class="input"  type="text"  name="subject" placeholder="Subject">
        </div>
        <div class="form-group">
            <textarea class="input"  type="text"  name="message" placeholder="Your Message"></textarea>
        </div>
        <div class="form-group">
            <input class="input"  type="submit" value="Send Message" >
        </div>
    </form>
</div>
<div class="row">
    <div class="side"></div>
    <div class="main" >
        <p style="white-space:pre-wrap; ">
        <div class = "product-preview__title">
            <h1 class = "h1 alt-h1 "> Contact Information</h1>
        </div>
        {!! $setting->contact !!}}
        </p>
    </div>
</div>

@endsection
