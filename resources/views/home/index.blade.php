
@extends('layouts.frontbase')

@section('title', 'Travel agency Project ')

@section('content')
    <div class="about-us" id="about">
        <div class="small-container">
            <h2 class="text-center">Winter <span>Holiday</span></h2>
            <p class="text-center">as opposed to using 'Content here, content here', making it look lik</p>
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-12 text-center">
                            <div class="item">
                                <img src="assets/imgs/img2.jpg">
                                <h5 class="text-uppercase">Restaurants</h5>
                            </div>
                            <div class="item">
                                <img src="assets/imgs/img1.jpg">
                                <h5 class="text-uppercase">where to stay</h5>
                            </div>
                            <div class="item">
                                <img src="assets/imgs/img4.jpg">
                                <div>
                                    <h5 class="text-uppercase">Sightseeing</h5>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="assets/imgs/img3.jpg">
                                <h5 class="text-uppercase">shops and boutiques</h5>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 text-right">
                            <h4 class="text-uppercase">Engoy <span>holiday</span></h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like</p>
                            <button class="text-center"><a href="#" class="text-capitalize">book now</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="first"></div>
            <div class="second"></div>
        </div>
    </div>

    <div class="services" id="service">
        <div class="container">
            <h2 class="text-capitalize">Enjoy <span>Resort</span></h2>
            <p>It is a long established fact that a reader will be distracted by the readable content of a o</p>
        </div>
        <div class="small-container">
            <div id="slideToNext" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/imgs/pic4.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/imgs/pic3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/imgs/pic2.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#slideToNext" role="button" data-slide="prev">
                    <i class="fas fa-chevron-left fa-2x"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#slideToNext" role="button" data-slide="next">
                    <i class="fas fa-chevron-right fa-2x"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <div class="agency" id="agency">
        <div class="white-overlay">
            <div class="container">
                <div>
                    <img src="assets/imgs/airplane.png">
                    <div>
                        <img src="assets/imgs/pic1.png">
                        <h2 class="text-center text-uppercase">Enjoy <br> All <br> World</h2>
                    </div>
                    <img src="assets/imgs/airplane.png">
                </div>
                <p class="text-center">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look likeIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as o</p>
            </div>
        </div>
    </div>

    <div class="statistics text-capitalize text-center font-weight-bold">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <i class="fas fa-umbrella-beach fa-3x"></i>
                    <h3>425</h3>
                    <p>Tourists</p>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <i class="fas fa-birthday-cake fa-3x"></i>
                    <h3>125</h3>
                    <p>years</p>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <i class="fa fa-home fa-3x"></i>
                    <h3>325</h3>
                    <p>cottages</p>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <i class="fas fa-glass-cheers fa-3x"></i>
                    <h3>120</h3>
                    <p>restaurants</p>
                </div>
            </div>
        </div>
    </div>

    <div class="contact" id="contact">
        <div class="violet-overlay">
            <div class="container">
                <h2 class="text-center">Get in touch</h2>
                <div class="contact-form">
                    <form>
                        <input type="text" placeholder="Name">
                        <input type="email" placeholder="Email">
                        <input type="text" placeholder="Phone">
                        <textarea placeholder="Message"></textarea>
                        <input type="submit" value="SEND">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
