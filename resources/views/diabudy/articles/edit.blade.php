@extends('diabudy.layouts.master')
@section('page-title')

@endsection
@section('content')
    <div class="page-menu menu-colored-background">
        <div class="container">
            <div class="menu-title">Page Menu <span>Options</span></div>
            <nav>
                <ul>
                    <li><a href="page-menu.html">Rounded</a> </li>
                    <li><a href="page-menu-outline.html">Outline</a> </li>
                    <li><a href="page-menu-lines.html">Lines</a> </li>
                    <li><a href="page-menu-classic.html">Classic</a> </li>
                    <li><a href="page-menu-line-bottom.html">Line Bottom</a> </li>
                    <li><a href="page-menu-light.html">Light</a> </li>
                    <li><a href="page-menu-dark.html">Dark</a> </li>
                    <li><a href="page-menu-creative.html">Creative</a> </li>
                    <li class="active"><a href="page-menu-colored-background.html">Colored Background</a></li>
                </ul>
            </nav>
            <div id="menu-responsive-icon">
                <i class="fa fa-reorder"></i>
            </div>
        </div>
    </div>
    <h1>Update {{$post->title}}</h1>
    <form action="{{route('article.update',$post->id)}}" method="post">
        @csrf
        {{method_field('PATCH')}}
        @include('diabudy.articles._form')
    </form>
@endsection


