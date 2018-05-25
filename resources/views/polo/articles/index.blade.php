@extends('polo.layouts.master')
@section('content')
    <table class="table table-hover table-bordered table-striped">
        <thead>
        <tr>
            <th>Title</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{$article->title}}</td>
                    <td>{{$article->status}}</td>
                    <td>
                        @if($article->published || $article->submitted)
                            <a class="btn btn-xs btn-warning" href="{{route('frontend.article.edit',$article->id)}}">Withdraw and Edit</a>
                            @else
                            <a class="btn btn-xs btn-info" href="{{route('frontend.article.edit',$article->id)}}">Edit</a>
                            @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$articles->render()}}
@endsection