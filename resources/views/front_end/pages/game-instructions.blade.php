@extends('front_end.layout.main')
@section('content')
  <!-- Banner Section Start -->
  <section class="pages-banner game-instructions bg-cover bg-no-repeat">
    <div class="container">
        <div class="banner-content">
            <h1>{{ __('message.game_instructions.title') }}</h1>
        </div>
    </div>
  </section>
  <!-- Banner Section End -->

  <!-- After Banner Intro Text Section Start -->
  <div class="after-banner-text my-5">
      <div class="container">
          <div class="after-banner-text-wrap">
              <p>
                  {{ __('message.game_instructions.intro_text') }}
              </p>
          </div>
      </div>
  </div>
  <!-- After Banner Intro Text Section End -->

  <!-- Game Instructions Content Section Start -->
  <section class="game-instructions-content-section game-instructions-page">
    <div class="container">
        <div class="game-instructions-cards-wrap">

            <!-- Step 1 -->
            <div class="game-instructions-cards">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="game-instructions-card-image game-instructions-card1-image"></div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="game-instructions-cards-content">
                            <h3>{{ __('message.game_instructions.step1_title') }}</h3>
                            <ul>
                                <li><p><strong>{{ __('message.game_instructions.step1_signup') }}</strong></p></li>
                                <li><p><strong>{{ __('message.game_instructions.step1_profile') }}</strong></p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="game-instructions-cards">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="game-instructions-card-image game-instructions-card2-image"></div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="game-instructions-cards-content">
                            <h3>{{ __('message.game_instructions.step2_title') }}</h3>
                            <ul>
                                <li><p><strong>{{ __('message.game_instructions.step2_select_league') }}</strong></p></li>
                                <li><p><strong>{{ __('message.game_instructions.step2_public_leagues') }}</strong></p></li>
                                <li><p><strong>{{ __('message.game_instructions.step2_private_leagues') }}</strong></p></li>
                                <li><p><strong>{{ __('message.game_instructions.step2_head_to_head_leagues') }}</strong></p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="game-instructions-cards">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="game-instructions-card-image game-instructions-card3-image"></div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="game-instructions-cards-content">
                            <h3>{{ __('message.game_instructions.step3_title') }}</h3>
                            <ul>
                                <li><p><strong>{{ __('message.game_instructions.step3_choose_players') }}</strong></p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="game-instructions-cards">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="game-instructions-card-image game-instructions-card4-image"></div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="game-instructions-cards-content">
                            <h3>{{ __('message.game_instructions.step4_title') }}</h3>
                            <ul>
                                <li><p><strong>{{ __('message.game_instructions.step4_scoring') }}</strong></p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="game-instructions-cards">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="game-instructions-card-image game-instructions-card5-image"></div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="game-instructions-cards-content">
                            <h3>{{ __('message.game_instructions.step5_title') }}</h3>
                            <ul>
                                <li><p><strong>{{ __('message.game_instructions.step5_updates') }}</strong></p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 6 -->
            <div class="game-instructions-cards">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="game-instructions-card-image game-instructions-card6-image"></div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="game-instructions-cards-content">
                            <h3>{{ __('message.game_instructions.step6_title') }}</h3>
                            <ul>
                                <li><p><strong>{{ __('message.game_instructions.step6_rankings') }}</strong></p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Helpful Tips -->
            <div class="game-instructions-cards">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="game-instructions-card-image game-instructions-card7-image"></div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="game-instructions-cards-content">
                            <h3>{{ __('message.game_instructions.tips_title') }}</h3>
                            <ul>
                                <li><p>{{ __('message.game_instructions.tip1') }}</p></li>
                                <li><p>{{ __('message.game_instructions.tip2') }}</p></li>
                                <li><p>{{ __('message.game_instructions.tip3') }}</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
  </section>
  <!-- Game Instructions Content Section End -->

  <!-- Disclaimer Section Start -->
  <section class="disclaimer text-center py-5">
    <div class="container">
        <h3>{{ __('message.game_instructions.disclaimer_title') }}</h3>
        <p>{{ __('message.game_instructions.disclaimer_text') }}</p>
    </div>
  </section>
  <!-- Disclaimer Section End -->
@endsection