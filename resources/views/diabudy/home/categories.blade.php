<section class="content">
    <div class="container">
        <!-- Blog post-->
        <div class="grid-layout post-3-columns m-b-30 grid-loaded">
            @foreach($categories as $category)
                <div class="post-item">
                    <div class="post-content-details">
                        <div class="post-title">
                            <h3><a href="{{route('frontend.category',$category->slug)}}">{{$category->title}}</a></h3>
                        </div>
                        <div class="post-description">
                            <p>
                                {{$category->description}}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>