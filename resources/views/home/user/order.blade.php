@extends('layouts.frontbase')

@section('title','Order Page')

@section('content')

    <div class="card-body">
        <h4 class="card-title">ORDER FORM</h4>
        @include ('home.messages')
        <form class="forms-sample" action="{{route("shopcart.storeorder")}}" method="post">
            @csrf
            <div class="form-group">
                <input class="input" type="text" name="name"  value="{{Auth::user()->name}}" placeholder="Name & Surname" required>
            </div>
            <div class="form-group">
                <input class="input" type="number" name="phone" placeholder="Phone Number" required>
            </div>
            <div class="form-group">
                <input class="input" type="tel" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input class="input" type="text" name="address" placeholder="Address" required>
            </div>
    </div>
    <div class="col md-6">
        <div class="side"></div>
        <div class="main">
            <p style="white-space:pre-wrap; ">
            <div class="product-preview__title">
                <h1 class="h1 alt-h1 "> Payment Information [${{$total}}]</h1>
            </div>
            <div class="form-group">
                <input class="input"  type="hidden" name="total" value="{{$total}}">
            </div>
            <div class="form-group">
                <input class="input" type="tel" name="holder" placeholder="Card Holder">
            </div>
            <div class="form-group">
                <input class="input" type="number" name="number" placeholder="Card Number">
            </div>

            <div class="form-group">
                <input class="input" type="text" name="date" placeholder="Exp. Date">
            </div>
            <div class="form-group">
                <textarea class="input" type="text" name="code" placeholder="Security Code"></textarea>
            </div>
            <div class="cart_buttons">
                <button type="submit" class="button cart_button_clear">Complate Order</button>
            </div>
            </p>
        </div>
    </div>
    </form>
@endsection
