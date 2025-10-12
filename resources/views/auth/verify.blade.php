@extends('layouts.auth')

@section('title', 'Verify Email')

@section('content')
<div class="auth-header">
    <h1>{{ __('Verify Your Email') }}</h1>
    <p>{{ __('Check your inbox for the verification link') }}</p>
</div>

@if (session('resent'))
    <div class="alert alert-success" role="alert">
        {{ __('A fresh verification link has been sent to your email address.') }}
    </div>
@endif

<div class="alert alert-info" role="alert">
    <p style="margin: 0;">
        {{ __('Before proceeding, please check your email for a verification link.') }}
    </p>
</div>

<p class="text-muted" style="text-align: center; margin: 20px 0;">
    {{ __('If you did not receive the email') }},
</p>

<form method="POST" action="{{ route('verification.resend') }}">
    @csrf
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            {{ __('Resend Verification Email') }}
        </button>
    </div>
</form>

@if (Route::has('login'))
<div class="auth-footer">
    <p class="auth-footer-text">
        <a href="{{ route('login') }}" class="auth-footer-link">{{ __('Back to Sign In') }}</a>
    </p>
</div>
@endif
@endsection
