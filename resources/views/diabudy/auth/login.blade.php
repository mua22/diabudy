@extends('diabudy.layouts.master')

@section('content')
    <div class="row">



        <div class="col-md-10 col-md-offset-1">
            <div class="panel ">
                <div class="panel-body"><h3>Login</h3>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label class="sr-only">Username or Email</label>
                            <input type="text" placeholder="Username or Email" class="form-control" name="email">

                        </div>
                        <div class="form-group m-b-5">
                            <label class="sr-only">Password</label>
                            <input type="password" placeholder="Password" class="form-control" name="password">
                        </div>
                        <div class="form-group form-inline m-b-10 ">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"><small> Remember me</small>
                                </label>
                            </div><a class="right" href="/password/reset"><small>Lost your Password?</small></a>
                        </div><div class="form-group">
                            <button class="btn btn-primary" type="submit">Login</button>

                        </div>
                    </form>
                </div></div><p>Don't have an account yet? <a href="{{route('register')}}">Register New Account</a></p>


        </div>

    </div>


@endsection
