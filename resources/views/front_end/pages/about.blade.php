@extends('front_end.layout.main')
@section('content')
<!-- Banner Section Start -->
<section class="pages-banner about-us bg-cover bg-no-repeat">
    <div class="container">
        <div class="banner-content">
            <h1>
                @lang('message.about-us.banner_title')
            </h1>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- After Banner Intro Text Section Start -->
<div class="after-banner-text mt-5">
    <div class="container">
        <div class="after-banner-text-wrap">
            <p>
                @lang('message.about-us.welcome_message_start') <strong>@lang('message.about-us.platform_name')</strong> , @lang('message.about-us.welcome_message_end')
            </p>
        </div>
    </div>
</div>
<!-- After Banner Intro Text Section End-->

<!-- About Us Content Section Start -->
<section class="header-pages-content-section">
    <div class="container">
        <div class="header-pages-content pt-5">

            <div class="header-pages-cards">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-card-image about-card1-image bg-center bg-cover bg-no-repeat "></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header-pages-cards-content">
                            <h3>
                                @lang('message.about-us.our_mission')
                            </h3>
                            <p>
                                @lang('message.about-us.mission_content')
                            </p>
                            <p>
                                @lang('message.about-us.mission_content2')
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-pages-cards">
                <div class="row flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="about-card-image about-card2-image bg-center bg-cover bg-no-repeat"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header-pages-cards-content">
                            <h3>
                                @lang('message.about-us.what_we_do')
                            </h3>
                            <p>
                                @lang('message.about-us.what_we_do_content')
                            </p>
                            <ul>
                                <li>
                                    <p>
                                        <strong>
                                            @lang('message.about-us.customizable_leagues')
                                        </strong>
                                        @lang('message.about-us.customizable_leagues_content')
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <strong>
                                            @lang('message.about-us.exciting_gameplay')
                                        </strong>
                                        @lang('message.about-us.exciting_gameplay_content')
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <strong>
                                            @lang('message.about-us.detailed_statistics')
                                        </strong>
                                        @lang('message.about-us.detailed_statistics_content')
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <strong>
                                            @lang('message.about-us.for_all')
                                        </strong>
                                        @lang('message.about-us.for_all_content')
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-pages-cards">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-card-image about-card3-image bg-center bg-cover bg-no-repeat"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header-pages-cards-content">
                            <h3>
                                @lang('message.about-us.our_values')
                            </h3>
                            <p>
                                @lang('message.about-us.values_content')
                            </p>
                            <ul>
                                <li>
                                    <p>
                                        <strong>
                                            @lang('message.about-us.inclusive')
                                        </strong>
                                        @lang('message.about-us.inclusive_content')
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <strong>
                                            @lang('message.about-us.engaging')
                                        </strong>
                                        @lang('message.about-us.engaging_content')
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <strong>
                                            @lang('message.about-us.transparent')
                                        </strong>
                                        @lang('message.about-us.transparent_content')
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <strong>
                                            @lang('message.about-us.passionate')
                                        </strong>
                                        @lang('message.about-us.passionate_content')
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-pages-cards">
                <div class="row flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="about-card-image about-card4-image bg-center bg-cover bg-no-repeat"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header-pages-cards-content">
                            <h3>
                                @lang('message.about-us.our_team')
                            </h3>
                            <p>
                                @lang('message.about-us.team_content')
                            </p>
                            <p>
                                @lang('message.about-us.team_content2')
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-pages-cards">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-card-image about-card5-image bg-center bg-cover bg-no-repeat"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header-pages-cards-content">
                            <h3>
                                @lang('message.about-us.why_choose')
                            </h3>
                            <ul>
                                <li>
                                    <p>
                                        <strong>
                                            @lang('message.about-us.focus_on_football')
                                        </strong>
                                        @lang('message.about-us.focus_on_football_content')
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <strong>
                                            @lang('message.about-us.realtime_statistics')
                                        </strong>
                                        @lang('message.about-us.realtime_statistics_content')
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <strong>
                                            @lang('message.about-us.fair_play')
                                        </strong>
                                        @lang('message.about-us.fair_play_content')
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-pages-cards">
                <div class="row flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="about-card-image about-card6-image bg-center bg-cover bg-no-repeat"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header-pages-cards-content">
                            <h3>
                                @lang('message.about-us.join_us')
                            </h3>
                            <p>
                                @lang('message.about-us.join_us_content')
                            </p>
                            <p>
                                @lang('message.about-us.join_us_content2')
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us Content Section End -->

<!-- Disclaimer Section Start -->
<section class="disclaimer text-center py-5">
    <div class="container">
        <h3 class="text-center">
            @lang('message.about-us.disclaimer.title')
        </h3>
        <p>
            @lang('message.about-us.disclaimer.content1')
        </p>
        <p>
            @lang('message.about-us.disclaimer.content2')
        </p>
        <p>
            @lang('message.about-us.disclaimer.content3')
        </p>
        <p>
            @lang('message.about-us.disclaimer.content4')
        </p>
    </div>
</section>
<!-- Disclaimer Section End -->
@endsection
