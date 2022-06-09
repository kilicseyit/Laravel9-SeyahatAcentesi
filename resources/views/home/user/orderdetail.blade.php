@extends('layouts.frontbase')

@section('title','User Order Detail')

@section('content')
    <style>
        * {
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
            text-shadow: rgba(0, 0, 0, .01) 0 0 1px
        }

        body {
            font-family: 'Rubik', sans-serif;
            font-size: 14px;
            font-weight: 400;
            background: #E0E0E0;
            color: #000000
        }

        ul {
            list-style: none;
            margin-bottom: 0px
        }

        .button {
            display: inline-block;
            background: #0e8ce4;
            border-radius: 5px;
            height: 48px;
            -webkit-transition: all 200ms ease;
            -moz-transition: all 200ms ease;
            -ms-transition: all 200ms ease;
            -o-transition: all 200ms ease;
            transition: all 200ms ease
        }

        .button a {
            display: block;
            font-size: 18px;
            font-weight: 400;
            line-height: 48px;
            color: #FFFFFF;
            padding-left: 35px;
            padding-right: 35px
        }

        .button:hover {
            opacity: 0.8
        }

        .cart_section {
            width: 100%;
            padding-top: 93px;
            padding-bottom: 111px
        }

        .cart_title {
            font-size: 30px;
            font-weight: 500
        }

        .cart_items {
            margin-top: 8px
        }

        .cart_list {
            border: solid 1px #e8e8e8;
            box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
            background-color: #fff
        }

        .cart_item {
            width: 100%;
            padding: 15px;
            padding-right: 46px
        }

        .cart_item_image {
            width: 133px;
            height: 133px;
            float: left
        }

        .cart_item_image img {
            max-width: 100%
        }

        .cart_item_info {
            width: calc(100% - 133px);
            float: left;
            padding-top: 18px
        }

        .cart_item_name {
            margin-left: 7.53%
        }

        .cart_item_title {
            font-size: 14px;
            font-weight: 400;
            color: rgba(0, 0, 0, 0.5)
        }

        .cart_item_text {
            font-size: 18px;
            margin-top: 35px
        }

        .cart_item_text span {
            display: inline-block;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            margin-right: 11px;
            -webkit-transform: translateY(4px);
            -moz-transform: translateY(4px);
            -ms-transform: translateY(4px);
            -o-transform: translateY(4px);
            transform: translateY(4px)
        }

        .cart_item_price {
            text-align: right
        }

        .cart_item_total {
            text-align: right
        }

        .order_total {
            width: 100%;
            height: 60px;
            margin-top: 30px;
            border: solid 1px #e8e8e8;
            box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
            padding-right: 46px;
            padding-left: 15px;
            background-color: #fff
        }

        .order_total_title {
            display: inline-block;
            font-size: 14px;
            color: rgba(0, 0, 0, 0.5);
            line-height: 60px
        }

        .order_total_amount {
            display: inline-block;
            font-size: 18px;
            font-weight: 500;
            margin-left: 26px;
            line-height: 60px
        }

        .cart_buttons {
            margin-top: 60px;
            text-align: right
        }

        .cart_button_clear {
            display: inline-block;
            border: none;
            font-size: 18px;
            font-weight: 400;
            line-height: 48px;
            color: rgba(0, 0, 0, 0.5);
            background: #FFFFFF;
            border: solid 1px #b2b2b2;
            padding-left: 35px;
            padding-right: 35px;
            outline: none;
            cursor: pointer;
            margin-right: 26px
        }

        .cart_button_clear:hover {
            border-color: #0e8ce4;
            color: #0e8ce4
        }

        .cart_button_checkout {
            display: inline-block;
            border: none;
            font-size: 18px;
            font-weight: 400;
            line-height: 48px;
            color: #FFFFFF;
            padding-left: 35px;
            padding-right: 35px;
            outline: none;
            cursor: pointer;
            vertical-align: top
        }
    </style>
    <div class="card-body">
        <h4 class="card-title">User Order Detail</h4>
        @include('home.user.usermenu')
    </div>
    <div class="row">
        <div class="col-md-11">
            <div class="row">
                <div class="col-md-1">
                    <p style="white-space:pre-wrap; ">
                    <div class="product-preview__title">
                        <h1 class="h1 alt-h1 "> User Order Detail</h1>
                    </div>
                    </p>
                </div>
                <div class="cart_section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="cart_container">
                                    <table class="shopping-cart-table table">
                                        <tr>
                                            <th>Name :</th>
                                            <td>{{$order->name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Phone :</th>
                                            <td>{{$order->phone}}</td>
                                        </tr>
                                        <tr>
                                            <th>Email :</th>
                                            <td>{{$order->email}}</td>
                                        </tr>
                                        <tr>
                                            <th>Address :</th>
                                            <td>{{$order->address}}</td>
                                        </tr>
                                        <tr>
                                            <th>Note :</th>
                                            <td>{{$order->note}}</td>
                                        </tr>
                                        <tr>
                                            <th>Status :</th>
                                            <td>{{$order->status}}</td>
                                        </tr>


                                    </table>
                                    <div class="cart_title">Order Detail Cart<small></small></div>
                                    <div class="cart_items">
                                        <ul class="cart_list">
                                            @foreach($orderpackages as $rs)
                                                <li class="cart_item clearfix">
                                                    <div class="cart_item_image"><img
                                                            src="{{Storage::url($rs->package->image)}}" alt=""></div>
                                                    <div
                                                        class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                                        <div class="cart_item_name cart_info_col">
                                                            <div class="cart_item_title">Name</div>
                                                            <div class="cart_item_text">{{$rs->package->title}}</div>
                                                        </div>
                                                        <div class="cart_item_quantity cart_info_col">
                                                            <div class="cart_item_title">Quantity</div>
                                                            {{$rs->quantity}}

                                                        </div>
                                                        <div class="cart_item_price cart_info_col">
                                                            <div class="cart_item_title">Price</div>
                                                            <div class="cart_item_text">{{$rs->package->price}}</div>
                                                        </div>
                                                        <div class="cart_item_price cart_info_col">
                                                            <div class="cart_item_title">Total</div>
                                                            <div class="cart_item_text">{{$rs->amount}}</div>
                                                        </div>
                                                        <td>
                                                            <a href="#"
                                                               onclick="return confirm('Deleting !! Are you sure ?')">
                                                                <button type="button" class="btn btn-danger">Delete
                                                                </button>
                                                            </a>
                                                        </td>
                                                    </div>
                                                    @endforeach

                                                </li>
                                        </ul>
                                    </div>
                                    <div class="order_total">
                                        <div class="order_total_content text-md-right">
                                            <div class="order_total_title">Order Total:</div>
                                            <div class="order_total_amount">{{$order->total}}</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
