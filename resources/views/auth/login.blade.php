@extends('layouts.adminlayout')

@section('body')
    <div class="login-form">
        <a class="navbar-brand" href="#">
            <span>Teamboard</span>
        </a>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <x-input id="email" class="form-control" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus />
            </div>
            

            <div class="form-group">
                <x-input id="password" placeholder="Password" class="form-control" type="password" name="password"
                required autocomplete="current-password" />
            </div>

            <div class="form-group clearfix">

                <div class="float-left">

                    <div class="form-check ">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                </div>

                <div class="float-right">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                </div>

            </div>

            <div class="form-group">

                <button type="submit" class="btn btn-blue">Login</button>

            </div>

        </form>
    </div>
@endsection

@section('button')
        <li>Don't have an account yet?</li>
        <li><a href="{{ route('register') }}" class="btn btn-border">Register</a></li> 
@endsection
