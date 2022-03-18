@extends('layouts.adminlayout')

@section('body')
    <div class="login-form">
        <a class="navbar-brand" href="#">
            <span>Teamboard</span>
        </a>
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="form-group">
            <x-input id="email" class="form-control" placeholder="Your Email" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-blue">Email Password Reset Link</button>
            </div>

        </form>
    </div>
@endsection

@section('button')
        <li>Already A Student?</li>
        <li><a href="{{ route('login') }}" class="btn btn-border">Login</a></li> 
@endsection