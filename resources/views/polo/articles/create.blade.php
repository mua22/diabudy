@extends('polo.layouts.master')

@section('content')
    <h1>Add Article for {{$category->title}}</h1>
    <form action="{{route('article.store',$category->slug)}}" method="post">
        @csrf
        @include('polo.articles._form')
    </form>
@endsection


