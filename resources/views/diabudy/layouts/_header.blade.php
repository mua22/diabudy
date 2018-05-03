<header id="header" class="header-light">
    <div id="header-wrap">
        <div class="container">

            <!--LOGO-->
            <div id="logo">
                <a href="/" class="logo" data-dark-logo="/diabudy/images/logo-dark.png">
                    <img src="/diabudy/images/logo.png" alt="Polo Logo">
                </a>
            </div>
            <!--END: LOGO-->

            <!--MOBILE MENU -->
            <div class="nav-main-menu-responsive">
                <button class="lines-button x">
                    <span class="lines"></span>
                </button>
            </div>
            <!--END: MOBILE MENU -->

            <!--SHOPPING CART -->
            {{--<div id="shopping-cart">
                <span class="shopping-cart-items">8</span>
                <a href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
            </div>--}}
            <!--END: SHOPPING CART -->


            <div id="top-search"> <a id="top-search-trigger"><i class="fa fa-search"></i><i class="fa fa-close"></i></a>
                <form action="{{route('frontend.submitSearch')}}" method="post">
                    @csrf
                    <input type="text" name="term" class="form-control" value="" placeholder="Start typing & press  &quot;Enter&quot;">
                </form>
            </div>

            <!--NAVIGATION-->
            <div class="navbar-collapse collapse main-menu-collapse navigation-wrap">
                <div class="container">
                    <nav id="mainMenu" class="main-menu mega-menu">
                        <ul class="main-menu nav nav-pills">
                            <li><a href="/"><i class="fa fa-home"></i></a>
                            </li>
                            <li class="dropdown"> <a href="#">Diabetes <i class="fa fa-angle-down"></i> </a>
                                <ul class="dropdown-menu">
                                    @foreach($menuCategories as $headerCategory)
                                        @if(count($headerCategory->children)<1)
                                            <li><a href="{{route('frontend.category',$headerCategory->slug)}}">{{$headerCategory->title}}</a></li>
                                        @else
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">{{$headerCategory->title}}</span>
                                                <ul class="dropdown-menu" style="">
                                                    @foreach($headerCategory->children as $headerChild)
                                                        <li><a href="{{route('frontend.category',$headerChild->slug)}}">{{$headerChild->title}}</a></li>

                                                    @endforeach

                                                </ul>
                                            </li>
                                        @endif
                                    @endforeach


                                </ul>
                            </li>
                            <li><a href="{{route('frontend.category','prediabetes')}}">PreDiabetes</a></li>
                            <li><a href="{{route('frontend.category','type-1')}}">Type 1</a></li>
                            <li><a href="{{route('frontend.category','type-2')}}">Type 2</a></li>
                            <li><a href="/about-us">About Us<span class="label label-danger infinit">HOT</span></a></li>
                            <li><a href="{{route('frontend.page','submit-article')}}">Submit Article<span class="label label-danger infinit">HOT</span></a></li>
                            @guest
                                <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                                {{--<li><a class="nav-link" href="{{ route('login.facebook') }}">Facebook Login</a></li>--}}
                                <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                            @else
                                <li class="dropdown"><a href="/my">My Buddy <i class="fa fa-user"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/my/logbook">My LogBook <i class="fa fa-bars"></i></a></li>
                                    </ul>
                                </li>
                                @role('admin')
                                <li><a href="/backend">BackEnd</a></li>
                            @endrole
                                <li>
                                    <a href="{{ route('logout') }}" id="logout-button">

                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                        {{method_field('POST')}}
                                    </form>
                                </li>
                            @endguest

                        </ul>
                    </nav>
                </div>
            </div>
            <!--END: NAVIGATION-->
        </div>
    </div>
</header>