<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>503 - Maintenance Mode | {{SiteHelpers::ayar('mark')}}</title>

    <meta name="keywords" content="{{SiteHelpers::ayar('mark')}}" />
    <meta name="description" content="{{SiteHelpers::ayar('mark')}}">
    <meta name="author" content="MrTurco">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset(config('settings.favicon'))}}" type="image/png" />
    <link rel="apple-touch-icon" href="{{asset(config('settings.favicon'))}}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('porto/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('porto/vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('porto/vendor/animate/animate.compat.css')}}">
    <link rel="stylesheet" href="{{asset('porto/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('porto/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('porto/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('porto/vendor/magnific-popup/magnific-popup.min.css')}}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('porto/css/mrturco.css')}}">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{asset('porto/css/skins/default.css')}}">


</head>
<body data-plugin-page-transition>

<div class="body coming-soon">
    <header id="header" data-plugin-options="{'stickyEnabled': false}">
        <div class="header-body border border-top-0 border-end-0 border-start-0">
            <div class="header-container container py-2">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <p class="mb-0 text-dark"><strong>Get in touch!</strong> {{config('settings.phoneGsm')}}</span><span class="d-none d-sm-inline-block ps-1"> | <a href="mailto:{{config('settings.email')}}">{{config('settings.email')}}</a></span></p>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <ul class="header-social-icons social-icons me-2">
                                <li class="social-icons-instagram"><a href="https://www.instagram.com/{{config('settings.instagram')}}" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                <li class="social-icons-facebook"><a href="https://www.facebook.com/{{config('settings.facebook')}}" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-linkedin"><a href="https://www.linkedin.com/showcase/{{config('settings.linkedin')}}" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                            <div class="header-nav-features">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <div role="main" class="main" style="min-height: calc(100vh - 393px);">
        <div class="container">
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="logo">
                        <a href="{{url('/')}}">
                            <img width="100" height="48" src="{{asset(config('settings.logo'))}}" alt="{{config('settings.mark')}}">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <hr class="solid my-5">
                </div>
            </div>
            <section class="http-error py-0">
                <div class="row justify-content-center py-3">
                    <div class="col-6 text-center">
                        <div class="http-error-main">
                            <h2 class="mb-0">503!</h2>
                            <span class="text-6 font-weight-bold text-color-dark">Maintenance Mode Active!</span>
                            <p class="text-3 my-4 line-height-8">This is a brief update. We'll be back as soon as we can.  </p>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </div>

    @include('porto.inc.footer')
</div>

<!-- Vendor -->
<script src="{{asset('porto/vendor/plugins/js/plugins.min.js')}}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{asset('porto/js/theme.js')}}"></script>

<!-- Theme Custom -->
<script src="{{asset('porto/js/custom.js')}}"></script>

<!-- Theme Initialization Files -->
<script src="{{asset('porto/js/theme.init.js')}}"></script>

</body>
</html>
