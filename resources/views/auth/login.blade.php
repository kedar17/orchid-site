@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<div class="auth-header">
    <h1>{{ __('Welcome Back') }}</h1>
    <p>{{ __('Sign in to your account to continue') }}</p>
</div>

<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="form-group">
        <label for="email" class="form-label">{{ __('Email Address') }}</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
               name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
               placeholder="Enter your email">
        @error('email')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="password" class="form-label">{{ __('Password') }}</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
               name="password" required autocomplete="current-password"
               placeholder="Enter your password">
        @error('password')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <div class="d-flex justify-content-between align-items-center">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                       {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
            @if (Route::has('password.request'))
                <a class="btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Password?') }}
                </a>
            @endif
        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            {{ __('Sign In') }}
        </button>
    </div>
</form>

@if (Route::has('register'))
<div class="auth-footer">
    <p class="auth-footer-text">
        {{ __("Don't have an account?") }}
        <a href="{{ route('register') }}" class="auth-footer-link">{{ __('Sign Up') }}</a>
    </p>
</div>
@endif
@endsection
