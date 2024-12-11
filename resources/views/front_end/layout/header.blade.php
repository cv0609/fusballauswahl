  <!-- Header Section Start -->
  <header class="custom-header">
      <div class="container">
        <nav class="custom-navbar">
          <div class="custom-logo">
            <a href="{{ route('home') }}" class="bg-center bg-no-repeat bg-contain"> </a>
          </div>

          <div
            class="custom-toggler menu-btn bg-contain bg-center bg-no-repeat"
          ></div>

          <div class="custom-menu">
            <ul>
              <li><a class="active" href="{{ route('home') }}">Startseite</a></li>
              <li><a href="game-instructions">Spielanleitung</a></li>
              <li><a href="{{ route('about.us') }}">Über uns</a></li>
              <li><a href="{{ route('contact.us') }}">Kontaktieren Sie uns</a></li>
            </ul>
            @if(!Auth::check())

            <a href="{{ route('register') }}" class="custom-btns custom-signup"
              >Benutzerkonto Erstellen</a
            >
            <a href="{{ route('login') }}" class="custom-btns custom-login">Einloggen in</a>
            @endif
            @if(Auth::check())

            <div class="profile">
              <div class="avatar">
                <div class="avatar-content">
                  <a href="#">
                    <div class="profile-image">
                    <img src="{{(!empty(Auth::user()->image)) ? asset(Auth::user()->image) : asset('assets/images/dummy.jpg') }}" alt="user">
                    </div>
                    <span>{{ ucfirst(Auth::user()->first_name) }}</span>
                  </a>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path
                      d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"
                    />
                  </svg>
                </div>
                <div class="dropdown">
                  <ul>
                    <li>
                      <a href="{{ route('profile.profile') }}">
                        <div
                          class="profile-dropdown-options profile-image-dropdown"
                        ></div>
                        Mein Profil
                      </a>
                    </li>
                    <li>
                      <a href="my-matches.html">
                        <div
                          class="profile-dropdown-options profile-image-stadium"
                        ></div>
                        Meine Übereinstimmungen
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('logout') }}">
                        <div
                          class="profile-dropdown-options profile-image-logout"
                        ></div>
                        Abmelden
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            @endif

            <div
              class="custom-closer bg-contain close-btn bg-center bg-no-repeat"
            ></div>
          </div>
        </nav>
      </div>
    </header>
    <!-- Header Section End -->