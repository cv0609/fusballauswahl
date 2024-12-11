@extends('front_end.layout.main')
@section('content')
<!-- Home Page Banner Section Start -->
<section class="home_banner mt-90">
    <div class="container-fluid">
        <div class="home_banner_store">
            <div class="row">
                <div class="col-md-7">
                    <div class="home_banner_left">
                        <h1>Fusballauswahl</h1>
                        <h3>Österreichs Fantasy Football Anbieter</h3>
                        <a href="leagues" class="banner-btn">Jetzt Spielen</a>
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
                        <h2 class="section-heading">Bestenliste</h2>
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
            <h2 class="section-heading text-center pb-5">Unsere Ligen</h2>
            <div class="leagues_cards_wrap">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="leagues_cards">
                            <div class="leagues_logo-container">
                                <div class="leagues_logo leagues_logo1"></div>
                            </div>
                            <div class="leagues_content">
                                <h3>Öffentliche Ligen</h3>
                                <p>
                                    Offene Ligen, in denen Benutzer beitreten und mit einer
                                    größeren Community von Fußballfans konkurrieren können.
                                </p>
                                <ul>
                                    <li>
                                        <p>
                                            Automatische Einteilung basierend auf Erfahrungs- oder
                                            Fähigkeitsleveln (Anfänger, Fortgeschrittene,
                                            Experten).
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Unbegrenzte oder begrenzte Teilnehmerzahl pro Liga.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Ranglisten mit den besten Spielern aller öffentlichen
                                            Ligen.
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
                                <h3>Private Ligen</h3>
                                <p class="leagues_bold_text">
                                    Benutzer können ihre eigenen Ligen erstellen und Freunde
                                    oder Kollegen einladen, daran teilzunehmen.
                                </p>
                                <ul>
                                    <li>
                                        <p>
                                            Anpassbare Einstellungen (z. B. Anzahl der Teilnehmer,
                                            Punktesystem).
                                        </p>
                                    </li>
                                    <li>
                                        <p>Zugang nur per Einladung über E-Mail oder Code.</p>
                                    </li>
                                    <li>
                                        <p>
                                            Wöchentliche Updates mit Tabellenständen und
                                            Leistungsübersichten.
                                        </p>
                                    </li>
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
                                <h3>Kopf-an-Kopf-Ligen</h3>
                                <p class="leagues_bold_text">
                                    Direkte Duelle, bei denen Benutzer jede Woche gegen ein
                                    anderes Team antreten.
                                </p>
                                <ul>
                                    <li>
                                        <p>
                                            Wöchentliche Spielpläne, ähnlich wie in echten
                                            Fußballligen.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Punktbasierte Duelle, bei denen das Team mit der
                                            höheren Punktzahl gewinnt.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Playoffs oder Finalspiele für zusätzliche Spannung am
                                            Saisonende.
                                        </p>
                                    </li>
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
                        <h3 data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="800">
                            Melden Sie sich für unseren Newsletter an, um über die
                            wichtigsten Vorhersagen auf dem Laufenden zu bleiben
                        </h3>

                        <div class="email-signup-input-wrapper" data-aos="fade-left" data-aos-easing="ease-in-sine"
                            data-aos-duration="1100">
                            <input type="email" class="email-signup-input email-input"
                                placeholder="Geben Sie Ihre E-Mail-Adresse ein" required />
                            <a href="" class="butn email-signup-submit-btn submit-btn"
                                onclick="validateNews()">Abonnieren</a>
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
            <h2 class="section-heading text-center pb-5">Warum Uns Wählen</h2>
            <div class="home_why_choose_us_cards_wrap">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="home_why_choose_us_cards">
                            <div class="home_why_choose_us_logo-container">
                                <div class="home_why_choose_us_logo1 home_why_choose_us_logo"></div>
                            </div>
                            <div class="home_why_choose_us_cards_content">
                                <h3>
                                    Authentisches Österreichisches Fantasy-Fußball-Erlebnis
                                </h3>
                                <p>
                                    Tauche ein in das Beste des österreichischen Fußballs mit
                                    echten Teams, Spielern und Ligen. Vom Bundesliga-Rivalen
                                    bis zu regionalen Clubs – unsere Fantasy-Fußball-Plattform
                                    bringt dir die Aufregung des österreichischen Fußballs
                                    direkt auf dein Gerät.
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
                                <h3>Anpassbare und Wettbewerbsfähige Ligen</h3>
                                <p>
                                    Egal, ob du einer öffentlichen Liga beitrittst, Freunde zu
                                    einer privaten Liga einlädst oder Kopf-an-Kopf gegen
                                    Rivalen spielst, unsere Plattform bietet eine Vielzahl von
                                    Fantasy-Fußball-Ligen, die jedem Spielstil und jedem
                                    Fähigkeitsniveau gerecht werden.
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
                                <h3>Echtzeit-Statistiken und Einblicke</h3>
                                <p>
                                    Erhalte Live-Spielstatistiken, detaillierte
                                    Spieleranalysen und Leistungsupdates, um klügere
                                    Entscheidungen für dein Fantasy-Fußball-Team zu treffen.
                                    Bleibe mit unseren stets aktuellen Nachrichten und
                                    Punkteständen immer auf dem neuesten Stand, um dein Team
                                    in der gesamten Saison wettbewerbsfähig zu halten.
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
        <h3 class="text-center">Haftungsausschluss</h3>
        <p>
            Diese Website und ihre Fantasy-Fußball-Dienste sind ausschließlich für
            Personen ab dem gesetzlichen Alter (18 Jahre oder älter) gemäß den
            geltenden Gesetzen vorgesehen. Durch die Nutzung unserer Plattform
            bestätigen Sie, dass Sie die Altersanforderungen für die Teilnahme an
            Fantasy-Fußball-Spielen erfüllen.
        </p>
        <p>
            Unsere Plattform dient ausschließlich Unterhaltungszwecken und ist
            nicht mit offiziellen Fußball-Ligen, einschließlich der
            Österreichischen Bundesliga oder anderen professionellen
            Fußballverbänden, verbunden. Alle Spielerstatistiken, Teamdaten und
            Spielergebnisse dienen nur zu Illustrationszwecken und spiegeln nicht
            immer reale Ergebnisse wider.
        </p>
        <p>
            Wir fördern, unterstützen oder bieten keine Form von Glücksspiel an.
            Die Teilnahme an Fantasy-Fußball ist keine Wettform, und von den
            Nutzern wird nicht verlangt, Geld zu setzen, um teilzunehmen. Alle
            Aktivitäten auf der Website sind für Spaß und freundliche Wettbewerbe
            unter den Nutzern gedacht.
        </p>
        <p>
            Wir setzen uns dafür ein, ein sicheres und angenehmes Erlebnis zu
            gewährleisten, und ermutigen zu einer verantwortungsvollen Teilnahme
            an allen Fantasy-Fußball-Aktivitäten.
        </p>
    </div>
</section>
<!-- Disclaimer Section Start -->
@endsection
