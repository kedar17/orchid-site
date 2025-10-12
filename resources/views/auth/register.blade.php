@extends('layouts.auth')

@section('title', 'Register')

@section('content')
<div class="auth-header">
    <h1>{{ __('Create Account') }}</h1>
    <p>{{ __('Sign up to get started with Orchid Soft') }}</p>
</div>

<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="form-group">
        <label for="name" class="form-label">{{ __('Full Name') }}</label>
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
               name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
               placeholder="Enter your full name">
        @error('name')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="email" class="form-label">{{ __('Email Address') }}</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
               name="email" value="{{ old('email') }}" required autocomplete="email"
               placeholder="Enter your email">
        @error('email')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="role" class="form-label">{{ __('Role') }}</label>
        <select class="form-control @error('role') is-invalid @enderror" name="role" id="role" required>
            <option value="">{{ __('Select your role') }}</option>
            <option value="Admin" {{ old('role') == 'Admin' ? 'selected' : '' }}>{{ __('Admin') }}</option>
            <option value="Contractor" {{ old('role') == 'Contractor' ? 'selected' : '' }}>{{ __('Contractor') }}</option>
            <option value="Client" {{ old('role') == 'Client' ? 'selected' : '' }}>{{ __('Client') }}</option>
            <option value="Engineer" {{ old('role') == 'Engineer' ? 'selected' : '' }}>{{ __('Engineer') }}</option>
        </select>
        @error('role')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="status" class="form-label">{{ __('Account Status') }}</label>
        <select class="form-control @error('status') is-invalid @enderror" name="status" id="status" required>
            <option value="1" {{ old('status', '1') == '1' ? 'selected' : '' }}>{{ __('Active') }}</option>
            <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>{{ __('Inactive') }}</option>
        </select>
        @error('status')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="password" class="form-label">{{ __('Password') }}</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
               name="password" required autocomplete="new-password"
               placeholder="Create a password">
        @error('password')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
        <input id="password-confirm" type="password" class="form-control"
               name="password_confirmation" required autocomplete="new-password"
               placeholder="Confirm your password">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            {{ __('Create Account') }}
        </button>
    </div>
</form>

@if (Route::has('login'))
<div class="auth-footer">
    <p class="auth-footer-text">
        {{ __('Already have an account?') }}
        <a href="{{ route('login') }}" class="auth-footer-link">{{ __('Sign In') }}</a>
    </p>
</div>
@endif
@endsection
