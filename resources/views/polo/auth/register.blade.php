@extends('polo.layouts.master')

@section('content')
    <div class="row">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="col-md-10 col-md-offset-1 center">
                <div class="form-group {{ $errors->has('name') ? ' has-error has-feedback' : '' }}">
                    <label class="control-label" for="inputError2">
                        Name: {{ $errors->first('name') }}
                    </label>
                    <input type="text" class="form-control" id="inputError2" aria-describedby="inputError2Status" value="{{old('name')}}" name="name">
                    @if($errors->has('name'))
                        <span class="fa fa-close form-control-feedback" aria-hidden="true">
                    </span>

                    @endif
                    <span id="inputError2Status" class="sr-only">(error)</span>
                </div>
            </div>
            <div class="col-md-10 col-md-offset-1 center">
                <div class="form-group {{ $errors->has('email') ? ' has-error has-feedback' : '' }}">
                    <label class="control-label" for="eMail">
                        Email: {{ $errors->first('email') }}
                    </label>
                    <input type="text" class="form-control" id="eMail" aria-describedby="inputErrorEmailStatus" value="{{old('email')}}" name="email">
                    @if($errors->has('email'))
                        <span class="fa fa-close form-control-feedback" aria-hidden="true">
                    </span>

                    @endif
                    <span id="inputErrorEmailStatus" class="sr-only">(error)</span>
                </div>
            </div>
            <div class="col-md-10 col-md-offset-1 center">
                <div class="form-group {{ $errors->has('password') ? ' has-error has-feedback' : '' }}">
                    <label class="control-label" for="passwordField">
                        Password: {{ $errors->first('password') }}
                    </label>
                    <input type="password" class="form-control" id="passwordField" aria-describedby="inputErrorPasswordStatus" value="{{old('password')}}" name="password">
                    @if($errors->has('password'))
                        <span class="fa fa-close form-control-feedback" aria-hidden="true">
                    </span>

                    @endif
                    <span id="inputErrorPasswordStatus" class="sr-only">(error)</span>
                </div>
            </div>
            <div class="col-md-10 col-md-offset-1 center">
                <div class="form-group {{ $errors->has('password_confirmation') ? ' has-error has-feedback' : '' }}">
                    <label class="control-label" for="inputErrorConfirm">
                        Confirm Password: {{ $errors->first('password_confirmation') }}
                    </label>
                    <input type="password" class="form-control" id="inputErrorConfirm" aria-describedby="inputErrorConfirmPasswordStatus" value="{{old('password_confirmation')}}" name="password_confirmation">
                    @if($errors->has('password_confirmation'))
                        <span class="fa fa-close form-control-feedback" aria-hidden="true">
                    </span>

                    @endif
                    <span id="inputErrorConfirmPasswordStatus" class="sr-only">(error)</span>
                </div>
            </div>

            <div class="col-md-10 col-md-offset-1 center">
                <div class="col-md-12 form-group">
                    <button type="submit" class="btn btn-primary">Register New Account </button><a class="btn btn-danger m-l-10" type="button" href="/">Cancel</a>

                </div>
            </div>


        </form>
    </div>
@endsection
