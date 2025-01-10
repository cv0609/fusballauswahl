@extends('front_end.layout.main')
@section('content')
<!-- Banner Section Start -->
<section class="pages-banner privacy-policy  bg-cover bg-no-repeat">
    <div class="container">
        <div class="banner-content">
            <h1>
            @lang('message.privacy_policy.title')
            </h1>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- After Banner Intro Text Section Start -->
<div class="after-banner-text py-5 mt-5">
    <div class="container">
        <div class="after-banner-text-wrap">
            <p>
            @lang('message.privacy_policy.intro_text')
            </p>
            <p>
            @lang('message.privacy_policy.agreement')
            </p>
        </div>
    </div>
</div>
<!-- After Banner Intro Text Section End-->

<!-- Footer Pages Content Section Start -->
<section class="footer-pages-content-section py-5">
    <div class="container">
        <div class="footer-pages-wrap">

            <div class="footer-pages-content-grp">
                <h3>
                    1. @lang('message.privacy_policy.information_we_collect')
                </h3>
                <p>
                @lang('message.privacy_policy.information_explanation')
                </p>
                <p>
                    <strong>
                    @lang('message.privacy_policy.personal_information')
                    </strong>
                </p>
                <ul>
                    <li>
                        <p>
                            <strong>
                            @lang('message.privacy_policy.registration_info')
                            </strong>
                            @lang('message.privacy_policy.registration_info_details')
                        </p>
                    </li>
                    <li>
                        <p>
                            <strong>
                            @lang('message.privacy_policy.profile_info')
                            </strong>
                            @lang('message.privacy_policy.profile_info_details')
                        </p>
                    </li>
                </ul>
                <p>
                    <strong>
                    @lang('message.privacy_policy.non_personal_information')
                    </strong>
                </p>
                <ul>
                    <li>
                        <p>
                            <strong>
                            @lang('message.privacy_policy.log_data')
                            </strong>
                            @lang('message.privacy_policy.log_data_details')
                        </p>
                    </li>
                    <li>
                        <p>
                            <strong>
                            @lang('message.privacy_policy.cookies')
                            </strong>
                            @lang('message.privacy_policy.cookies_details')
                        </p>
                    </li>
                </ul>
            </div>

            <div class="footer-pages-content-grp">
                <h3>
                    2. @lang('message.privacy_policy.how_we_use_information')
                </h3>
                <p>
                @lang('message.privacy_policy.usage_purpose')
                </p>
                <ul>
                    <li>
                        <p>
                            <strong>
                            @lang('message.privacy_policy.account_management')
                            </strong>
                            @lang('message.privacy_policy.account_management_details')
                        </p>
                    </li>
                    <li>
                        <p>
                            <strong>
                            @lang('message.privacy_policy.communication')
                            </strong>
                            @lang('message.privacy_policy.communication_details')
                        </p>
                    </li>
                    <li>
                        <p>
                            <strong>
                            @lang('message.privacy_policy.website_improvement')
                            </strong>
                            @lang('message.privacy_policy.website_improvement_details')
                        </p>
                    </li>
                    <li>
                        <p>
                            <strong>
                            @lang('message.privacy_policy.marketing')
                            </strong>
                            @lang('message.privacy_policy.marketing_details')
                        </p>
                    </li>
                    <li>
                        <p>
                            <strong>
                            @lang('message.privacy_policy.legal_compliance')
                            </strong>
                            @lang('message.privacy_policy.legal_compliance_details')
                        </p>
                    </li>
                </ul>
            </div>

            <div class="footer-pages-content-grp">
                <h3>
                    3. @lang('message.privacy_policy.how_we_protect_information')
                </h3>
                <p>
                @lang('message.privacy_policy.security_measures')
                </p>
                <ul>
                    <li>
                        <p>
                            <strong>
                            @lang('message.privacy_policy.encryption')
                            </strong>
                            @lang('message.privacy_policy.encryption_details')
                        </p>
                    </li>
                    <li>
                        <p>
                            <strong>
                            @lang('message.privacy_policy.access_controls')
                            </strong>
                            @lang('message.privacy_policy.access_controls_details')
                        </p>
                    </li>
                    <li>
                        <p>
                            <strong>
                            @lang('message.privacy_policy.regular_audits')
                            </strong>
                            @lang('message.privacy_policy.regular_audits_details')
                        </p>
                    </li>
                </ul>
                <p>
                @lang('message.privacy_policy.security_notice')
                </p>
            </div>

            <div class="footer-pages-content-grp">
                <h3>
                    4. @lang('message.privacy_policy.sharing_information')
                </h3>
                <p>
                @lang('message.privacy_policy.sharing_info_notice')
                </p>
                <ul>
                    <li>
                        <p>
                            <strong>
                            @lang('message.privacy_policy.service_providers')
                            </strong>
                            @lang('message.privacy_policy.service_providers_details')
                        </p>
                    </li>
                    <li>
                        <p>
                            <strong>
                            @lang('message.privacy_policy.legal_requirements')
                            </strong>
                            @lang('message.privacy_policy.legal_requirements_details')
                        </p>
                    </li>
                    <li>
                        <p>
                            <strong>
                            @lang('message.privacy_policy.business_transactions')
                            </strong>
                            @lang('message.privacy_policy.business_transactions_details')
                        </p>
                    </li>
                </ul>
            </div>

            <div class="footer-pages-content-grp">
                <h3>
                    5. @lang('message.privacy_policy.your_rights_and_options')
                </h3>
                <p>
                     @lang('message.privacy_policy.user_rights_details')
                </p>
                <ul>
                    <li>
                        <p>
                            <strong>
                            @lang('message.privacy_policy.right_to_access')
                            </strong>
                            @lang('message.privacy_policy.right_to_access_details')
                        </p>
                    </li>
                    <li>
                        <p>
                            <strong>
                            @lang('message.privacy_policy.right_to_correct')
                            </strong>
                            @lang('message.privacy_policy.right_to_correct_details')
                        </p>
                    </li>
                    <li>
                        <p>
                            <strong>
                            @lang('message.privacy_policy.right_to_delete')
                            </strong>
                            @lang('message.privacy_policy.right_to_delete_details')
                        </p>
                    </li>
                    <li>
                        <p>
                            <strong>
                            @lang('message.privacy_policy.right_to_transfer')
                            </strong>
                            @lang('message.privacy_policy.right_to_transfer_details')
                        </p>
                    </li>
                    <li>
                        <p>
                            <strong>
                            @lang('message.privacy_policy.right_to_object')
                            </strong>
                            @lang('message.privacy_policy.right_to_object_details')
                        </p>
                    </li>
                    <li>
                        <p>
                            <strong>
                                Recht auf Widerspruch:
                            </strong>
                            Sie haben das Recht, der Verarbeitung Ihrer Daten für
                            Direktmarketingzwecke zu widersprechen, und können sich jederzeit von
                            Marketing-Kommunikationen abmelden.
                        </p>
                    </li>
                </ul>
                <p>
                @lang('message.privacy_policy.contact_email', ['email' => 'info@fussballauswahl.com'])
                </p>
            </div>

            <div class="footer-pages-content-grp">
                <h3>
                    6. @lang('message.privacy_policy.cookies_and_tracking')
                </h3>
                <p>
                @lang('message.privacy_policy.cookies_notice')
                </p>
                <p>
                @lang('message.privacy_policy.cookie_policy_link')
                    <strong>Cookie-Richtlinie.</strong>
                </p>
            </div>

            <div class="footer-pages-content-grp">
                <h3>
                    7. @lang('message.privacy_policy.data_retention')
                </h3>
                <p>
                @lang('message.privacy_policy.data_retention_details')
                </p>
            </div>

            <div class="footer-pages-content-grp">
                <h3>
                    8. @lang('message.privacy_policy.third_party_links')
                </h3>
                <p>
                @lang('message.privacy_policy.third_party_links_details')
                </p>
            </div>

            <div class="footer-pages-content-grp">
                <h3>
                    9. @lang('message.privacy_policy.children_privacy')
                </h3>
                <p>
                @lang('message.privacy_policy.children_privacy_details')

                </p>
            </div>

            <div class="footer-pages-content-grp">
                <h3>
                    10. @lang('message.privacy_policy.changes_to_privacy_policy')
                </h3>
                <p>
                @lang('message.privacy_policy.changes_notice')
                </p>
            </div>

            <div class="footer-pages-content-grp">
                <h3>
                    11. @lang('message.privacy_policy.contact_us')
                </h3>
                <p>
                @lang('message.privacy_policy.contact_notice')
                </p>
                <p>
                    <strong>
                    @lang('message.privacy_policy.email'):
                    </strong>
                    <a href="mailto:info@fussballauswahl.com">info@fussballauswahl.com</a>
                </p>
                <p>
                @lang('message.privacy_policy.commitment_to_privacy')
                </p>
            </div>


        </div>
    </div>
</section>
<!-- Footer Pages Content Section End -->
@endsection
