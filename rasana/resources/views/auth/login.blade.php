@extends('layouts.app')
<title>ورود و ثبت نام-رسانا</title>
@section('content')
<div class="container login-container">
  <div class="row login-wrapper">
            <div class="col-md-4 p-0">
                <div class="form-login-content">
                    <div class="row">
                        <a href="#" class="form-logo">
                            <img src="{{ URL('assets/cloud/images/photo_2023-04-24-20.42.38 (1).png') }}" width="120"
                                 height="50">
                        </a>
                        <div id="login">
                            <div class="col">
                                <p class="form-title"> ورود به رسانا</p>
                                <p class="form-subtitle">
                                    برای استفاده از خدمات رسانا، وارد حساب کاربری خود شوید
                                </p>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row m-0 mt-3">
                                    <div class="form-group form-item col">
                                        <input type="number" id="mobileNum" class="form-control" name="" autocomplete="off"
                                               required>
                                        <label for="mobileNum">{{ __('شماره همراه') }}</label>
                                    </div>
                                </div>
                                <div class="row m-0 mt-3">
                                    <div class="form-group form-item col">
                                        <input type="text" id="password"
                                               class="form-control @error('password') is-invalid @enderror" name=""
                                               autocomplete="off" required>
                                        <label for="password">{{ __('پسورد') }}</label>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col offset-md-4">
                                        <div class="form-check">


                                            <input class="form-check-input" type="checkbox" name="remember"
                                                   id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">
                                                {{ __('مرا به خاطر بسپار') }}
                                            </label>

                                        </div>
                                    </div>
                                </div>
                                <div class="row m-0">
                                    <dic class="col">
                                        <button type="submit" class="btn btn-form">
                                            {{ __('ورود') }}</button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" id="forget-password" href="#">
                                                {{ __('رمز عبور را فراموش کرده اید؟') }}
                                            </a>
                                        @endif
                                        <div class="text-center">
                                            <span>حساب کاربری ندارید؟</span>
                                            <a class="register-btn" href="#">
                                                {{ __('ثبت نام کنید') }}
                                            </a>
                                        </div>
                                    </dic>

                                </div>


                            </form>

                        </div>
                        <div id="forget_pass">
                            <div class="col">
                                <p class="form-title"> بازیابی رمز عبور</p>
                                <p class="form-subtitle">
                                    لطفا نام کاربری یا ایمیل خود را وارد کنید
                                </p>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row m-0 mt-3">
                                    <div class="form-group form-item col">
                                        <input type="text" id="" class="form-control" name="" autocomplete="off"
                                               required>

                                    </div>
                                </div>


                                <div class="row m-0">
                                    <dic class="col">
                                        <button type="submit" class="btn btn-form mt-3">
                                            {{ __('دریافت رمز عبور جدید') }}</button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="#" id="return_login">
                                                {{ __('بازگشت به صفحه ورود') }}
                                            </a>
                                        @endif

                                    </dic>

                                </div>


                            </form>
                        </div>





                    </div>
                </div>

            </div>
            <div class="col-md-7 p-0 d-none-md">
                <div class=" w-100 text-center">
                    <img src="{{ URL('assets/cloud/images/Tablet login-amico.png') }}" class="img-fluid" style="height: 550px;">
                </div>
            </div>
        </div>
    <div class="register-container">
        <div class="row register-wrapper">
            <div class="col-md-4 p-0">
                <div class="register-content">
                    <div class="row">
                        <a href="#" class="form-logo">
                            <img src="{{ URL('assets/cloud/images/photo_2023-04-24-20.42.38 (1).png') }}" width="120"
                                 height="50">
                        </a>
                        <div>
                            <div class="col">
                                <p class="form-title"> ثبت نام</p>
                                <p class="form-subtitle">
                                    <span>در صورت ثبت نام در رسانا وارد</span>
                                    <a href="#" id="return_register">حساب کاربری</a>
                                    <span>خود شوید.</span>
                                </p>
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row m-0">
                                    <div class="form-group form-item col-6 ">
                                        <input type="text" id="name" class="form-control" autocomplete="off" required >
                                        <label for="name">{{ __('نام') }}</label>
                                    </div>
                                    <div class="form-group form-item col-6">
                                        <input type="text" id="fullname" class="form-control" autocomplete="off" required >
                                        <label for="fullname">{{ __('نام خانوادگی') }}</label>
                                    </div>

                                </div>
                                <div class="row m-0 mt-3">
                                    <div class="form-group form-item col">
                                        <input type="number" id="mobileNum" class="form-control" autocomplete="off" required >
                                        <label for="mobileNum">{{ __('شماره همراه') }} </label>
                                    </div>
                                </div>
                                <div class="row m-0 mt-3">
                                    <dic class="col">
                                        <button type="button" class="btn btn-form">ثبت نام</button>
                                    </dic>
                                </div>




                            </form>

                        </div>






                    </div>
                </div>

            </div>
            <div class="col-md-7 p-0 d-none-md">
                <div class=" w-100">
                    <img src="{{ URL('assets/cloud/images/Enter OTP-pana.png') }}" class="img-fluid" height="530">
                </div>
            </div>
        </div>
    </div>

</div>
    {{--<div class="container">--}}
    {{--    <div class="row justify-content-center">--}}
    {{--        <div class="col-md-8">--}}
    {{--            <div class="card">--}}
    {{--                <div class="card-header">{{ __('Login') }}</div>--}}

    {{--                <div class="card-body">--}}
    {{--                    <form method="POST" action="{{ route('login') }}">--}}
    {{--                        @csrf--}}

    {{--                        <div class="row mb-3">--}}
    {{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

    {{--                            <div class="col-md-6">--}}
    {{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

    {{--                                @error('email')--}}
    {{--                                    <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                @enderror--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="row mb-3">--}}
    {{--                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

    {{--                            <div class="col-md-6">--}}
    {{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

    {{--                                @error('password')--}}
    {{--                                    <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                @enderror--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="row mb-3">--}}
    {{--                            <div class="col-md-6 offset-md-4">--}}
    {{--                                <div class="form-check">--}}
    {{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

    {{--                                    <label class="form-check-label" for="remember">--}}
    {{--                                        {{ __('Remember Me') }}--}}
    {{--                                    </label>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="row mb-0">--}}
    {{--                            <div class="col-md-8 offset-md-4">--}}
    {{--                                <button type="submit" class="btn btn-primary">--}}
    {{--                                    {{ __('Login') }}--}}
    {{--                                </button>--}}

    {{--                                @if (Route::has('password.request'))--}}
    {{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
    {{--                                        {{ __('Forgot Your Password?') }}--}}
    {{--                                    </a>--}}
    {{--                                @endif--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </form>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div>--}}
@endsection
