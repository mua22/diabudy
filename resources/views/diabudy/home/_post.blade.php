<div class="post-item">
    <div class="post-item-wrap">
        <div class="post-content-details">
            <div class="post-title">
                <h3><a href="{{route('frontend.post',$post->slug)}}">{{$post->title}}</a></h3>

            </div>
            <div class="post-info">
                <span class="post-autor">Post by: <a href="#">{{$post->author->name}}</a></span>
                <span class="post-category">in <a href="{{route('frontend.category',$post->category->slug)}}">{{$post->category->title}}</a></span>
            </div>
            <div class="post-description">
                @if(!isset($details))
                <p>{{str_limit($post->content,700) }}</p>
                    <div class="post-read-more">
                        <a href="{{route('frontend.post',$post->slug)}}" class="read-more">Read More <i class="fa fa-long-arrow-right"></i></a>

                    </div>
                @else
                    <p>{{$post->content }}</p>
                    @endif

            </div>
            <div class="post-meta">
                <div class="post-date">
                    <span class="post-date-day">{{$post->created_at->format('d')}}</span>
                    <span class="post-date-month">{{$post->created_at->format('M')}}</span>
                    <span class="post-date-year">{{$post->created_at->format('y')}}</span>
                </div>

                <div class="post-comments">
                    <a href="#">
                        <i class="fa fa-comments-o"></i>
                        <span class="post-comments-number">0</span>
                    </a>
                </div>

            </div>


        </div>
    </div>
</div>