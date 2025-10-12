@extends('layouts.auth')

@section('title', 'Confirm Password')

@section('content')
<div class="auth-header">
    <h1>{{ __('Confirm Password') }}</h1>
    <p>{{ __('Please confirm your password to continue') }}</p>
</div>

<div class="alert alert-info" role="alert">
    <p style="margin: 0;">
        {{ __('This is a secure area. Please confirm your password before continuing.') }}
    </p>
</div>

<form method="POST" action="{{ route('password.confirm') }}">
    @csrf

    <div class="form-group">
        <label for="password" class="form-label">{{ __('Password') }}</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
               name="password" required autocomplete="current-password" autofocus
               placeholder="Enter your password">
        @error('password')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            {{ __('Confirm Password') }}
        </button>
    </div>
</form>

@if (Route::has('password.request'))
<div class="auth-footer">
    <p class="auth-footer-text">
        <a href="{{ route('password.request') }}" class="auth-footer-link">
            {{ __('Forgot Your Password?') }}
        </a>
    </p>
</div>
@endif
@endsection
