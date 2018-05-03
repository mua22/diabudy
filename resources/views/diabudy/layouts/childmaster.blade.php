@extends('diabudy.layouts.master')

@section('content')
    <div class="row">
        <div class="post-content col-md-9">
            @yield('child-content')
        </div>
        <div class="sidebar sidebar-modern col-md-3">
        @yield('child-sidebar')

            <div class="widget clearfix widget-tags">
                <h4 class="widget-title">Tags</h4>
                <div class="tags">
                    <a href="#">Design</a>
                    <a href="#">Portfolio</a>
                    <a href="#">Digital</a>
                    <a href="#">Branding</a>
                    <a href="#">HTML</a>
                    <a href="#">Clean</a>
                    <a href="#">Peace</a>
                    <a href="#">Love</a>
                    <a href="#">CSS3</a>
                    <a href="#">jQuery</a>
                </div>
            </div>
        </div>
    </div>
@endsection