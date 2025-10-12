@extends('layouts.auth')

@section('title', 'Reset Password')

@section('content')
<div class="auth-header">
    <h1>{{ __('Reset Password') }}</h1>
    <p>{{ __('Enter your email to receive a password reset link') }}</p>
</div>

@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<form method="POST" action="{{ route('password.email') }}">
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
        <button type="submit" class="btn btn-primary">
            {{ __('Send Reset Link') }}
        </button>
    </div>
</form>

@if (Route::has('login'))
<div class="auth-footer">
    <p class="auth-footer-text">
        {{ __('Remember your password?') }}
        <a href="{{ route('login') }}" class="auth-footer-link">{{ __('Back to Sign In') }}</a>
    </p>
</div>
@endif
@endsection
