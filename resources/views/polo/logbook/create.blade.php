@extends('polo.layouts.sidebar')

@section('content')
    <h2>Add Sugar Level <i class="fa fa-fa-plus"></i></h2>
    <form class="" action="{{route('logbook.sugar.store')}}" method="POST">
    @include('polo.logbook.forms._form')
    </form>
@endsection

