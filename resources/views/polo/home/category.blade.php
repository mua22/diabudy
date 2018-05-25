@extends('polo.layouts.master-both-sidebars')

@section('center')
    <div class="text-center">
        @include('diabudy.layouts._category_breadcrumb',compact('category'))
    </div>
    <div id="" class="">
        <div class="post-item">
            <div class="post-item-wrap">
                <div class="post-item-description">
                    <h2>{{$category->title}}</h2>

                    {{$category->description}}

                </div>
            </div>
        </div>
    </div>

    @include('diabudy.home._posts',compact('posts'))
@endsection

@section('sidebar-left')
    <div class="widget clearfix widget-categories">
        <h4 class="widget-title"><a href="{{route('frontend.category.create',$category->slug)}}">Submit Article For: {{$category->title}}</a></h4>

    </div>
    @if(count($category->children)>0)
    <div class="widget clearfix widget-categories">
        <h4 class="widget-title">{{$category->title}}<br> Sub Categories</h4>
        <ul class="list list-arrow-icons">
            @foreach($category->children as $child)
                <li> <a title="" href="{{route('frontend.category',$child->slug)}}">{{$child->title}} </a> </li>
            @endforeach


        </ul>
    </div>
    @endif
    @endsection