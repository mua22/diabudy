@extends('polo.layouts.sidebar')

@section('content')
    <h2>Edit Sugar Level <i class="fa fa-fa-plus"></i></h2>
    <form class="" action="{{route('logbook.sugar.update',$reading->id)}}" method="POST">
    @include('polo.logbook.forms._form')
    </form>
@endsection

