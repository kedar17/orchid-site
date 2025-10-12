@extends('layouts.auth')

@section('title', 'Reset Password')

@section('content')
<div class="auth-header">
    <h1>{{ __('Set New Password') }}</h1>
    <p>{{ __('Create a new password for your account') }}</p>
</div>

<form method="POST" action="{{ route('password.update') }}">
    @csrf

    <input type="hidden" name="token" value="{{ $token }}">

    <div class="form-group">
        <label for="email" class="form-label">{{ __('Email Address') }}</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
               name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus
               placeholder="Enter your email">
        @error('email')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="password" class="form-label">{{ __('New Password') }}</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
               name="password" required autocomplete="new-password"
               placeholder="Enter new password">
        @error('password')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="password-confirm" class="form-label">{{ __('Confirm New Password') }}</label>
        <input id="password-confirm" type="password" class="form-control"
               name="password_confirmation" required autocomplete="new-password"
               placeholder="Confirm new password">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            {{ __('Reset Password') }}
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
