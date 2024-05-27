<footer id="footer">
    <div class="container">
        <div class="row py-5">
            <div class="col text-center">
                <ul class="footer-social-icons social-icons social-icons-clean social-icons-big social-icons-opacity-light social-icons-icon-light mt-1">
                    <li class="social-icons-facebook"><a href="https://www.facebook.com/{{config('settings.facebook')}}" target="_blank" title="Facebook"><i class="fab fa-facebook-f text-2"></i></a></li>
                    <li class="social-icons-instagram"><a href="https://www.instgram.com/{{config('settings.instagram')}}" target="_blank" title="Instagram"><i class="fab fa-instagram text-2"></i></a></li>
                    <li class="social-icons-linkedin"><a href="https://www.linkedin.com/showcase/{{config('settings.linkedin')}}" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in text-2"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright footer-copyright-style-2">
        <div class="container py-2">
            <div class="row py-4">
                <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                    <p>
                        <span class="pe-0 pe-md-3 d-block d-md-inline-block"><i class="fa-solid fa-location-dot text-color-primary top-1 p-relative"></i><span class="text-color-light opacity-7 ps-1">{{SiteHelpers::GoogleTRS(config('settings.firmCounty'))}},{{SiteHelpers::GoogleTRS(config('settings.postcode'))}},{{SiteHelpers::GoogleTRS(config('settings.firmCity'))}}/{{SiteHelpers::GoogleTRS('Turkiye')}}</span></span>
                        <span class="pe-0 pe-md-3 d-block d-md-inline-block"><i class="fa-solid fa-phone text-color-primary top-1 p-relative"></i><a href="tel:{{config('settings.phoneGsm')}}" class="text-color-light opacity-7 ps-1">{{config('settings.phoneGsm')}}</a></span>
                        <span class="pe-0 pe-md-3 d-block d-md-inline-block"><i class="far fa-envelope text-color-primary top-1 p-relative"></i><a href="mailto:{{config('settings.email')}}" class="text-color-light opacity-7 ps-1">{{config('settings.email')}}</a></span>
                    </p>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end mb-4 mb-lg-0 pt-4 pt-lg-0">
                    <p>© Copyright {{date('Y')}}. All Rights Reserved.</p> ||
                    <p>Coded by <a href="https://by-turco.com" target="_blank" class="text-color-light opacity-7 ps-1">MrTurco</a>.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
