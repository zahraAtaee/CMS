@extends('layouts.app')

@section('content')
{{--    <div class="owl">
        <div class="hand"></div>
        <div class="hand hand-r"></div>
        <div class="arms">
            <div class="arm"></div>
            <div class="arm arm-r"></div>
        </div>
    </div>
    <div class="form">
        <div class="control">
            <label for="email" class="fa fa-envelope"></label>
            <input id="email" placeholder="Email" type="email"></input>
        </div>
        <div class="control">
            <label for="password" class="fa fa-asterisk"></label>
            <input id="password" placeholder="Password" type="password"></input>
        </div>
    </div>--}}

<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="owl">
                <div class="hand"></div>
                <div class="hand hand-r"></div>
                <div class="arms">
                    <div class="arm"></div>
                    <div class="arm arm-r"></div>
                </div>
            </div>
            <div class="stiker panel panel-default">

                <div class="panel-heading">ورود</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        @include('Admin.section.errors')
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">آدرس ایمیل</label>

                            <div class="col-md-6">
                                <input id="email" type="email"  class="form-control fa fa-envelope" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">رمز عبور</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4 g-recaptcha" data-sitekey="6LenzSwUAAAAACgjaI9-TrOml2-WH_6G8eWHPUSS"></div>
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> مرا به خاطر بسپار
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    ورود
                                </button>
                                <a href="{{url('login/google')}}" class="btn btn-danger">ثبت نام با گوگل</a>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    فراموشی رمز عبور؟
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
