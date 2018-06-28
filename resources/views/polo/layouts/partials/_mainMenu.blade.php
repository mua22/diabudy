<div id="mainMenu">
    <div class="container">
        <nav>
            <ul>
                <li><a href="/"><i class="fa fa-home"></i></a></li>

                <li class="dropdown"><a href="#">Diabetes</a>
                    <ul class="dropdown-menu">
                        {{--                    {!! menu_categories($menuCategories) !!}--}}
                        @include('polo.layouts.partials._menu_categories',['categories'=>$menuCategories])
                    </ul>
                </li>
                <li><a href="{{route('diary.index')}}"><i class="fa fa-book"></i>Diary</a></li>
                <li><a href="{{route('logbook.index')}}"><i class="fa fa-bars"></i>LogBook</a></li>
                {{--                            <li><a href="{{route('frontend.category','prediabetes')}}">PreDiabetes</a></li>--}}
                {{--<li><a href="{{route('frontend.category','type-1')}}">Type 1</a></li>--}}
                {{--<li><a href="{{route('frontend.category','type-2')}}">Type 2</a></li>--}}
                <li><a href="{{route('frontend.page','submit-article')}}">Submit Article</a></li>
                <li><a href="/about-us">About Us</a></li>

                 <!--Osama Inayat Changes Starts Here -->
                    <li> <a href="{{ route('all.questions') }}">Explore Questions?</a></li>
                    <!-- Changes Ends Here -->
                    @guest
                    <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>                 
                    <li><a class="nav-link"href="route('register')">Register</a></li> 
                @else

                @endguest
            </ul>
        </nav>
    </div>
</div>