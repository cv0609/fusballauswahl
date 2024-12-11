@extends('front_end.layout.main')
@section('content')
<!--Leagues Pages Banner Section Start -->
<section class="pages-banner leagues-pages  bg-cover bg-no-repeat">
    <div class="container">
        <div class="banner-content">
            <ul class="leagues-ul">
                <li class="inline-list home-list">
                    <h3>
                        <a href="{{ route('home') }}">Startseite</a>
                    </h3>
                </li>
                <li class="inline-list next-page-list">
                    <h3>
                        Kennwort ändern
                    </h3>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--Leagues Pages Banner Section End -->

<!-- Leagues Content Section Start -->
<section class="my-profile">
    <div class="container">
        <div class="mmy-profile-inner">
        @if(Session::has('success'))
            <span class="alert alert-success col-md-12 text-center">{{ Session::get('success')  }}</span>
            @endif
           @include('front_end.pages.profile.profile-sidebar')
            <div class="col-sec">
                <div class="user-content-update">
                    <div class="">
                        <div class="tab-content tab-content-1 active">
                            <div class="user-content-box">
                                <form action="{{ route('profile.update.password') }}" method="POST" class="mt-60 ">
                                   @csrf
                                    <div class="row">
                                        <div class="mb-3 col-sm-6">
                                            <input type="password" placeholder="Aktuelles Passwort"
                                                class="form-control para" name="current_password" id="password" >
                                                @error("current_password")
                                                     <span class="text-danger">{{ $message }}</span>
                                                 @enderror
                                        </div>

                                        <div class="mb-3 col-sm-6">
                                            <div class="show_password">
                                                <input type="password" placeholder="Neues Passwort"
                                                    class="form-control para" name="new_password" id="new_password" 
                                                    autocomplete="off">
                                                    @error("new_password")
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 col-sm-6">
                                            <input type="password" placeholder="Passwort bestätigen"
                                                class="form-control para" name="new_password_confirmation" id="con_password">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Aktualisieren</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Leagues Content Section End -->
@endsection
