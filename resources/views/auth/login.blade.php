@extends('layouts.app')

@section('authentication')
<div class="page-content--bge5">
    <div class="container">
        <div class="login-wrap">
            <div class="login-content">
                <div class="login-logo">
                    <a href="{{ url('/') }}">
                        <img src="{{asset('public/backend/images/icon/logo.png')}}" alt="Aqua Zone">
                    </a>
                </div>
                <h2 class="pb-4"> <u>Login</u> </h2>
                <div class="login-form">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" class="au-input au-input--full form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="au-input au-input--full  form-control @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="login-checkbox">
                            <label>
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </label>
                            <label>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Password?') }}
                                    </a>
                                @endif
                            </label>
                        </div>
                        <button type="submit" class="au-btn au-btn--block au-btn--green m-b-20">{{ __('Login') }}</button>
                    </form>
                    <div class="register-link">
                        <p>
                            Don't have account?
                            <a href="{{route('register')}}">Register Here</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
