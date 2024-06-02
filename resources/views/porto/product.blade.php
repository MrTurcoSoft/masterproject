@extends('porto.layouts.porto')
@section('title',SiteHelpers::ayar('mark').' | '.$tr->trans($product->name.' '.$product->title,app()->getLocale()))
@section('page-css')
    {{--sayfaya özel css kodlarını eklemek için kullanın--}}
    <style>
        .resp-sharing-button__link,
        .resp-sharing-button__icon {
            display: inline-block
        }

        .resp-sharing-button__link {
            text-decoration: none;
            color: #fff;
            margin: 0.5em
        }

        .resp-sharing-button {
            border-radius: 5px;
            transition: 25ms ease-out;
            padding: 0.5em 0.75em;
            font-family: Helvetica Neue,Helvetica,Arial,sans-serif
        }

        .resp-sharing-button__icon svg {
            width: 1em;
            height: 1em;
            margin-right: 0.4em;
            vertical-align: top
        }

        .resp-sharing-button--small svg {
            margin: 0;
            vertical-align: middle
        }

        /* Non solid icons get a stroke */
        .resp-sharing-button__icon {
            stroke: #fff;
            fill: none
        }

        /* Solid icons get a fill */
        .resp-sharing-button__icon--solid,
        .resp-sharing-button__icon--solidcircle {
            fill: #fff;
            stroke: none
        }

        .resp-sharing-button--twitter {
            background-color: #55acee
        }

        .resp-sharing-button--twitter:hover {
            background-color: #2795e9
        }

        .resp-sharing-button--pinterest {
            background-color: #bd081c
        }

        .resp-sharing-button--pinterest:hover {
            background-color: #8c0615
        }

        .resp-sharing-button--facebook {
            background-color: #3b5998
        }

        .resp-sharing-button--facebook:hover {
            background-color: #2d4373
        }

        .resp-sharing-button--tumblr {
            background-color: #35465C
        }

        .resp-sharing-button--tumblr:hover {
            background-color: #222d3c
        }

        .resp-sharing-button--reddit {
            background-color: #5f99cf
        }

        .resp-sharing-button--reddit:hover {
            background-color: #3a80c1
        }

        .resp-sharing-button--google {
            background-color: #dd4b39
        }

        .resp-sharing-button--google:hover {
            background-color: #c23321
        }

        .resp-sharing-button--linkedin {
            background-color: #0077b5
        }

        .resp-sharing-button--linkedin:hover {
            background-color: #046293
        }

        .resp-sharing-button--email {
            background-color: #777
        }

        .resp-sharing-button--email:hover {
            background-color: #5e5e5e
        }

        .resp-sharing-button--xing {
            background-color: #1a7576
        }

        .resp-sharing-button--xing:hover {
            background-color: #114c4c
        }

        .resp-sharing-button--whatsapp {
            background-color: #25D366
        }

        .resp-sharing-button--whatsapp:hover {
            background-color: #1da851
        }

        .resp-sharing-button--hackernews {
            background-color: #FF6600
        }
        .resp-sharing-button--hackernews:hover, .resp-sharing-button--hackernews:focus {   background-color: #FB6200 }

        .resp-sharing-button--vk {
            background-color: #507299
        }

        .resp-sharing-button--vk:hover {
            background-color: #43648c
        }

        .resp-sharing-button--facebook {
            background-color: #3b5998;
            border-color: #3b5998;
        }

        .resp-sharing-button--facebook:hover,
        .resp-sharing-button--facebook:active {
            background-color: #2d4373;
            border-color: #2d4373;
        }

        .resp-sharing-button--twitter {
            background-color: #55acee;
            border-color: #55acee;
        }

        .resp-sharing-button--twitter:hover,
        .resp-sharing-button--twitter:active {
            background-color: #2795e9;
            border-color: #2795e9;
        }

        .resp-sharing-button--tumblr {
            background-color: #35465C;
            border-color: #35465C;
        }

        .resp-sharing-button--tumblr:hover,
        .resp-sharing-button--tumblr:active {
            background-color: #222d3c;
            border-color: #222d3c;
        }

        .resp-sharing-button--email {
            background-color: #777777;
            border-color: #777777;
        }

        .resp-sharing-button--email:hover,
        .resp-sharing-button--email:active {
            background-color: #5e5e5e;
            border-color: #5e5e5e;
        }

        .resp-sharing-button--pinterest {
            background-color: #bd081c;
            border-color: #bd081c;
        }

        .resp-sharing-button--pinterest:hover,
        .resp-sharing-button--pinterest:active {
            background-color: #8c0615;
            border-color: #8c0615;
        }

        .resp-sharing-button--linkedin {
            background-color: #0077b5;
            border-color: #0077b5;
        }

        .resp-sharing-button--linkedin:hover,
        .resp-sharing-button--linkedin:active {
            background-color: #046293;
            border-color: #046293;
        }

        .resp-sharing-button--whatsapp {
            background-color: #25D366;
            border-color: #25D366;
        }

        .resp-sharing-button--whatsapp:hover,
        .resp-sharing-button--whatsapp:active {
            background-color: #1DA851;
            border-color: #1DA851;
        }

        .resp-sharing-button--telegram {
            background-color: #54A9EB;
        }

        .resp-sharing-button--telegram:hover {
            background-color: #4B97D1;}


    </style>

@endsection

@section('content')
    <section class="page-header page-header-modern bg-color-grey page-header-md ">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col">
                    <div class="row">
                        <div class="col-md-12 align-self-center p-static order-2 text-center">
                            <div class="overflow-hidden pb-2">
                                <h1 class="text-dark font-weight-bold text-9 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">{{$tr->trans($product->name,app()->getLocale())}} <br> {{$tr->trans($product->title,app()->getLocale())}}</h2>
                            </div>
                        </div>
                        <div class="col-md-12 align-self-center order-1">
                            <ul class="breadcrumb d-block text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
                                <li><a href="{{route('home')}}">{{$tr->trans('Home',app()->getLocale())}}</a></li>
                                <li><a href="{{route('category',$category->slug)}}">{{$tr->trans($category->cat_name,app()->getLocale())}}</a></li>

                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="container pt-2 pb-4">

        <div class="row pb-4 mb-2">
            <div class="col-md-6 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">

                <div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark mt-3" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}">
                    <div>
                        <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                            <img src="{{$product->image}}" class="img-fluid border-radius-0" alt="{{$tr->trans($product->name,app()->getLocale())}}">
                        </div>
                    </div>
                </div>

                <hr class="solid my-5 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1000">

                <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1100">
                    <strong class="text-uppercase text-1 me-3 text-dark float-start position-relative top-2">{{$tr->trans('Share',app()->getLocale())}}</strong>
                    <!-- Sharingbutton Facebook -->
                    <a class="resp-sharing-button__link" href="https://facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" target="_blank" rel="noopener" aria-label="">
                        <div class="resp-sharing-button resp-sharing-button--facebook resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solidcircle">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 0C5.38 0 0 5.38 0 12s5.38 12 12 12 12-5.38 12-12S18.62 0 12 0zm3.6 11.5h-2.1v7h-3v-7h-2v-2h2V8.34c0-1.1.35-2.82 2.65-2.82h2.35v2.3h-1.4c-.25 0-.6.13-.6.66V9.5h2.34l-.24 2z"/></svg>
                            </div>
                        </div>
                    </a>

                    <!-- Sharingbutton Twitter -->
                    <a class="resp-sharing-button__link" href="https://twitter.com/intent/tweet/?text=Elevate%20Your%20Hospitality%20Experience%20with%20Amenity%20Supply%3A%20Your%20Premier%20Partner%20for%20Quality%20Hotel%20Products&amp;url={{ urlencode(request()->url()) }}" target="_blank" rel="noopener" aria-label="">
                        <div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solidcircle">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 0C5.38 0 0 5.38 0 12s5.38 12 12 12 12-5.38 12-12S18.62 0 12 0zm5.26 9.38v.34c0 3.48-2.64 7.5-7.48 7.5-1.48 0-2.87-.44-4.03-1.2 1.37.17 2.77-.2 3.9-1.08-1.16-.02-2.13-.78-2.46-1.83.38.1.8.07 1.17-.03-1.2-.24-2.1-1.3-2.1-2.58v-.05c.35.2.75.32 1.18.33-.7-.47-1.17-1.28-1.17-2.2 0-.47.13-.92.36-1.3C7.94 8.85 9.88 9.9 12.06 10c-.04-.2-.06-.4-.06-.6 0-1.46 1.18-2.63 2.63-2.63.76 0 1.44.3 1.92.82.6-.12 1.95-.27 1.95-.27-.35.53-.72 1.66-1.24 2.04z"/></svg>
                            </div>
                        </div>
                    </a>

                    <!-- Sharingbutton Tumblr -->
                    <a class="resp-sharing-button__link" href="https://www.tumblr.com/widgets/share/tool?posttype=link&amp;title=Elevate%20Your%20Hospitality%20Experience%20with%20Amenity%20Supply%3A%20Your%20Premier%20Partner%20for%20Quality%20Hotel%20Products&amp;caption=Elevate%20Your%20Hospitality%20Experience%20with%20Amenity%20Supply%3A%20Your%20Premier%20Partner%20for%20Quality%20Hotel%20Products&amp;content={{ urlencode(request()->url()) }}&amp;canonicalUrl={{ urlencode(request()->url()) }}&amp;shareSource=tumblr_share_button" target="_blank" rel="noopener" aria-label="">
                        <div class="resp-sharing-button resp-sharing-button--tumblr resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solidcircle">
                                <svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
        <path d="M12,0C5.383,0,0,5.383,0,12s5.383,12,12,12s12-5.383,12-12S18.617,0,12,0z M15.492,17.616C11.401,19.544,9.5,17,9.5,14.031 V9.5h-2V8.142c0.549-0.178,1.236-0.435,1.627-0.768c0.393-0.334,0.707-0.733,0.943-1.2c0.238-0.467,0.401-0.954,0.49-1.675H12.5v3h2 v2h-2v3.719c0,2.468,1.484,2.692,2.992,1.701V17.616z"/>
     </svg>
                            </div>
                        </div>
                    </a>

                    <!-- Sharingbutton E-Mail -->
                    <a class="resp-sharing-button__link" href="mailto:?subject=Elevate%20Your%20Hospitality%20Experience%20with%20Amenity%20Supply%3A%20Your%20Premier%20Partner%20for%20Quality%20Hotel%20Products&amp;body={{ urlencode(request()->url()) }}" target="_self" rel="noopener" aria-label="">
                        <div class="resp-sharing-button resp-sharing-button--email resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solidcircle">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 0C5.38 0 0 5.38 0 12s5.38 12 12 12 12-5.38 12-12S18.62 0 12 0zm8 16c0 1.1-.9 2-2 2H6c-1.1 0-2-.9-2-2V8c0-1.1.9-2 2-2h12c1.1 0 2 .9 2 2v8z"/><path d="M17.9 8.18c-.2-.2-.5-.24-.72-.07L12 12.38 6.82 8.1c-.22-.16-.53-.13-.7.08s-.15.53.06.7l3.62 2.97-3.57 2.23c-.23.14-.3.45-.15.7.1.14.25.22.42.22.1 0 .18-.02.27-.08l3.85-2.4 1.06.87c.1.04.2.1.32.1s.23-.06.32-.1l1.06-.9 3.86 2.4c.08.06.17.1.26.1.17 0 .33-.1.42-.25.15-.24.08-.55-.15-.7l-3.57-2.22 3.62-2.96c.2-.2.24-.5.07-.72z"/></svg>
                            </div>
                        </div>
                    </a>

                    <!-- Sharingbutton Pinterest -->
                    <a class="resp-sharing-button__link" href="https://pinterest.com/pin/create/button/?url={{ urlencode(request()->url()) }}&amp;media={{ urlencode(request()->url()) }}&amp;description=Elevate%20Your%20Hospitality%20Experience%20with%20Amenity%20Supply%3A%20Your%20Premier%20Partner%20for%20Quality%20Hotel%20Products" target="_blank" rel="noopener" aria-label="">
                        <div class="resp-sharing-button resp-sharing-button--pinterest resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solidcircle">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 0C5.38 0 0 5.38 0 12s5.38 12 12 12 12-5.38 12-12S18.62 0 12 0zm1.4 15.56c-1 0-1.94-.53-2.25-1.14l-.65 2.52c-.4 1.45-1.57 2.9-1.66 3-.06.1-.2.07-.22-.04-.02-.2-.32-2 .03-3.5l1.18-5s-.3-.6-.3-1.46c0-1.36.8-2.37 1.78-2.37.85 0 1.25.62 1.25 1.37 0 .85-.53 2.1-.8 3.27-.24.98.48 1.78 1.44 1.78 1.73 0 2.9-2.24 2.9-4.9 0-2-1.35-3.5-3.82-3.5-2.8 0-4.53 2.07-4.53 4.4 0 .5.1.9.25 1.23l-1.5.82c-.36-.64-.54-1.43-.54-2.28 0-2.6 2.2-5.74 6.57-5.74 3.5 0 5.82 2.54 5.82 5.27 0 3.6-2 6.3-4.96 6.3z"/></svg>
                            </div>
                        </div>
                    </a>

                    <!-- Sharingbutton LinkedIn -->
                    <a class="resp-sharing-button__link" href="https://www.linkedin.com/shareArticle?mini=true&amp;url={{ urlencode(request()->url()) }}&amp;title=Elevate%20Your%20Hospitality%20Experience%20with%20Amenity%20Supply%3A%20Your%20Premier%20Partner%20for%20Quality%20Hotel%20Products&amp;summary=Elevate%20Your%20Hospitality%20Experience%20with%20Amenity%20Supply%3A%20Your%20Premier%20Partner%20for%20Quality%20Hotel%20Products&amp;source={{ urlencode(request()->url()) }}" target="_blank" rel="noopener" aria-label="">
                        <div class="resp-sharing-button resp-sharing-button--linkedin resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solidcircle">
                                <svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
        <path d="M12,0C5.383,0,0,5.383,0,12s5.383,12,12,12s12-5.383,12-12S18.617,0,12,0z M9.5,16.5h-2v-7h2V16.5z M8.5,7.5 c-0.553,0-1-0.448-1-1c0-0.552,0.447-1,1-1s1,0.448,1,1C9.5,7.052,9.053,7.5,8.5,7.5z M18.5,16.5h-3V13c0-0.277-0.225-0.5-0.5-0.5 c-0.276,0-0.5,0.223-0.5,0.5v3.5h-3c0,0,0.031-6.478,0-7h3v0.835c0,0,0.457-0.753,1.707-0.753c1.55,0,2.293,1.12,2.293,3.296V16.5z" />
    </svg>
                            </div>
                        </div>
                    </a>

                    <!-- Sharingbutton WhatsApp -->
                    <a class="resp-sharing-button__link" href="whatsapp://send?text=Elevate%20Your%20Hospitality%20Experience%20with%20Amenity%20Supply%3A%20Your%20Premier%20Partner%20for%20Quality%20Hotel%20Products%20{{ urlencode(request()->url()) }}" target="_blank" rel="noopener" aria-label="">
                        <div class="resp-sharing-button resp-sharing-button--whatsapp resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solidcircle">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 24 24"><path d="m12 0c-6.6 0-12 5.4-12 12s5.4 12 12 12 12-5.4 12-12-5.4-12-12-12zm0 3.8c2.2 0 4.2 0.9 5.7 2.4 1.6 1.5 2.4 3.6 2.5 5.7 0 4.5-3.6 8.1-8.1 8.1-1.4 0-2.7-0.4-3.9-1l-4.4 1.1 1.2-4.2c-0.8-1.2-1.1-2.6-1.1-4 0-4.5 3.6-8.1 8.1-8.1zm0.1 1.5c-3.7 0-6.7 3-6.7 6.7 0 1.3 0.3 2.5 1 3.6l0.1 0.3-0.7 2.4 2.5-0.7 0.3 0.099c1 0.7 2.2 1 3.4 1 3.7 0 6.8-3 6.9-6.6 0-1.8-0.7-3.5-2-4.8s-3-2-4.8-2zm-3 2.9h0.4c0.2 0 0.4-0.099 0.5 0.3s0.5 1.5 0.6 1.7 0.1 0.2 0 0.3-0.1 0.2-0.2 0.3l-0.3 0.3c-0.1 0.1-0.2 0.2-0.1 0.4 0.2 0.2 0.6 0.9 1.2 1.4 0.7 0.7 1.4 0.9 1.6 1 0.2 0 0.3 0.001 0.4-0.099s0.5-0.6 0.6-0.8c0.2-0.2 0.3-0.2 0.5-0.1l1.4 0.7c0.2 0.1 0.3 0.2 0.5 0.3 0 0.1 0.1 0.5-0.099 1s-1 0.9-1.4 1c-0.3 0-0.8 0.001-1.3-0.099-0.3-0.1-0.7-0.2-1.2-0.4-2.1-0.9-3.4-3-3.5-3.1s-0.8-1.1-0.8-2.1c0-1 0.5-1.5 0.7-1.7s0.4-0.3 0.5-0.3z"/></svg>
                            </div>
                        </div>
                    </a>

                    <!-- Sharingbutton Telegram -->
                    <a class="resp-sharing-button__link" href="https://telegram.me/share/url?text=Elevate%20Your%20Hospitality%20Experience%20with%20Amenity%20Supply%3A%20Your%20Premier%20Partner%20for%20Quality%20Hotel%20Products&amp;url={{ urlencode(request()->url()) }}" target="_blank" rel="noopener" aria-label="">
                        <div class="resp-sharing-button resp-sharing-button--telegram resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solidcircle">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 23.5c6.35 0 11.5-5.15 11.5-11.5S18.35.5 12 .5.5 5.65.5 12 5.65 23.5 12 23.5zM2.505 11.053c-.31.118-.505.738-.505.738s.203.62.513.737l3.636 1.355 1.417 4.557a.787.787 0 0 0 1.25.375l2.115-1.72a.29.29 0 0 1 .353-.01L15.1 19.85a.786.786 0 0 0 .746.095.786.786 0 0 0 .487-.573l2.793-13.426a.787.787 0 0 0-1.054-.893l-15.568 6z" fill-rule="evenodd"/></svg>
                            </div>
                        </div>
                    </a>

                </div>

            </div>
            <div class="col-md-6">
                <div class="overflow-hidden">
                    <h4>{{$tr->trans($product->name,app()->getLocale())}} <br> {{$tr->trans($product->title,app()->getLocale())}}</h4>
                    <h2 class="text-color-dark font-weight-normal text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="600">{{$tr->trans('Product',app()->getLocale())}} <strong class="font-weight-extra-bold">{{$tr->trans('Description',app()->getLocale())}}</strong></h2>
                </div>
                <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                    {!! $tr->trans($product->description,app()->getLocale()) !!}

                </p>

                <div class="overflow-hidden mt-4">
                    <h2 class="text-color-dark font-weight-normal text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1000">{{$tr->trans('Product',app()->getLocale())}} <strong class="font-weight-extra-bold">{{$tr->trans('Spesifications',app()->getLocale())}}</strong></h2>
                </div>
                <ul class="list list-icons list-primary list-borders text-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">
                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">{{$tr->trans('Volume/Pack Of',app()->getLocale())}}:</strong> {{$tr->trans($product->detay->volume,app()->getLocale())}}</li>
                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">{{$tr->trans('Box Sizes',app()->getLocale())}}:</strong> {{SiteHelpers::GoogleTRS($product->detay->boxsize)}}</li>
                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">{{SiteHelpers::GoogleTRS('Quantity in Box')}}:</strong> {{SiteHelpers::GoogleTRS($product->detay->qtyBox)}}</li>
                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">{{SiteHelpers::GoogleTRS('Box Net Weight')}}:</strong> {{SiteHelpers::GoogleTRS($product->detay->BoxNetW)}}</li>
                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">{{SiteHelpers::GoogleTRS('Box Gross Weight')}}:</strong> {{SiteHelpers::GoogleTRS($product->detay->BoxGrossW)}}</li>
                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">{{SiteHelpers::GoogleTRS('Boxes on Pallet')}}:</strong> {{SiteHelpers::GoogleTRS($product->detay->BoxOnPallet)}}</li>
                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">{{SiteHelpers::GoogleTRS('HS CODE')}}:</strong> {{SiteHelpers::GoogleTRS($product->detay->hsCode)}}</li>
                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">{{SiteHelpers::GoogleTRS('BARCODE')}}:</strong> {{SiteHelpers::GoogleTRS($product->detay->barcode)}}</li>
                </ul>
            </div>
        </div>

    </div>

    <section class="section section-height-3 bg-color-grey m-0 border-0 appear-animation" data-appear-animation="fadeIn" data-plugin-options="{'accY': -150}">
        <div class="container py-4">
            <h4 class="mb-3 text-4 text-uppercase">{{SiteHelpers::GoogleTRS('Related')}} <strong class="font-weight-extra-bold">{{SiteHelpers::GoogleTRS('Products')}}</strong></h4>
            <div class="row">
                @foreach($relateProducts->random(4) as $key => $value)
                <div class="col-12 col-sm-6 col-lg-3 mb-4">
                    <div class="portfolio-item">
                        <a href="{{route('product',$value->slug)}}" aria-label="">
									<span class="thumb-info thumb-info-lighten thumb-info-no-borders border-radius-0">
										<span class="thumb-info-wrapper border-radius-0">
											<img src="{{$value->image}}" class="img-fluid border-radius-0" alt="{{SiteHelpers::GoogleTRS($value->name.' '.$value->title)}}">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">{{SiteHelpers::GoogleTRS($value->name)}}</span>
												<span class="thumb-info-type">{{SiteHelpers::GoogleTRS($value->title)}}</span>
											</span>
											<span class="thumb-info-action">
												<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
											</span>
										</span>
									</span>
                        </a>
                    </div>
                </div>
               @endforeach
            </div>
        </div>
    </section>


@endsection


@section('page-js')
    {{--sayfaya özel js kodlarını eklemek için kullanın--}}

@endsection