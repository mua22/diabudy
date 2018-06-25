<div class="breadcrumb float-left fancy">
    <ul>
        <li><a href="{{route('frontend')}}"><i class="fa fa-home"></i></a> </li>
        @foreach($category->ancestors as $ancestor)
            <li><a href="{{route('frontend.category',$ancestor->slug)}}">{{$ancestor->title}}</a></li>
        @endforeach
        @if(!isset($post))
        <li class="active"><a href="{{route('frontend.category',$category->slug)}}">{{$category->title}}</a></li>
        @else
            <li><a href="{{route('frontend.category',$category->slug)}}">{{$category->title}}</a></li>
            <li class="active"><a href="{{route('frontend.post',$post->slug)}}">{{$post->title}}</a></li>
        @endif
    </ul>
</div>