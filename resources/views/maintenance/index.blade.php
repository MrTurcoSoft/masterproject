<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Material Design Coming Soon Template">
    <meta name="keywords" content="coming soon template, material comingsoon, material under construction, site under construction, countdown, mailchimp, responsive, material comingsoon design">
    <meta name="author" content="trendytheme.net">

    <title>{{SiteHelpers::ayar('mark').' | We are in maintenance'}}</title>

    <!--  favicon -->
    <link rel="shortcut icon" href="{{SiteHelpers::ayar('favicon')}}">
    <!--  apple-touch-icon -->

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'>
    <!-- FontAwesome CSS -->
    <link href="{{asset('maintenance/assets/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Material Icons CSS -->
    <link href="{{asset('maintenance/assets/fonts/iconfont/material-icons.css')}}" rel="stylesheet">
    <!-- materialize -->
    <link href="{{asset('maintenance/assets/materialize/css/materialize.min.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('maintenance/assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Style CSS -->
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet"/>
    <!-- Custom CSS -->
    <link href="{{asset('maintenance/assets/css/custom.css')}}" rel="stylesheet">
    <style type="text/css">
        <!--
        a.gflag {vertical-align:middle;font-size:65px;padding:1px 0;background-repeat:no-repeat;background-image:url({{asset('frontend/img/flag/flags.png')}});}
        a.gflag img {border:0;padding-top: 16px !important;}
        /*a.gflag:hover {background-image:url(//gtranslate.net/flags/32a.png);}*/
        a.gflag:hover {background-image:url({{asset('frontend/img/flag/flags.png')}});}
        #goog-gt-tt {display:none !important;}
        .goog-te-banner-frame {display:none !important;}
        .goog-te-menu-value:hover {text-decoration:none !important;}
        body {top:0 !important;}
        #google_translate_element2 {display:none!important;}
        -->
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="top">

<section class="banner-1 bg-fixed parallax-bg fullscreen-banner valign-wrapper" data-stellar-background-ratio="0.5" style="background-image: url({{asset('frontend/img/main/banner-1.jpg')}});">
    <div class="valign-cell">
        <div class="container">



            <div class="comingsoon-wrapper text-center">
                <div class="logo">
                    <a href="#">
                        <img src="{{asset(SiteHelpers::ayar('logo'))}}" width="50%" alt="Logo">
                    </a>
                </div><!-- /.logo -->
<div class="goog-te-menu-value">
    <a href="lang/change?lang=en"
       title="English" class="gflag"
       style="background-position:-0px -0px;">
        <img src="{{asset("frontend/img/main/blank.png")}}"
             height="32" width="32" alt="English"/>
    </a>
    <a href="lang/change?lang=de"
       title="{{$tr->trans('German','de')}}"
       class="gflag"
       style="background-position:-100px -0px;">
        <img src="{{asset("frontend/img/main/blank.png")}}"
             height="32" width="32" alt="German"/>
    </a>
    <a href="lang/change?lang=fr"
       title="{{$tr->trans('French','fr')}}"
       class="gflag"
       style="background-position:-200px -0px;">
        <img src="{{asset("frontend/img/main/blank.png")}}"
             height="32" width="32" alt="French"/>
    </a>

    <a href="lang/change?lang=ar-IQ"
       title="{{$tr->trans('Arabic','ar-IQ')}}"
       class="gflag"
       style="background-position:-300px -0px;">
        <img src="{{asset("frontend/img/main/blank.png")}}"
             height="32" width="32" alt="Arabic"/>
    </a>
    <a href="lang/change?lang=ru"
       title="{{$tr->trans('Russian','ru')}}"
       class="gflag"
       style="background-position:-400px -0px;">
        <img src="{{asset("frontend/img/main/blank.png")}}"
             height="32" width="32" alt="Russian"/>
    </a>
    <a
        href="lang/change?lang=ar-SA"
        title="{{$tr->trans('Arabic','ar-SA')}}"
        class="gflag"
        style="background-position:-500px -0px;">
        <img src="{{asset("frontend/img/main/blank.png")}}"
             height="32" width="32" alt="Arabic"/>
    </a>
    <a
        href="lang/change?lang=tr"
        title="{{$tr->trans('Turkish','tr')}}"
        class="gflag"
        style="background-position:-600px -0px;">
        <img src="{{asset("frontend/img/main/blank.png")}}"
             height="32" width="32" alt="Turkish"/>
    </a>
