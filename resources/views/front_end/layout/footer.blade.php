 <!-- Footer Start -->
 <footer class="footer py-5">
      <div class="container">
        <div class="footer-wrap">
          <div class="footer-blocks footer-logo">
            <div class="custom-logo-bottom">
              <a href="{{ route('home') }}" class="bg-center bg-no-repeat bg-contain"> </a>
            </div>
          </div>

          <div class="footer-blocks footer-menus">
            <h3>Speisekarte</h3>
            <ul>
              <li>
                <a href="{{ route('home') }}"> Startseite </a>
              </li>
              <li>
                <a href="{{ route('game.instructions') }}"> Spielanleitung </a>
              </li>
              <li>
                <a href="{{ route('about.us') }}"> Über uns </a>
              </li>
              <li>
                <a href="{{ route('contact.us') }}"> Kontaktieren Sie uns </a>
              </li>
            </ul>
          </div>

          <div class="footer-blocks footer-sub-menus">
            <h3>Nützliche Links</h3>
            <ul>
              <li>
                <a href="./personal-information-policy">
                  Richtlinie zu personenbezogenen Daten
                </a>
              </li>
              <li>
                <a href="{{ route('privacy.policy') }}"> Datenschutzerklärung </a>
              </li>
              <li>
                <a href="{{ route('terms.condition') }}"> Geschäftsbedingungen </a>
              </li>
            </ul>
          </div>
<!-- 
          <div class="footer-blocks footer-socials">
            <h3>Soziale Links</h3>
            <div class="social-tags_outer">
              <div class="social-tags-container">
                <div class="social-icons fb-social">
                  <div class="social-ikons fb"></div>
                </div>
                <div class="social-icons twitter-social">
                  <div class="social-ikons twitter"></div>
                </div>
                <div class="social-icons insta-social">
                  <div class="social-ikons insta"></div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
        <div class="footer-copyright-ssl-wrap">
          <div class="copyright-wrap">
            <p>Copyright &copy; 2024 fusballauswahl Alle Rechte vorbehalten.</p>
          </div>
          <div class="ssl-container">
            <div
              class="ssl-logo bg-center bg-contain bg-no-repeat h-100 w-100"
            ></div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer End -->
