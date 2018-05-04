@extends('diabudy.layouts.master')
@section('page-title')

@endsection
@section('content')
    <h1>Add Article for {{$category->title}}</h1>
    <form action="{{route('article.store',$category->slug)}}" method="post">
        @csrf
        @include('diabudy.articles._form')
    </form>
@endsection

@section('script')
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
        $('textarea').ckeditor();
        // $('.textarea').ckeditor(); // if class is prefered.
    </script>
    @endsection
