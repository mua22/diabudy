@extends('polo.layouts.sidebar')

@section('center')
    <div class="text-center">
        @include('polo.layouts.partials._category_breadcrumb',['category'=>$post->category,'post'=>$post])
    </div>
    @include('polo.home.partials._single_post',['post'=>$post,'details'=>true])

@endsection

@section('sidebar')
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

        </ul>
    </div>
    @endsection