
@php
    $mainCategories = \App\Http\Controllers\HomeController::maincategorylist()
@endphp
<div class="main-header">
    <div class="container">
        <div class="logo-wrap" itemprop="logo">
        </div>
        <div class="nav-wrap">
            <nav class="nav-desktop">
                <ul class="menu-list">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('about')}}">About</a></li>
                    <li class="menu-parent">Categories
                        <ul class="sub-menu">
                            @foreach($mainCategories as $rs)
                                <li class="menu-parent"><a href="{{route('categorypackages', ['id'=>$rs->id, 'slug'=>$rs->title])}}">{{$rs->title}}</a>
                                    @if(count($rs->children))
                                        @include('home.categorytree',['children' => $rs->children])
                                    @endif
                                    @endforeach
                                </li>
                        </ul>
                    </li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                    <li><a href="{{route('faq')}}">FAQ</a></li>
                    <li><a href="{{route('references')}}">References</a></li>
                    <li class="menu-parent" > <a href="/userpanel"><i class="far fa-user"></i></a>
                        <ul class="sub-menu">
                            <li><a href="/registeruser">Register</a></li>
                            <li><a href="/loginuser">Login</a></li>
                            <li><a href="/logoutuser">Log Out</a></li>
                        </ul>
                    </li>
                    <li class="nav-item .search-container">
                        <a class="nav-link search" href="{{route('contact')}}"><i class="fas fa-search"></i></a>
                        <form>
                            <input type="search">
                        </form>
                    </li>
                </ul>
            </nav>
            <div id="bar">
                <i class="fas fa-bars"></i>
            </div>
            <div id="close">
                <i class="fas fa-times"></i>
            </div>
        </div>
    </div>
</div>

