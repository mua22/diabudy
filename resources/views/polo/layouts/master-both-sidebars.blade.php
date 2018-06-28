@extends('polo.layouts.master')
@section('content')
    <div class="row">
        <div class="sidebar col-md-2">
                @yield('sidebar-left')
        </div>
        <div class="content col-md-8">
            @yield('center')
        </div>
        <div class="sidebar col-md-2">

            @yield('sidebar-right')
        </div>
    </div>
@endsection