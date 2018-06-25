@extends('diabudy.layouts.master')

@section('content')

        <div class="row">

                @yield('logbook-content')


        </div>
@endsection
@section('sidebar')
    <div class="widget clearfix widget-archive">
        <h4 class="widget-title"><i class="fa fa-user"></i> My Buddy</h4>
        <ul class="list list-lines">
            <li><a href="{{route('diary.index')}}"><i class="fa fa-book"></i>Diary</a></li>
            <li><a href="/my/logbook"><i class="fa fa-bars"></i>LogBook</a></li>
            <li><a href="/my/logbook/charts">Visualize Your Performance</a></li>
            <li><a href="/my/profile">Edit Profile</a></li>

        </ul>
    </div>
    @endsection
@section('style')
    @yield('logbook-style')
@endsection
@section('script')
    @yield('logbook-script')
@endsection