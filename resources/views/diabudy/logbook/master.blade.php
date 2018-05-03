@extends('diabudy.layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="post-content post-modern col-md-9">
                @yield('logbook-content')
            </div>
            <div class="sidebar sidebar-modern col-md-3">
                <div class="widget clearfix widget-archive">
                    <h4 class="widget-title"><i class="fa fa-user"></i> My Buddy</h4>
                    <ul class="list list-lines">
                        <li><a href="/my/logbook">LogBook</a></li>
                        <li><a href="/my/logbook/charts">Visualize Your Performance</a></li>
                        <li><a href="/my/profile">Edit Profile</a></li>

                    </ul>
                </div>

            </div>
        </div>
    </div>



@endsection
@section('style')
    @yield('logbook-style')
@endsection
@section('script')
    @yield('logbook-script')
@endsection