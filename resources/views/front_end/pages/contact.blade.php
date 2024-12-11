@extends('front_end.layout.main')
@section('content')
<!-- Banner Section Start -->
<section class="pages-banner contact-us  bg-cover bg-no-repeat">
    <div class="container">
        <div class="banner-content">
            <h1>
                Kontaktieren Sie uns
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
                Wir würden uns freuen, von Ihnen zu hören! Ob Sie eine Frage haben, Feedback geben
                möchten oder Unterstützung bei Ihrem Fantasy-Fußball-Erlebnis benötigen – wir sind hier,
                um zu helfen.
            </p>
            <p>
                Bitte zögern Sie nicht, uns über eine der folgenden Methoden zu kontaktieren:
            </p>
        </div>
    </div>
</div>
<!-- After Banner Intro Text Section End-->

<!-- Contact Us Content Section Start -->
<section class="header-pages-content-section bg-center bg-cover bg-fixed bg-no-repeat pt-5">
    <div class="container">
        <div class="header-pages-content pb-5">

            <div class="header-pages-cards">
                <h3>
                    E-Mail:
                </h3>
                <p>
                    Für Anfragen, Support-Anfragen oder Feedback können Sie uns eine E-Mail senden an:
                </p>
                <p>
                    <strong>
                        E-Mail:
                    </strong>
                    <a href="mailto:info@fussballauswahl.com">info@fussballauswahl.com</a>
                </p>
                <p>
                    Wir bemühen uns, alle E-Mails innerhalb von 24 Stunden zu beantworten.
                </p>
            </div>

            <div class="contact-form-section header-pages-cards ">

                <p>
                    Alternativ können Sie das untenstehende Kontaktformular ausfüllen, und wir werden uns so
                    schnell wie möglich bei Ihnen melden. Bitte geben Sie so viele Details wie möglich an, damit
                    wir Ihnen effizient weiterhelfen können.
                </p>
                <div class="contact-page-form-section">
                    <div class="row">

                        <div class="col-md-5">
                            <div class="header-pages-cards-content">
                                <div class="form-wrapper">
                                @if(Session::has('success'))
                               <span class="alert alert-success text-center" style="width:100%;">{{ Session::get('success') }}</span>
                            @endif
                                    <form action="{{ route('contact.save') }}" method="post" id="contactForm">
                                        <fieldset>
                                            <input class="contact-form" placeholder="Vollständiger Name" type="text"
                                                tabindex="1"  minlength="2" maxlength="100" name="full_name" id="full_name">
                                            <p class="text-danger d-none" id="nameError"></p>

                                        </fieldset>
                                        <fieldset>
                                            <input class="contact-email" placeholder="E-Mail-Adresse" type="email"
                                                tabindex="2" name="email" id="email" value="{{ old('email') }}">
                                          <p class="text-danger d-none" id="emailError"></p>

                                        </fieldset>
                                        <fieldset>
                                            <input class="contact-email" placeholder="Betreff" type="text" tabindex="3"
                                                name="subject" id="subject" value="{{ old('subject') }}">
                                    <p class="text-danger d-none" id="subjectError"></p>

                                        </fieldset>

                                        <fieldset>
                                            <textarea name="message" class="message" placeholder="Nachricht..." required
                                                minlength="10" maxlength="1000">{{ old('message') }}</textarea>
                                    <p class="text-danger d-none" id="messageError"></p>

                                        </fieldset>
                                        <fieldset>
                                            <button type="button" id="contact-btn" class="contact-submit butn"
                                                data-submit="...Sending">
                                                Absenden </button>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-7">
                            <div class="header-pages-cards-image contact-card1-image bg-center bg-cover bg-no-repeat ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</section>
<!-- Contact Us Content Section End -->


<!-- Disclaimer Section Start -->
<section class="disclaimer text-center pb-5">
    <div class="container">
        <h3 class="text-center">
            Haftungsausschluss
        </h3>
        <p>
            Diese Website und ihre Fantasy-Fußball-Dienste sind ausschließlich für Personen ab dem gesetzlichen
            Alter (18 Jahre oder älter) gemäß den
            geltenden Gesetzen vorgesehen. Durch die Nutzung unserer Plattform bestätigen Sie, dass Sie die
            Altersanforderungen für die Teilnahme an
            Fantasy-Fußball-Spielen erfüllen.
        </p>
        <p>
            Unsere Plattform dient ausschließlich Unterhaltungszwecken und ist nicht mit offiziellen Fußball-Ligen,
            einschließlich der Österreichischen
            Bundesliga oder anderen professionellen Fußballverbänden, verbunden. Alle Spielerstatistiken, Teamdaten
            und Spielergebnisse dienen nur zu
            Illustrationszwecken und spiegeln nicht immer reale Ergebnisse wider.
        </p>
        <p>
            Wir fördern, unterstützen oder bieten keine Form von Glücksspiel an. Die Teilnahme an Fantasy-Fußball
            ist keine Wettform, und von den Nutzern
            wird nicht verlangt, Geld zu setzen, um teilzunehmen. Alle Aktivitäten auf der Website sind für Spaß und
            freundliche Wettbewerbe unter den
            Nutzern gedacht.
        </p>
        <p>
            Wir setzen uns dafür ein, ein sicheres und angenehmes Erlebnis zu gewährleisten, und ermutigen zu einer
            verantwortungsvollen Teilnahme an
            allen Fantasy-Fußball-Aktivitäten.
        </p>
    </div>
</section>
<!-- Disclaimer Section Start -->
@endsection


@section('custom-script')

<script>
    $(document).ready(function () {
        var response = 'You have to complete the CAPTCHA.';
        @if($errors->has('g-recaptcha-response'))
            $('#captchaModal').modal('show');
            $('#cap-message').text(response);
        @endif


        $('#contact-btn').on('click', function() {
            var valid = true;

            $('.text-danger').addClass('d-none').css('font-size','15px');

            if ($('#full_name').val().trim() === '') {
                $('#nameError').removeClass('d-none').text('Full name field is required.');
                valid = false;
            }

            var email = $('#email').val().trim();
            
            if($('#email').val().trim() === ''){
                $('#emailError').removeClass('d-none').text('Email field is required.');
                valid = false;
            }

            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if ($('#email').val().trim() != '' && !emailPattern.test(email)) {
                $('#emailError').removeClass('d-none').text('Please enter a valid email address.');
                valid = false;
            }

            if ($('#subject').val().trim() === '') {
                $('#subjectError').removeClass('d-none').text('Subject field is required.');
                valid = false;
            }

            if ($('#message').val().trim() === '') {
                $('#messageError').removeClass('d-none').text('Message field is required.');
                valid = false;
            }

            if (!$('#agree').is(':checked')) {
                $('#agreeError').removeClass('d-none').text('You must agree to the terms.');
                valid = false;
            }

            if (valid) {
                $('#contactForm').submit();
            }
        });





    });
</script>


@endsection
