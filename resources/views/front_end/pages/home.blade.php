@extends('front_end.layout.main')
@section('content')
<!-- Home Page Banner Section Start -->
<section class="home_banner mt-90">
    <div class="container-fluid">
        <div class="home_banner_store">
            <div class="row">
                <div class="col-md-7">
                    <div class="home_banner_left">
                        <h1>{{ __('message.home-page.Fusballauswahl') }}</h1>
                        <h3>{{ __('message.home-page.Austria-fantasy-football-provider') }}</h3>
                        <a href="leagues" class="banner-btn">{{ __('message.home-page.Play-Now') }}</a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="home_banner_right bg-no-repeat"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home Page Banner Section End-->

<!-- Home Page Leaderboard Section Start -->
<section class="home-leaderboard py-5">
    <div class="container">
        <div class="home_leaderboard_wrap">
            <div class="row">
                <div class="col-md-7">
                    <div class="home_leaderboard_first">
                        <h2 class="section-heading">{{ __('message.home-page.leaderboard.section-heading') }}</h2>
                        <div class="leaderboard-list">
                            <ul>
                                <li>
                                    <p>1. Lukas Müller (979)</p>
                                </li>
                                <li>
                                    <p>2. Maximilian Bauer (963)</p>
                                </li>
                                <li>
                                    <p>3. Paul Gruber (962)</p>
                                </li>
                                <li>
                                    <p>4. Klara Wagner (959)</p>
                                </li>
                                <li>
                                    <p>5. Felix Weber (954)</p>
                                </li>
                                <li>
                                    <p>6. Theresa Huber (953)</p>
                                </li>
                                <li>
                                    <p>7. Leon Hofer (951)</p>
                                </li>
                                <li>
                                    <p>8. Marie Berger (948)</p>
                                </li>
                                <li>
                                    <p>9. Anna Schmidt (946)</p>
                                </li>
                                <li>
                                    <p>10. Theresa Huber (943)</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="home_leaderboard_second bg-no-repeat"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home Page Leaderboard Section End -->

<!-- Home Page Leagues Section Start -->
<section class="home_leagues_section pt-5">
    <div class="container">
        <div class="home_leagues_grp">
            <h2 class="section-heading text-center pb-5">{{ __('message.home-page.leagues.heading') }}</h2>
            <div class="leagues_cards_wrap">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="leagues_cards">
                            <div class="leagues_logo-container">
                                <div class="leagues_logo leagues_logo1"></div>
                            </div>
                            <div class="leagues_content">
                                <h3>{{ __('message.home-page.leagues.public-leagues.title') }}</h3>
                                <p>
                                {{ __('message.home-page.leagues.public-leagues.description') }}
                                </p>
                                <ul>
                                    <li>
                                        <p>
                                        {{ __('message.home-page.leagues.public-leagues.points.Automatic-assignment') }}
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                        {{ __('message.home-page.leagues.public-leagues.points.Unlimited-participants') }}
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                        {{ __('message.home-page.leagues.public-leagues.points.Leaderboard') }}
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="leagus_underline_container">
                                <div class="leagues_underline"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="leagues_cards">
                            <div class="leagues_logo-container">
                                <div class="leagues_logo leagues_logo2"></div>
                            </div>
                            <div class="leagues_content">
                                <h3>{{ __('message.home-page.leagues.private-leagues.title') }}</h3>
                                <p>{{ __('message.home-page.leagues.private-leagues.description') }}</p>
                                <ul>
                                    <li><p>{{ __('message.home-page.leagues.private-leagues.points.Customizable-settings') }}</p></li>
                                    <li><p>{{ __('message.home-page.leagues.private-leagues.points.Invite-only') }}</p></li>
                                    <li><p>{{ __('message.home-page.leagues.private-leagues.points.Weekly-updates') }}</p></li>
                                </ul>
                            </div>
                            <div class="leagus_underline_container">
                                <div class="leagues_underline"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="leagues_cards">
                            <div class="leagues_logo-container">
                                <div class="leagues_logo leagues_logo3"></div>
                            </div>
                            <div class="leagues_content">
                                <h3>{{ __('message.home-page.leagues.head-to-head-leagues.title') }}</h3>
                                <p>{{ __('message.home-page.leagues.head-to-head-leagues.description') }}</p>
                                <ul>
                                    <li><p>{{ __('message.home-page.leagues.head-to-head-leagues.points.Weekly-schedule') }}</p></li>
                                    <li><p>{{ __('message.home-page.leagues.head-to-head-leagues.points.Points-based') }}</p></li>
                                    <li><p>{{ __('message.home-page.leagues.head-to-head-leagues.points.Playoffs') }}</p></li>
                                </ul>
                            </div>
                            <div class="leagus_underline_container">
                                <div class="leagues_underline"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home Page Leagues Section End -->

