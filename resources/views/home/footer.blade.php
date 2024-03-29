<footer>
    <div class="container">
        <ul>
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
        </ul>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <div class="item">
                    <h4 class="text-uppercase">Contact us</h4>
                    <p class="address">
                        123 Second Street Fifth <br>
                        Avenue,<br>
                        Manhattan, New York<br>
                        +987 654 3210
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="item">
                    <h4 class="text-uppercase">additional links</h4>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Terms and conditions</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="item date">
                    <h4 class="text-uppercase">resent posts</h4>
                    <p><a href="#">01/03/2019</a></p>
                    <p><a href="#">08/05/2019</a></p>
                    <p><a href="#">01/03/2019</a></p>
                    <p><a href="#">08/05/2019</a></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="item">
                    <h4 class="text-uppercase">newsletter</h4>
                    <form>
                        <input type="text" placeholder="Name">
                        <input type="email" placeholder="Email">
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright text-center">
        <p>Copyright 2019  Design by <a href="https://html.design">Free Html Templates</a></p>
    </div>
</footer>

<script src="{{asset('assets')}}/js/jquery-3.3.1.min.js"></script>
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
<script>
    $(function () {

        'use strict';

        var winH = $(window).height();

        $('header').height(winH);

        $('header .container > div').css('top', (winH / 2) - ( $('header .container > div').height() / 2));

        $('.navbar ul li a.search').on('click', function (e) {
            e.preventDefault();
        });
        $('.navbar a.search').on('click', function () {
            $('.navbar form').fadeToggle();
        });

        $('.navbar ul.navbar-nav li a').on('click', function (e) {

            var getAttr = $(this).attr('href');

            e.preventDefault();
            $('html').animate({scrollTop: $(getAttr).offset().top}, 1000);
        });
    })
</script>
