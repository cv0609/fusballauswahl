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
                        Mein Profil
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
                                <form action="{{ route('profile.update') }}" method="POST" class="mt-60 ">
                                    @csrf
                                    <div class="row">
                                        <div class="mb-3 col-sm-6">
                                            <input type="text" placeholder="Name" class="form-control para" id="name"
                                            name="first_name" required="required" value="{{ Auth::user()->first_name }}" autocomplete="off">
                                        </div>
                                        <div class="mb-3 col-sm-6">
                                            <input type="text" placeholder="Benutzername" class="form-control para"
                                            id="last-name" required="required" name="user_name" value="{{ Auth::user()->user_name }}" autocomplete="off">
                                        </div>
                                        <div class="mb-3 col-sm-6">
                                            <input type="email" placeholder="E-mail" class="form-control para"
                                            id="email" required="required" name="email" value="{{ Auth::user()->email  }}" autocomplete="off">
                                        </div>
                                        <div class="mb-3 col-sm-6">
                                            <input type="number" placeholder="Telefon" class="form-control para"
                                            id="Phone" required="required" name="phone" value="{{ Auth::user()->phone  }}" autocomplete="off">
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
