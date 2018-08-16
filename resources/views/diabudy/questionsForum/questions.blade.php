@extends('polo/layouts/master')
@section('content')
    <h1 class="text-center"> Questions Form</h1>
     <div class="container container-fluid">
            <form action="submitquestions" method="Post">
                @csrf
                {{method_field('POST')}}
                <div class="form-group row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <label for="question_header">Enter The Question</label>
                        <input type="text" name="question_header" id="question_header" class="form-control" required="true">
                        
                    </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <label for="category">Enter The Category</label>
                            <input type="text" id="category" name="category" class="form-control" required="true">
                        
                        </div>
                </div>
                   <div class="form-group row">
                        <label for="question_description">Explain Your Question</label>
                        <textarea cols="25" rows="15" name="question_description" id="question_description" class="form-control">
                        </textarea>        
                    </div>
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <button type="submit" class="btn btn-dark">Post Question</button>
                <button type="reset" class="btn btn-danger">Reset Fields</button>
            </form>
     </div>
     <script type="text/javascript">
        window.onload = function(){
                
        }
    </script>
@stop