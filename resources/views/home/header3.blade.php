<nav class="navbar custom-navbar navbar-expand-lg navbar-light text-capitalize" >
    <div class="row" style="margin-left: 70px">
        <div class="col-md-1">
            <a class="navbar-brand" href="/"><img src="{{asset('assets')}}/imgs/logo.png" alt="#"/></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse col-md-11" id="show-menu">
            <ul class="navbar ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                </li>
                <div class="dropdown" href="{{route('categories')}}">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="">
                        <h6 class="dropdown-header" href="">Settings</h6>
                        <a class="dropdown-item" href="{{route('categories')}}">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
                <li>
                    <a class="nav-link" href="{{route('about')}}">about</a>
                </li>
                <li>
                    <a class="dropdown-toggle" href="{{route('categories')}}" target="_parent">Categories</a>
                    <ul class="dropdown">
                        <li class="nav-item">
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2" style="">
                                <a class="dropdown-item"> asdasdd</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-link" href="#agency">travel agency</a>
                </li>
                <li>
                    <a class="nav-link" href="{{route('contact')}}">contact us</a>
                </li>
                <li>
                    <a class="nav-link" href="{{route('references')}}">References</a>
                </li>
                <li>
                    <a class="nav-link" href="{{route('faq')}}">FAQ</a>
                </li>
            </ul>
            <ul class="navbar ">
                <li class="nav-item .search-container">
                    <a class="nav-link search" href="#"><i class="fas fa-search"></i></a>
                    <form>
                        <input type="search">
                    </form>
                </li>

                <a class="nav-link" href="/registeruser"><i class="far fa-user"></i></a>
                <a class="nav-link" href="/loginuser"><i class="far fa-user"></i></a>
                <a class="nav-link" href="/logoutuser"><i class="far fa-user"></i></a>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="far fa-heart"></i></a>
                </li>
            </ul>


    </div>
</nav>

<header id="home">
    <div class="overlay">
        <div class="container">
            <div>
                <h1><span>Amazing</span><br>Santorini 10 Days Tour</h1>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                    looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters, as</p>
                <button><a href="{{route('package', ['id'=>7])}}" class="text-uppercase">book now</a></button>
            </div>
        </div>
    </div>
</header>
