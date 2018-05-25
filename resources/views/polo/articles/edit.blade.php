@extends('polo.layouts.master')

@section('content')

    <h1>Update {{$post->title}}</h1>
    <form action="{{route('article.update',$post->id)}}" method="post">
        @csrf
        {{method_field('PATCH')}}
        @include('polo.articles._form')
    </form>
@endsection


