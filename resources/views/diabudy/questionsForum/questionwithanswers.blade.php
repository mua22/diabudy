@extends('polo/layouts/master')
@section('content')

<h4>{{ $questions->question_header }}</h4>
<p>{{ $questions->question_description }}</p>

@if(Auth::check())
<div class="container container-fluid">
 @if($ans = App\Answer::all())

    @foreach ($ans as $answers)  
    <div class="jumbotron">
            {{ $answers->answer }}
            <div class="row"> 
                    <div class="col-md-6 col-lg-6 col-xs-12">
                    <p class="text-primary">Answered By:{{ (App\User::find($answers->answered_by))->name }}</p>
                </div>
             </div>
         </div>
 @endforeach
@endif
        <form action="addinganswer" method="POST">
            {{ method_field('POST') }}
            @csrf    
            <textarea name="answer" class="form-control" cols="30" rows="10" placeholder="Enter Your Answer"></textarea>
            <input type="text" name="question_id" value="{{ $questions->id }}">
            <input type="text" name="answered_by" class="form-control" value="{{ Auth::id() }}">
            <br>
            <input type="submit" class="btn btn-primary" value="Submit Answer">
        </form>
</div>
@else
 <div class="container">
    <p class="text-alert text-center text-bold">You Should Login To Answer or View Answers</p>
    <a class="align-self-center" href="{{ route('login') }}">Login To Answer</a>
 </div>
 @endif
@endsection