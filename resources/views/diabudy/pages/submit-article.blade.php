@extends('diabudy.layouts.master')

@section('content')
<h1>Diabudy Article Submission Guidelines</h1>
    <p>Diabudy is a plateform for diabetics so we will only articles which are
        medically relevant    to diabetes. You can submit articles in any
        category, as shown in picture below,from left sidebar after browsing the category
        or you can use links from below.

    </p>
<div class="portfolio-image effect social-links" style="padding: 2px;border: 1px dashed darkgray;margin-bottom: 20px">
    <img src="/diabudy/images/submit-article.png" alt="">
    <div class="image-box-content">
        <p>
            <a href="/diabudy/images/submit-article.png" data-lightbox-type="image" title="Diabetes Article Submission"><i class="fa fa-expand"></i></a>

        </p>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <h2>Diabetes Categories to Submit Articles</h2>
        <ul>
            @foreach($categories as $category)
                <li><a href="{{route('frontend.category.submit',$category->slug)}}">{{$category->title}}</a>
                    @if(count($category->children)>0)
                        <ul>
                            @foreach($category->children as $cat)
                                <li><a href="{{route('frontend.category.submit',$cat->slug)}}">{{$cat->title}}</a>
                                    @if(count($cat->children)>0)
                                        <ul>
                                            @foreach($cat->children as $cat1)
                                                <li><a href="{{route('frontend.category.submit',$cat1->slug)}}">{{$cat1->title}}</a></li>

                                            @endforeach
                                        </ul>
                                    @endif
                                </li>

                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
    <div class="col-md-6">
        <h2>Submission Process</h2>
        <p>
            Submission Process is simle
        <ul>
            <li>Login and navigate to your desire category</li>
            <li>Go to Submit Article Link</li>
            <li>Write your Article and sumit</li>
            <li>We Will Review it. Review Process may take 2-3 days after your submission and would publish it</li>
            <li>You cannot edit after submission. However you can withdraw edit and resubmit</li>
        </ul>
        </p>
    </div>
</div>

@endsection
