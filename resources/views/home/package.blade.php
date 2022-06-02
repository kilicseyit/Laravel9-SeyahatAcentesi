@extends('layouts.frontbase')

@section('title', $data->title )


@section('content')
    <style>

        .panel {
            padding: 0 18px;
            display: none;
            background-color: white;
            overflow: hidden;
        }
        *{
            margin: 0;
            padding: 0;
        }
        .rate {
            float: left;
            height: 46px;
            padding: 0 10px;
        }
        .rate:not(:checked) > input {
            position:absolute;
            top:-9999px;
        }
        .rate:not(:checked) > label {
            float:right;
            width:1em;
            overflow:hidden;
            white-space:nowrap;
            cursor:pointer;
            font-size:30px;
            color:#ccc;
        }
        .rate:not(:checked) > label:before {
            content: '★ ';
        }
        .rate > input:checked ~ label {
            color: #ffc700;
        }
        .rate:not(:checked) > label:hover,
        .rate:not(:checked) > label:hover ~ label {
            color: #deb217;
        }
        .rate > input:checked + label:hover,
        .rate > input:checked + label:hover ~ label,
        .rate > input:checked ~ label:hover,
        .rate > input:checked ~ label:hover ~ label,
        .rate > label:hover ~ input:checked ~ label {
            color: #c59b08;
        }

        .star {
            width: 32px;
            height: 32px;
            transition: .6s all;
        }

        #rating {
            cursor: pointer;
            display: inline-block
        }

        #review-form .input-group-addon {
            min-width: 100px;
        }

        #review-form .btn {
            min-width: 100px;
        }

        #review-form input[type="text"],
        #review-form textarea {
            width: 100%;
        }

        #review-form .form-group {
            margin-bottom: 15px;
        }

        #review-form .help-block {
            display: block;
            margin-top: 5px;
            margin-bottom: 10px;
        }

        blockquote {
            border-left: 5px solid rgb(238, 238, 238);
            padding-left: 20px;
        }

        blockquote .footer {
            display: block;
            font-size: 80%;
        }

        .stars-container {
            margin-bottom: 5px;
        }

        @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap');
        body {
            background: #fff;
            font-family: 'Roboto Condensed', sans-serif
        }

        .carousel-item {
            width: 100%
        }

        .price span {
            font-size: 18px
        }

        .cut {
            text-decoration: line-through;
            color: red
        }

        .icons i {
            font-size: 17px;
            color: green;
            margin-right: 2px
        }

        .offers i {
            color: green
        }

        .delivery i {
            color: blue
        }

        label.radio {
            cursor: pointer
        }

        label.radio input {
            position: absolute;
            top: 0;
            left: 0;
            visibility: hidden;
            pointer-events: none
        }

        label.radio span {
            padding: 2px 11px;
            margin-right: 3px;
            border: 1px solid #8f37aa;
            display: inline-block;
            color: #8f37aa;
            border-radius: 3px;
            text-transform: uppercase
        }

        label.radio input:checked + span {
            border-color: #8f37aa;
            background-color: #8f37aa;
            color: #fff
        }
    </style>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-5">
                @include('home.messages')
                <div class="carousel slide" data-ride="carousel" id="carousel-1">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active" style="width: 800px; height: 800px"><img
                                class="img-thumbnail w-100 d-block" src="{{Storage::url($data->image)}}"
                                alt="Slide Image" loading="lazy"></div>
                        @foreach($images as $rs)
                            <div class="carousel-item" style="width: 800px; height: 800px"><img
                                    class="img-thumbnail w-100 d-block" src="{{Storage::url($rs->image)}}"
                                    alt="Slide Image"></div>
                        @endforeach
                    </div>
                    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span
                                class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a
                            class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span
                                class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
            <div class="col-md-7">
                <h4>{{$data->title}}</h4>
                <div class="price"><span class="mr-2"><i
                            class="fa fa-rupee text-success"></i>&nbsp;{{$data->price}}</span><span
                        class="mr-2 cut">{{$data->price *1.15}}</span><span class="text-success">25% OFF</span></div>
                <div class="d-flex flex-row">
                    <div class="icons mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                            class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></div>
                    <span>1200 ratings &amp; 564 reviews</span>
                </div>
                <div class="d-flex align-items-center mt-4 offers mb-1"><i class="fa fa-check-square-o mt-1"></i><span
                        class="ml-1 font-weight-bold">{{$data->title}}</span><span style="margin-top: 17px"
                                                                                   class="ml-1">{!!$data->detail!!}</span>
                </div>
                <hr>
                <div class="d-flex align-items-center mt-2"><label class="radio"> <input type="radio" name="ram"
                                                                                         value="128GB" checked> <span>1 GÜN</span>
                    </label> <label class="radio"> <input type="radio" name="ram" value="256GB"> <span>2 GÜN</span>
                    </label> <label class="radio"> <input type="radio" name="ram" value="256GB"> <span>3 GÜN</span>
                    </label></div>
                <div><span class="font-weight-bold">Seller:</span><span class="ml-2">Sargam Electronics</span></div>
                <div class="mt-3">
                    <button class="btn btn-dark mr-2" type="button">ADD TO CART</button>
                    <button class="btn btn-success" type="button">BUY NOW</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <form class="forms-sample" action="{{route("storecomment")}}" method="post" >
            @csrf
            <input class="input" type="hidden" name="package_id" value="{{$data->id}}">
            <h2>Write Your Review</h2>
            <div class="form-group">
                <div class="input-group" href="#review">
                    <strong class="text-uppercase ">Your Rating :   </strong>
                    <div class="rate text-center">
                        <input type="radio" id="star5" name="rate" value="5" /><label for="star5" ></label>
                        <input type="radio" id="star4" name="rate" value="4" /><label for="star4"></label>
                        <input type="radio" id="star3" name="rate" value="3" /><label for="star3"></label>
                        <input type="radio" id="star2" name="rate" value="2" /><label for="star2"></label>
                        <input type="radio" id="star1" name="rate" value="1" /><label for="star1"></label>
                    </div>
                </div>
            </div>

            <h2>Your Info:</h2>
            <div class="form-group">

                <label for="name">Subject:</label>
                <input class="form-control" type="text" placeholder="Subject" name="subject" id="name" value="">
            </div>
            <div class="form-group">
                <label class="control-label" for="review">Your Review:</label>
                <textarea class="form-control" rows="10" placeholder="Your Reivew" name="review" id="review"></textarea>
                <span id="reviewInfo" class="help-block pull-right">
                            <span id="remaining">999</span> Characters remaining
                </span>
            </div>
            @auth()
                <button type="submit" class="btn btn-primary mr-2">submit</button>
                <span id="submitInfo" class="help-block">
                     By clicking <strong>Submit</strong>, I authorize the sharing of my name and review on the web. (email will not be shared)
                </span>
            @else
                <a href="/login" class="btn btn-primary btn-fw">For Submit Your Review, Please Login</a>
            @endauth
        </form>
        <h2>Read what others have said about us:</h2>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 col-md-6 col-12 pb-4">
                        <h1>Comments</h1>
                        @foreach($reviews as $rs)
                        <div class="comment mt-4 text-justify">
                            <h4>{{$rs->user->name}}</h4>
                            <span>{{$rs->created_at}}</span>
                            <br>
                            <span>User Rate : {{$rs->rate}}</span>
                            <p>{{$rs->review}}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
    </div>
    <script>
        function starsReducer(state, action) {
            switch (action.type) {
                case 'HOVER_STAR': {
                    return {
                        starsHover: action.value,
                        starsSet: state.starsSet
                    }
                }
                case 'CLICK_STAR': {
                    return {
                        starsHover: state.starsHover,
                        starsSet: action.value
                    }
                }
                    break;
                default:
                    return state
            }
        }

        var StarContainer = document.getElementById('rating');
        var StarComponents = StarContainer.children;

        var state = {
            starsHover: 0,
            starsSet: 4
        }

        function render(value) {
            for (var i = 0; i < StarComponents.length; i++) {
                StarComponents[i].style.fill = i < value ? '#f39c12' : '#808080'
            }
        }

        for (var i = 0; i < StarComponents.length; i++) {
            StarComponents[i].addEventListener('mouseenter', function () {
                state = starsReducer(state, {
                    type: 'HOVER_STAR',
                    value: this.id
                })
                render(state.starsHover);
            })

            StarComponents[i].addEventListener('click', function () {
                state = starsReducer(state, {
                    type: 'CLICK_STAR',
                    value: this.id
                })
                render(state.starsHover);
            })
        }

        StarContainer.addEventListener('mouseleave', function () {
            render(state.starsSet);
        })

        var review = document.getElementById('review');
        var remaining = document.getElementById('remaining');
        review.addEventListener('input', function (e) {
            review.value = (e.target.value.slice(0, 999));
            remaining.innerHTML = (999 - e.target.value.length);
        })

        var form = document.getElementById("review-form")

        form.addEventListener('submit', function (e) {
            e.preventDefault();
            let post = {
                stars: state.starsSet,
                review: form['review'].value,
                name: form['name'].value,
                city: form['city'].value,
                email: form['email'].value
            }

            console.log(post)
        })

        document.getElementById('submit').addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('submitForm').click();
        })


        function ReviewStarContainer(stars) {
            var div = document.createElement('div');
            div.className = "stars-container";
            for (var i = 0; i < 5; i++) {
                var svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
                svg.setAttribute('viewBox', "0 12.705 512 486.59");
                svg.setAttribute('x', "0px");
                svg.setAttribute('y', "0px");
                svg.setAttribute('xml:space', "preserve");
                svg.setAttribute('class', "star");
                var svgNS = svg.namespaceURI;
                var star = document.createElementNS(svgNS, 'polygon');
                star.setAttribute('points', '256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566');
                star.setAttribute('fill', i < stars ? '#f39c12' : '#808080');
                svg.appendChild(star);
                div.appendChild(svg);
            }
            return div;
        }

        function ReviewContentContainer(name, city, review) {

            var reviewee = document.createElement('div');
            reviewee.className = "reviewee footer";
            reviewee.innerHTML = '- ' + name + ', ' + city

            var comment = document.createElement('p');
            comment.innerHTML = review;

            var div = document.createElement('div');
            div.className = "review-content";
            div.appendChild(comment);
            div.appendChild(reviewee);

            return div;
        }

        function ReviewsContainer(review) {
            var div = document.createElement('blockquote');
            div.className = "review";
            div.appendChild(ReviewStarContainer(review.stars));
            div.appendChild(ReviewContentContainer(review.name, review.city, review.review));
            return div;
        }

        for (var i = 0; i < reviews.reviews.length; i++) {
            document.getElementById('review-container').appendChild(ReviewsContainer(reviews.reviews[i]))
        }
    </script>
@endsection



