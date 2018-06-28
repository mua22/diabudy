@extends('polo/layouts/master')
@section('content')
    <a class="btn btn-primary" href="{{ route('question.form') }}">Ask A Question</a>
    @if ($questions = App\Question::all())
    <ol>    
    @foreach($questions as $question)
            <li><a href="ans/{{ $question->id }}">{{ $question->question_header }}</a></li>
        @endforeach
        </ol>

@endif
@endsection
