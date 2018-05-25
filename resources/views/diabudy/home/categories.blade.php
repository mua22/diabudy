<section class="content">

        <!-- Blog post-->
        <div class="isotope" data-isotope-item-space="3" data-isotope-col="4" data-isotope-item=".post-item">
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

</section>