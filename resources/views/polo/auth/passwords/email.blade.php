@extends('polo.layouts.master')

@section('content')


    <div class="row">
        <div class="col-sm-6 center">
            <h2 class="text-center">Forgot Password?</h2>
            <form class="form-validation" action="{{ route('password.email') }}" method="POST">
                @csrf
                <div class="form-group">
                    <p class="center">To receive a new password, enter your email address below.</p>
                    <input id="email" type="email" class="form-control  form-white placeholder {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Enter Email Here">

                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Recover your Password</button>
                </div>
            </form>
        </div>
    </div>

@endsection
