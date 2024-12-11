@extends('front_end.layout.main')
@section('content')
 <!-- Login Page Form Section Start -->
 <section class="login_signup_form">
        <div class="container">
            <div class="login-signup-wrapper">
                <div class="form-container">
                    <form action="{{ route('login.post') }}" method="POST" id="login-signup">
                        @csrf
                        <h3 class="text-center">Login</h3>
                        @if(Session::has('error'))
                         <span class="alert alert-danger">{{ Session::get('error') }}</span>
                        @endif
                        <fieldset>
                            <input placeholder="Ihre E-Mail" type="email" tabindex="1" id="email" name="email" autofocus>
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </fieldset>
                        <fieldset>
                            <input id="password-field" name="password" placeholder="Ihr Passwort" type="text" tabindex="2">
                            @error('password')
                         <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </fieldset>
                        <fieldset>
                            <button name="submit" type="submit" id="login-submit" data-submit="...Sending">
                                Login</button>
                        </fieldset>
                        <p class="jump-text">
                            Sie haben noch kein Konto ? <a href="{{ route('register') }}">Melden Sie sich an</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Page Form Section End -->
@endsecrion