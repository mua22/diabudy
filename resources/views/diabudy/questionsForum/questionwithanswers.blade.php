@extends('polo/layouts/master')
@section('content')

<h4>{{ $questions->question_header }}</h4>
<hr>
<p>{{ $questions->question_description }}</p>

@if(Auth::check())
<div class="container container-fluid">
    @foreach ($answer as $answers)
                 <hr>
            <div class="container-grid">
                        <div class="row-grid">
                            <div>
                                <a href="{{route('voting',$parameters = array('id' =>$answers->id,'votes' =>"1"))}}"><span class="glyphicon glyphicon-chevron-up"></span></a>
                            </div>
                            <div>
                            <span>0</span>
                            </div>
                            <div>
                                <a href="{{route('voting',[$answers->id,"-1"])}}"><span class="glyphicon glyphicon-chevron-down"></span></a>
                            </div>
                        </div>
               
             
                        <div >
                            {{ $answers->answer }} 
                        </div>

                        <div class="answer-background-color">
                              <p class="text-primary">Answered By:</p>
                        </div>
           
             </div>
         
        
 @endforeach
        <form action="addinganswer" method="POST">
            {{ method_field('POST') }}
            @csrf
            <textarea name="answer" id="myanswer" class="form-control" cols="30" rows="10" placeholder="Enter Your Answer"></textarea>
            <input type="hidden" id="myquestionid" name="question_id" value="{{ $questions->id }}">
            <input type="hidden" id="myauthid" name="answered_by" class="form-control" value="{{ Auth::id() }}">
            <br>
            <button type="submit" id="submitButton" class="btn btn-primary">Submit Answer</button>
        </form>
</div>
@else
 <div class="container">
    <p class="text-alert text-center text-bold">You Should Login To Answer or View Answers</p>
    <a class="align-self-center" href="{{ route('login') }}">Login To Answer</a>
 </div>
 @endif


<!-- <script>
    window.onload = function(){
        $('button').click(function(ev){
            ev.preventDefault();
            $.ajaxSetup({
                 headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 }
             });

            $.ajax({
                type:'POST',
                url:'addinganswer',
                data:{
                    answer:$('#myanswer').val(),
                    question_id:$('#myquestionid').val(),
                    answered_by:$('#myauthid').val()
                },
                success:function(ev){
                    $('#answerDiv').append("<div>"+($('#myanswer').val())+"</div>");
                        $('#myanswer').val(" ");
                }
            });


        });
    }
</script> -->



@endsection
