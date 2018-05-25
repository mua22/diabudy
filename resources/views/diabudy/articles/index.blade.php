@extends('polo.layouts.master')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <td>Title</td>
            <td>Status</td>
            <td>Actions</td>
        </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{$article->title}}</td>
                    <td>{{$article->status}}</td>

                    <td>{{dd($article)}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection