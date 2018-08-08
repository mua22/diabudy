@extends('polo/layouts/master')
@section('content')
    <a class="btn btn-primary" href="{{ route('question.form') }}">Ask A Question</a>
 	<h2 class="text-center">Questions Asked</h2>
		<hr>
		@if(isset ($questions))
			@foreach($questions as $questions)
				<div class="row">
					<div class="col-md-8 col-lg-6 col-sm-12 col-xs-12">

						<h4 class="text-info text-primary">{{$questions->question_header}}</h4>

					</div>
					<div class="col-md-4 col-lg-6 col-sm-12 col-xs-12">
						<p class="text-info text-primary">Date Asked: {{$questions->created_at}}</p>

					</div>

				</div>
				<hr>
			@endforeach
		@endif
@endsection
