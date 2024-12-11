@extends('front_end.layout.main')
@section('content')
<!-- Login Page Form Section Start -->
<section class="login_signup_form">
    <div class="container">
        <div class="login-signup-wrapper">
            <div class="form-container">
                <form action="{{ route('register.post') }}" method="POST" id="login-signup">
                    @csrf
                    <h3 class="text-center">Melden Sie sich an</h3>
                    @if(Session::has('success'))
                     <span class="alert alert-success text-center">{{ Session::get('success') }}</span>
                    @endif
                    <fieldset>
                        <input name="first_name" placeholder="Ihr Name" type="text" tabindex="1"value="{{ old('first_name') }}" autofocus>
                        @error('first_name')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </fieldset>
                    <fieldset>
                        <input name="user_name" placeholder="Benutzername" value="{{ old('user_name') }}" type="text" tabindex="2">
                        @error('user_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </fieldset>
                    <fieldset>
                        <input name="email" placeholder="Ihre E-Mail-Adresse" type="email" tabindex="3" id="email" value="{{ old('email') }}">
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </fieldset>
                    <fieldset>
                        <input  name="phone" id="Phone" value="{{ old('phone') }}" placeholder="Ihre Telefonnummer (Optional)" type="tel" tabindex="4" >
                        @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </fieldset>
                    <fieldset>
                    <input type="password" name="password" placeholder="Password" class="form-control para" id="password-field">                        
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </fieldset>
                    <fieldset>
                        <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control para" id="con_password">
                        @error('password_confirmation')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </fieldset>

                    <fieldset>
                        <button name="submit" type="submit" id="signup-submit" data-submit="...Sending">Melden Sie sich
                            an</button>
                    </fieldset>
                    <p class="jump-text">
                        Sie haben bereits ein Konto? <a href="{{ route('login') }}"> Login</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Login Page Form Section End -->
@endsection
