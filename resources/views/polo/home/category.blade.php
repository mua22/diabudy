@extends('polo.layouts.sidebar')

@section('center')
    <div class="page-title">
        <h1>{{$category->title}}</h1>
    </div>
    @include('polo.layouts.partials._category_breadcrumb',compact('category'))


    @include('polo.home.partials._posts',compact('posts'))
@endsection

@section('sidebar')
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