<div class="post-item border shadow" style="padding: 0px 20px 20px 0px;">
    <div class="post-item-wrap">
        <div class="post-item-description">
            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{$post->created_at->format('M d, Y')}}</span>
            {{--<span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>--}}
            <span class="post-meta-category"><i class="fa fa-tag"></i>
                @foreach($post->tags as $tag)
                    <a href="{{route('frontend.tag',$tag->slug)}}">{{$tag->title}}</a>,
                @endforeach
            </span>

            <span class="post-meta-share float-right">
                <a class="btn btn-xs btn-slide btn-facebook" target="_blank" href="http://www.facebook.com/sharer.php?u={{route('frontend.post',$post->slug)}}">
                    <i class="fa fa-facebook"></i>
                    <span>Facebook</span>
                </a>
                <a class="btn btn-xs btn-slide btn-twitter" target="_blank" href="http://twitter.com/share?text={{$post->title}}&url={{route('frontend.post',$post->slug)}}" data-width="100">
                    <i class="fa fa-twitter"></i>
                    <span>Twitter</span>
                </a>

                <a class="btn btn-xs btn-slide btn-googleplus" target="_blank" href="mailto:?subject=[{{$post->title}}]&body=Check out this site {{route('frontend.post',$post->slug)}}" data-width="80">
                    <i class="fa fa-envelope"></i>
                    <span>Mail</span>
                </a>
            </span>
            <h2><a href="{{route('frontend.post',$post->slug)}}">{{$post->title}}</a></h2>
            @if(!isset($details))
                <p>{{str_limit($post->content,100) }}</p>

                    <a href="{{route('frontend.post',$post->slug)}}" class="item-link">Read More <i class="fa fa-long-arrow-right"></i></a>


            @else
                {{--<p>{{$post->content }}</p>--}}
                <p>{!! $post->content !!}</p>
            @endif
            <div class="post-author"><p>by <a href="{{route('frontend.author',$post->author->slug)}}">{{$post->author->name}}</a> {{$post->created_at->diffForHumans()}}</p></div>



        </div>
    </div>
</div>