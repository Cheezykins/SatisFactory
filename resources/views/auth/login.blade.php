@extends('layouts.auth')

@section('content')
<span id="badge">
    <img src="{{ asset('images/logo/transparent-150.png') }}" alt="logo">
</span>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div id="brand">
                Satis<span>Factory</span>
            </div>
        </div>
        <div class="col-sm-7 col-md-6 col-lg-5 login">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-sm-2 col-md-2 control-label">E-Mail Address</label>
                    <div class="col-sm-10 col-md-10">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" tabindex="1">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-sm-2 col-md-2 control-label">Password</label>

                    <div class="col-sm-10 col-md-10">
                        <input id="password" type="password" class="form-control" name="password" tabindex="2">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-8 col-sm-offset-2 col-sm-6 col-md-offset-2 col-md-6">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" tabindex="3"> Remember me
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 submit">
                        <button type="submit" class="btn btn-primary btn-lg" tabindex="4"><i class="fa fa-btn fa-sign-in"></i> Login</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-5 col-md-6 col-lg-7 details">
            <p><strong>SatisFactory admin login</strong> This area lets you configure credentials, repositories and the build configuration. If you have no credentials you can <a href="{{ url('/') }}" onclick="window.history.go(-1);return false;">return from whence you came.</a></p>
        </div>
    </div>
</div>
@endsection