</div>
                <div class="mb-50">
                    <h1 class="intro-title black-text text-uppercase">{{$tr->trans(SiteHelpers::ayar('maintenance_message_title'),app()->getLocale())}}</h1>
                    <p style="color: white;"class="sub-intro lead">{{$tr->trans(SiteHelpers::ayar('maintenance_message_content'),app()->getLocale())}}</p>
                </div>

                <div class="countdown-wrapper mb-30 white-text" style="display: none;">
                    <ul class="countdown">
                        <li>
                            <span class="days white-text">00</span>
                            <p>days</p>
                        </li>
                        <li>
                            <span class="hours white-text">03</span>
                            <p>hours </p>
                        </li>
                        <li>
                            <span class="minutes white-text">00</span>
                            <p>minutes</p>
                        </li>
                        <li>
                            <span class="seconds white-text">00</span>
                            <p>seconds</p>
                        </li>
                    </ul><!-- /countdown -->
                </div><!-- /.countdown-wrapper -->


                <div class="col-md-6 col-md-offset-3">
                    <div class="subscribe-wrapper text-center">
                        <form style="display: none;" class="subscribe-form mailchimp white-form" method="post">

                            <div class="input-field">
                                <label class="sr-only" for="email">Email</label>
                                <input id="subscribeEmail" type="email" name="subscribeEmail" class="validate" autocomplete="off" >

                                <!-- to showing error message -->
                                <label for="subscribeEmail" data-error="wrong" data-success="right">Type your email</label>
                            </div>

                            <button type="submit" class="btn btn-lg pink waves-effect waves-light mt-30 text-capitalize">Subscribe Now</button>

                            <!-- to showing success messages -->
                            <p class="subscription-success text-center"></p>
                        </form>
                    </div><!-- /.subscribe-wrapper -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->

        </div><!-- /.comingsoon-wrapper -->

    </div><!-- /.container -->
    </div><!-- /.valign-cell -->

    <div style="display: none;" class="mouse-icon hidden-sm hidden-xs">
        <div class="wheel"></div>
    </div>
</section>


<section style="display: none;" class="section-padding hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="font-25 text-bold text-uppercase mb-30">About startup</h2>
                <p>Matrox material design multi-purpose html template. It comes with huge content and background variants. <a target="_blank" href="https://themeforest.net/item/matrox-material-design-multipurpose-html-template/16917670?ref=TrendyTheme">Matrox</a> is coming very soon. We are nearly there..</p>

                <div class="progress-section">
                    <span class="progress-title">UX Design</span>
                    <div class="progress">
                        <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                            <span>90%</span>
                        </div>
                    </div><!-- /.progress -->
                </div> <!-- progress-section end -->

                <div class="progress-section">
                    <span class="progress-title">Web Design</span>
                    <div class="progress">
                        <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                            <span>86%</span>
                        </div>
                    </div>
                </div> <!-- progress-section end -->

                <div class="progress-section">
                    <span class="progress-title">Web Development</span>
                    <div class="progress">
                        <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                            <span>86%</span>
                        </div>
                    </div>
                </div> <!-- progress-section end -->

            </div><!-- /.col-md-6 -->

            <div style="display: none;" class="col-md-5 col-md-offset-1">
                <h2 class="font-25 text-bold text-uppercase mb-30">Have any question?</h2>
                <p>You can use contact form below or contact us via e-mail at: <a href="mailto:trendytheme.net@gmail.com?Subject=Hello%20TrendyTheme" target="_top">trendytheme.net@gmail.com</a> Contact form is fully working and very easy to customize.</p>

                <form class="comingsoon-contact" name="contact-form" id="contactForm" action="sendemail.php" method="POST">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-field">
                                <input type="text" name="name" class="validate" id="name">
                                <label for="name">Name</label>
                            </div>

                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <div class="input-field">
                                <label class="sr-only" for="email">Email</label>
                                <input id="email" type="email" name="email" class="validate" >
                                <label for="email" data-error="wrong" data-success="right">Email</label>
                            </div>
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->

                    <div class="input-field">
                        <textarea name="message" id="message" class="materialize-textarea" ></textarea>
                        <label for="message">Message</label>
                    </div>

                    <button type="submit" name="submit" class="waves-effect waves-light btn submit-button pink mt-30 text-capitalize">Send Message</button>
                </form>

            </div><!-- /.col-md-5 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>


