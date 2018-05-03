@extends('diabudy.layouts.master')
@section('page-title')

@endsection
@section('content')
    @include('diabudy.home._posts',compact('posts'))
@endsection
