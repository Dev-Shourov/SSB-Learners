@extends('layouts.adminlayout')

@section('body')
    <div class="login-form">
        <a class="navbar-brand" href="#">
            <span>Teamboard</span>
        </a>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <x-input id="name" class="form-control" placeholder="Your Name" type="text" name="name" :value="old('name')" required autofocus />
            </div>
            
            <div class="form-group">
                <x-input id="email" class="form-control" type="email" placeholder="Your Email" name="email" :value="old('email')" required />
            </div>

            <div class="form-group">
                <x-input id="email" class="form-control" type="text" placeholder="Phone Number" name="phone" :value="old('phone')" required />
            </div>

            <div class="form-group">
                <x-input id="password" class="form-control" type="password" placeholder="Password" name="password" required autocomplete="new-password" />
            </div>

            <div class="form-group">
            <x-input id="password_confirmation" class="form-control" placeholder="Confirm Password" type="password" name="password_confirmation" required />
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-blue">Register</button>
            </div>

            <div class="from-group">
                <ul>
                    <li>Already have an account?<a href="{{ route('login') }}" class=""> Login</a></li>  
                </ul>
            </div>

        </form>
    </div>
@endsection

@section('button')
        <li>Already A Student?</li>
        <li><a href="{{ route('login') }}" class="btn btn-border">Login</a></li> 
@endsection