<footer style="display: none;" class="footer">
    <div class="primary-footer brand-bg text-center">
        <div class="container">

            <a href="#top" class="page-scroll btn-floating btn-large pink back-top waves-effect waves-light tt-animate btt" data-section="#top">
                <i class="material-icons">&#xE316;</i>
            </a>

            <ul class="social-link tt-animate ltr mt-20">
                <li><a target="_blank" href="https://www.facebook.com/trendytheme/"><i class="fa fa-facebook"></i></a></li>
                <li><a target="_blank" href="https://twitter.com/Trendy_Theme"><i class="fa fa-twitter"></i></a></li>
                <li><a target="_blank" href="https://dribbble.com/trendytheme"><i class="fa fa-dribbble"></i></a></li>
                <li><a target="_blank" href="#"><i class="fa fa-tumblr"></i></a></li>
                <li><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a target="_blank" href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a target="_blank" href="#"><i class="fa fa-rss"></i></a></li>
            </ul>

            <hr class="mt-15">

            <div class="row">
                <div class="col-md-12">
                    <div class="footer-logo">
                        <a target="_blank" href="https://themeforest.net/item/matrox-material-design-multipurpose-html-template/16917670?ref=TrendyTheme"><img src="assets/img/logo-white.png" alt=""></a>
                    </div>

                    <span class="copy-text">Shared by <i class="fa fa-love"></i><a href="https://bootstrapthemes.co">BootstrapThemes</a>
</span>
                    <div class="footer-intro">
                        <p>Matrox pack includes complete websites not just homepages, it comes with full website demos. Over 200+ ready html files only for 17$. Purchase <a target="_blank" href="https://themeforest.net/item/matrox-material-design-multipurpose-html-template/16917670?ref=TrendyTheme">Matrox</a> Now!</p>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

        </div><!-- /.container -->
    </div><!-- /.primary-footer -->
</footer>


<!-- Preloader -->
<div id="preloader">
    <div class="preloader-position">
        <div class="progress">
            <div class="indeterminate"></div>
        </div>
    </div>
</div>
<!-- End Preloader -->

<!-- jQuery -->
<script src="{{asset('maintenance/assets/js/jquery-2.1.3.min.js')}}"></script>
<script src="{{asset('maintenance/assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('maintenance/assets/materialize/js/materialize.min.js')}}"></script>
<script src="{{asset('maintenance/assets/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('maintenance/assets/js/coundown-timer.js')}}"></script>
<script src="{{asset('maintenance/assets/js/smoothscroll.min.js')}}"></script>
<script src="{{asset('maintenance/assets/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('maintenance/assets/js/imagesloaded.js')}}"></script>
<script src="{{asset('maintenance/assets/js/jquery.inview.min.js')}}"></script>
<script src="{{asset('maintenance/assets/js/ajaxchimp.js')}}"></script>
<script src="{{asset('maintenance/assets/js/ajaxchimp-config.js')}}"></script>
<script src="{{asset('maintenance/assets/js/scripts.js')}}"></script>

</body>

</html>