<!-- Home Page Newsletter Section Start -->
<section class="home_page_newsletter_section">
    <div class="container">
        <div class="home_news_box">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="home_newsletter_image"></div>
                </div>
                <div class="col-lg-7 col-md-6">
                <div class="email-signup-wrapper">
                        <h3>{{ __('message.home-page.newsletter.title') }}</h3>
                        <p>{{ __('message.home-page.newsletter.description') }}</p>
                        <div class="email-signup-input-wrapper">
                            <input type="email" class="email-signup-input email-input" placeholder="{{ __('message.home-page.newsletter.placeholder') }}" required />
                            <a href="" class="butn email-signup-submit-btn">{{ __('message.home-page.newsletter.subscribe-button') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home Page Newsletter Section End -->

<!-- Home Page Why Choose Us Section Start -->
<section class="home_why_choose_us py-7">
    <div class="container">
        <div class="home_why_choose_us_box">
            <h2 class="section-heading text-center pb-5">{{ __('message.home-page.why-choose-us.heading') }}</h2>
            <div class="home_why_choose_us_cards_wrap">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="home_why_choose_us_cards">
                            <div class="home_why_choose_us_logo-container">
                                <div class="home_why_choose_us_logo1 home_why_choose_us_logo"></div>
                            </div>
                            <div class="home_why_choose_us_cards_content">
                                <h3>
                                {{ __('message.home-page.why-choose-us.authentic-experience.title') }}
                                </h3>
                                <p>
                                {{ __('message.home-page.why-choose-us.authentic-experience.description') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="home_why_choose_us_cards">
                            <div class="home_why_choose_us_logo-container">
                                <div class="home_why_choose_us_logo2 home_why_choose_us_logo"></div>
                            </div>
                            <div class="home_why_choose_us_cards_content">
                                <h3> {{ __('message.home-page.why-choose-us.custom-leagues.title') }}</h3>
                                <p>
                                {{ __('message.home-page.why-choose-us.custom-leagues.description') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="home_why_choose_us_cards">
                            <div class="home_why_choose_us_logo-container">
                                <div class="home_why_choose_us_logo3 home_why_choose_us_logo"></div>
                            </div>
                            <div class="home_why_choose_us_cards_content">
                                <h3>{{ __('message.home-page.why-choose-us.live-stats.title') }}</h3>
                                <p>
                                {{ __('message.home-page.why-choose-us.live-stats.description') }}

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home Page Why Choose Us Section End -->

<!-- Disclaimer Section Start -->
<section class="disclaimer text-center pb-5">
    <div class="container">
        <h3 class="text-center">{{ __('message.home-page.disclaimer.title') }}</h3>
        <p>
        {{ __('message.home-page.disclaimer.description.Age-restriction') }}
        </p>
        <p>
        {{ __('message.home-page.disclaimer.description.Entertainment-only') }}

        </p>
        <p>
        {{ __('message.home-page.disclaimer.description.No-gambling') }}

        </p>
        <p>
        {{ __('message.home-page.disclaimer.description.Safe-environment') }}

        </p>
    </div>
</section>
<!-- Disclaimer Section Start -->
@endsection
