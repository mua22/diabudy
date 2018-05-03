@extends('diabudy.layouts.master')
@section('page-title')

@endsection
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="page-error-404">404</div>
        </div>
        <div class="col-md-6">
            <div class="text-left">
                <h1 class="text-medium">Ooops, This Page Could Not Be Found!</h1>
                <p class="lead">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
                <div class="seperator m-t-20 m-b-20"></div>

                <div class="search-form">
                    <p>Please try searching again</p>
                    <form action="{{route('frontend.submitSearch')}}" class="form-inline" method="post">
                        @csrf
                        <div class="input-group input-group-lg">
                            <input type="text" class="form-control" placeholder="Search for pages..." name="term">
                            <span class="input-group-btn">
		                            		<button class="btn color btn-primary" type="submit"><i class="fa fa-search"></i></button>
                        		</span>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('style')
    <style>
        .page-error-404{
            font-size: 200px;
        }
    </style>
    @endsection
