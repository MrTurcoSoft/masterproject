
<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset(config('settings.favicon'))}}">
    <title>@yield('title')</title>



    <link href="{{asset('frontend/css/bootstrap.css')}}" rel="stylesheet"/>
    <link href="{{asset('frontend/css/socicon.css')}}" rel="stylesheet"/>
    <link href="{{asset('frontend/css/iconsmind.css')}}" rel="stylesheet"/>
    <link href="{{asset('frontend/css/interface-icons.css')}}" rel="stylesheet"/>
    <link href="{{asset('frontend/css/owl.carousel.css')}}" rel="stylesheet"/>
    <link href="{{asset('frontend/css/lightbox.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('frontend/css/theme5661.css?x=2')}}" rel="stylesheet"/>
    <link href="{{asset('frontend/css/mrturco.css')}}" rel="stylesheet"/>
    <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700%7CMontserrat:400,700' rel='stylesheet' type='text/css'>
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
