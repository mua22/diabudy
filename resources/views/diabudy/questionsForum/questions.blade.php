@extends('polo/layouts/master')
@section('content')
<form action="submitquestions" method="POST">
    @csrf
    {{ method_field('POST') }}
    <div class="form-group">
        <label for="question_header">Enter Question</label>
        <input type="text" class="form-control" placeholder="Enter The Question Header" maxlength="200" name="question_header">
    </div>

    <div class="form-group">
        <label for="question_description">Describe Question</label>
        <textarea name="question_description" class="form-control" id="" cols="30" rows="10"></textarea>
    </div>

    <div class="form-group">
        <label for="category">category</label>
        <input type="text" name="category" id="" class="form-control">
    </div>

    @if($id = Auth::id())
    <input type="hidden" name="user_id" value={{ $id }}>
    @endif

    <input type="submit" class="btn btn-primary" value="Submit Question">
</form>
@stop