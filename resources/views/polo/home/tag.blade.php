@extends('polo.layouts.sidebar')

@section('center')
    <div class="page-title">
        <h1>Articles in {{$tag->title}}</h1>
    </div>

    @include('polo.home.partials._posts',compact('posts'))
@endsection

@section('sidebar')

    @endsection