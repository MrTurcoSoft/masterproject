<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="keywords" content="DellaSoft,amenity supplier, hotel amenities, spa amenities, guest amenities, premium toiletries, hotel products, spa products, resort amenities, personalized amenities, high-quality amenities, hospitality products">
    <meta name="description" content="Amenity Supplier offers a wide range of high-quality amenity products for hotels, spas, and resorts. Discover our premium toiletries, guest amenities, and personalized service.">

    <meta name="author" content="MrTurco">

    <meta property="og:title" content="High-Quality Amenity Products Supplier - Amenity Supplier">
    <meta property="og:description" content="Amenity Supplier offers a wide range of high-quality amenity products for hotels, spas, and resorts. Discover our premium toiletries, guest amenities, and personalized service.">
    <meta property="og:url" content="https://www.amenitysupplier.com/">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{asset(config('settings.logo'))}}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="High-Quality Amenity Products Supplier - Amenity Supplier">
    <meta name="twitter:description" content="Amenity Supplier offers a wide range of high-quality amenity products for hotels, spas, and resorts. Discover our premium toiletries, guest amenities, and personalized service.">
    <meta name="twitter:image" content="{{asset(config('settings.logo'))}}">


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
    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{asset('porto/vendor/circle-flip-slideshow/css/component.css')}}">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{asset('porto/css/skins/default.css')}}">


    <style type="text/css">
        <!--
        a.gflag {vertical-align:middle;font-size:5px;padding:1px 0;background-repeat:no-repeat;background-image:url({{asset('frontend/img/flag/flags.png')}});margin-top: 20px;}
        a.gflag img {border:0;padding-top: 16px !important;}
        /*a.gflag:hover {background-image:url(//gtranslate.net/flags/32a.png);}*/
        a.gflag:hover {background-image:url({{asset('frontend/img/flag/flags.png')}});}
        #goog-gt-tt {display:none !important;}
        .goog-te-banner-frame {display:none !important;}
        .goog-te-menu-value:hover {text-decoration:none !important;}
        body {top:0 !important;}
        #google_translate_element2 {display:none!important;}
        -->
        .gflag-ml {
            margin-left: 87px!important;
        }


    </style>

    @yield('page-css')
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(97266777, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true,
            ecommerce:"dataLayer"
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/97266777" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>
