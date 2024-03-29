<nav class="navbar custom-navbar navbar-expand-lg navbar-light text-capitalize">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="{{asset('assets')}}/imgs/logo.png" alt="#"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="show-menu">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                </li>
                    <a class="nav-link" href="{{route('about')}}">about</a>
                    <a class="nav-link" href="{{route('categories')}}">Categories</a>
                    <a class="nav-link" href="#agency">travel agency</a>
                    <a class="nav-link" href="{{route('contact')}}">contact us</a>
                    <a class="nav-link" href="{{route('references')}}">References</a>
                    <a class="nav-link" href="{{route('faq')}}">FAQ</a>

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
