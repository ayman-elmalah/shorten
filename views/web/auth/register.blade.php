@extends('web.layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h2 class="logo text-center text-main"><a href="{{ url('/') }}" class="text-decoration-none text-main">Shorten</a></h2>
                        <h5 class="card-title text-center">Sign Up</h5>

                        @if(session('message'))
                            <div class="alert alert-danger">{{ flash('message') }}</div>
                        @endif
                        <form class="form-signin" action="{{ url('register') }}" method="post">
                            <div class="form-group">
                                <label for="first_name">First name</label>
                                <input type="text" id="first_name" name="first_name" class="form-control @if($errors && $errors->has('first_name')) is-invalid @endif" placeholder="Firstname" required autofocus value="{{$old?$old['first_name']:''}}">
                                @if($errors && $errors->has('first_name'))
                                    <div class="invalid-feedback">{{ $errors->first('first_name') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="last_name">Last name</label>
                                <input type="text" id="last_name" name="last_name" class="form-control @if($errors && $errors->has('last_name')) is-invalid @endif" placeholder="Lastname" required value="{{$old?$old['last_name']:''}}">
                                @if($errors && $errors->has('last_name'))
                                    <div class="invalid-feedback">{{ $errors->first('last_name') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="user_name">User name</label>
                                <input type="text" id="user_name" name="user_name" class="form-control @if($errors && $errors->has('user_name')) is-invalid @endif" placeholder="Username" required value="{{$old?$old['user_name']:''}}">
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

                            <button class="btn btn-lg btn-form  btn-block text-uppercase" type="submit">Sign up</button>

                        </form>
                        <div class="member text-center mt-5">
                            <a class=" text-dark" href="{{ url('login') }}">I'm already user</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection