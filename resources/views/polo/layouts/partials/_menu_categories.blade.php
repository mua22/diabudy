@foreach($categories as $headerCategory)
    @if(count($headerCategory->children)<1)
        <li><a href="{{route('frontend.category',$headerCategory->slug)}}">{{$headerCategory->title}}</a></li>
    @else
        <li class="dropdown-submenu"><span class="dropdown-menu-title-only">{{$headerCategory->title}}</span>
            <ul class="dropdown-menu" style="">
                @include('polo.layouts.partials._menu_categories',['categories'=>$headerCategory->children])
                {{--@foreach($headerCategory->children as $headerChild)--}}
                    {{--<li><a href="{{route('frontend.category',$headerChild->slug)}}">{{$headerChild->title}}</a></li>--}}

                {{--@endforeach--}}

            </ul>
        </li>
    @endif
@endforeach