@extends('web.layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h2 class="logo text-center text-main"><a href="{{ url('/') }}" class="text-decoration-none text-main">Shorten</a></h2>
                        <h5 class="card-title text-center">Sign In</h5>

                        @if(session('message'))
                            <div class="alert alert-danger">{{ flash('message') }}</div>
                        @endif
                        <form class="form-signin" action="{{ url('login') }}" method="post">
                            <div class="form-group">
                                <label for="user_name">User name</label>
                                <input type="text" id="user_name" name="user_name" class="form-control @if($errors && $errors->has('user_name')) is-invalid @endif" placeholder="Username" required autofocus value="{{$old?$old['user_name']:''}}">
                                @if($errors && $errors->has('user_name'))
                                    <div class="invalid-feedback">{{ $errors->first('user_name') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control @if($errors && $errors->has('password')) is-invalid @endif" placeholder="Password" required>
                                @if($errors && $errors->has('password'))
                                    <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                                @endif
                            </div>

                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" name="remember">
                                <label class="custom-control-label" for="customCheck1">Remember password</label>
                            </div>
                            <button class="btn btn-lg btn-form  btn-block text-uppercase" type="submit">Sign in</button>

                        </form>
                        <div class="member text-center mt-5">
                            <a class=" text-dark" href="{{ url('register') }}">Create Account</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection