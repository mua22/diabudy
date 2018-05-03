@extends('diabudy.layouts.childmaster')

@section('child-content')
    <div class="text-center">
        @include('diabudy.layouts._category_breadcrumb',['category'=>$post->category,'post'=>$post])
    </div>
    <div id="" class="">
        <div class="post-item">
            <div class="post-item-wrap">
                <div class="post-item-description">
                    <h2>{{$post->title}}</h2>

                    {{$post->content}}

                </div>
            </div>
        </div>
    </div>

@endsection

@section('child-sidebar')
    @if(count($post->category->children)>0)
    <div class="widget clearfix widget-categories">
        <h4 class="widget-title">{{$post->category->title}}<br> Sub Categories</h4>
        <ul class="list list-arrow-icons">
            @foreach($post->category->children as $child)
                <li> <a title="" href="{{route('frontend.category',$child->slug)}}">{{$child->title}} </a> </li>
            @endforeach


        </ul>
    </div>
    @endif
    <div class="widget clearfix widget-blog-articles">
        <h4 class="widget-title">More Articles from {{$post->category->title}}</h4>

        <ul class="list-posts list-medium">
            @foreach($post->category->posts as $p)
                <li>
                    <a href="{{route('frontend.post',$p->slug)}}">{{$p->title}}</a>
                    <small>{{$post->created_at->diffForHumans()}}</small>
                </li>
                @endforeach
            <li><a href="#">Printing and typesetting</a>
                <small>Jun 18 2015</small>
            </li>
            <li><a href="#">Lorem Ipsum has been the industry's</a><small>Jun 18 2015</small>
            </li>
            <li><a href="#">Ipsum and typesetting</a><small>Jun 18 2015</small>
            </li>
            <li><a href="#">Specimen book</a><small>Jun 18 2015</small>
            </li>

        </ul>
    </div>
    @endsection