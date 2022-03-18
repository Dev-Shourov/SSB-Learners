@extends('layouts.adminlayout')

@section('body')
    <div class="login-form">
        <a class="navbar-brand" href="#">
            <span>Teamboard</span>
        </a>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <!-- Session Status -->
        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="form-group">
                <x-input id="email" class="form-control" placeholder="Enter Email" type="email" name="email" :value="old('email', $request->email))" required autofocus />
            </div>
            
            <div class="form-group">
                <x-input id="password" class="form-control" placeholder="Enter New Password" type="password" name="password" required />
            </div>

            <div class="form-group">
                <x-input id="password_confirmation" placeholder="Confirm Password" class="form-control" type="password" name="password_confirmation" required />
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
