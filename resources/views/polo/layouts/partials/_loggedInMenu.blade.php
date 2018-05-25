<div class="page-menu menu-lines menu-line-bottom">
    <div class="container">
        <div class="menu-title">My <span>Buddy</span></div>
        <nav>
            <ul>

                <li><a href="/my/logbook"><i class="fa fa-bars"></i>My LogBook </a></li>
                <li><a href="{{route('diary.index')}}"><i class="fa fa-book"></i>My Diary </a></li>
                <li><a href="{{route('articles.index')}}"><i class="fa fa-sticky-note"></i>My Submitted Articles </a></li>
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
            </ul>
        </nav>

        <div id="menu-responsive-icon">
            <i class="fa fa-reorder"></i>
        </div>

    </div>
</div>