@extends('porto.layouts.porto')
@section('title',SiteHelpers::ayar('mark').' | '.SiteHelpers::GoogleTRS('Contact'))
@section('page-css')
    {{--sayfaya özel css kodlarını eklemek için kullanın--}}

@endsection

@section('content')

    <section class="page-header page-header-modern bg-color-grey page-header-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="font-weight-bold text-dark">{{SiteHelpers::GoogleTRS('Contact Us')}}</h1>
                </div>

            </div>
        </div>
    </section>

    <div class="container py-4">

        <div class="row mb-2">

        </div>
        <div class="row mb-5">
            <div class="col-lg-4">

                <div class="overflow-hidden mb-3">
                    <h4 class="pt-5 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200" data-plugin-options="{'accY': -200}"><strong>{{SiteHelpers::GoogleTRS('Get in Touch')}}</strong> </h4>
                </div>
                <div class="overflow-hidden mb-3">
                    <p class="lead text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400" data-plugin-options="{'accY': -200}">
                        <a href="https://wa.me/{{config('settings.whatsapp')}}" target="_blank"><button class="btn btn-success text-white-50"><i class="fab fa-whatsapp"></i> {{SiteHelpers::GoogleTRS('How can we help you?')}}</button></a>
                    </p>
                </div>


            </div>
            <div class="col-lg-4 offset-lg-1 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800" data-plugin-options="{'accY': -200}">

                <h4 class="pt-5"><strong>{{SiteHelpers::GoogleTRS('Our Office')}}</strong> </h4>
                <ul class="list list-icons list-icons-style-3 mt-2">
                    <li><i class="fas fa-map-marker-alt top-6"></i> <strong>{{SiteHelpers::GoogleTRS('Address:')}}</strong> {{SiteHelpers::GoogleTRS(config('settings.address'))}}, {{SiteHelpers::GoogleTRS(config('settings.firmCounty'))}}, {{SiteHelpers::GoogleTRS(config('settings.postcode'))}}, {{SiteHelpers::GoogleTRS(config('settings.firmCity'))}}/{{SiteHelpers::GoogleTRS('Turkiye')}}</li>
                    <li><i class="fas fa-phone top-6"></i> <strong>{{SiteHelpers::GoogleTRS('Phone:')}}</strong> {{SiteHelpers::GoogleTRS(config('settings.phone'))}}</li>
                    <li><i class="fas fa-phone top-6"></i> <strong>{{SiteHelpers::GoogleTRS('Mobie Phone:')}}</strong> {{SiteHelpers::GoogleTRS(config('settings.phoneGsm'))}}</li>
                    <li><i class="fas fa-envelope top-6"></i> <strong>{{SiteHelpers::GoogleTRS('Email:')}}</strong> <a href="mailto:{{config('settings.email')}}">{{config('settings.email')}}</a></li>
                </ul>

            </div>
            <div class="col-lg-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1000" data-plugin-options="{'accY': -200}">

                <h4 class="pt-5"><strong>{{SiteHelpers::GoogleTRS('Business Hours')}}</strong></h4>
                <ul class="list list-icons list-dark mt-2">
                    <li><i class="far fa-clock top-6"></i> {{SiteHelpers::GoogleTRS('Mon-Friday')}} - {{SiteHelpers::GoogleTRS(config('settings.workHour_week'))}}</li>
                    <li><i class="far fa-clock top-6"></i> {{SiteHelpers::GoogleTRS('Saturday       ')}} - {{SiteHelpers::GoogleTRS(config('settings.workHour_weekend'))}}</li>
                    <li><i class="far fa-clock top-6"></i> {{SiteHelpers::GoogleTRS('Sunday       ')}} - {{SiteHelpers::GoogleTRS('Closed')}}</li>
                </ul>

            </div>
        </div>

    </div>

    <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
    <div id="googlemaps" class="google-map m-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300" style="height:450px;">
        {!! config('settings.gmaps') !!}
    </div>


@endsection


@section('page-js')
    {{--sayfaya özel js kodlarını eklemek için kullanın--}}

@endsection