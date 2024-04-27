@extends('frontend.layouts.frontend')
@section('title',SiteHelpers::ayar('mark').' | '.SiteHelpers::GoogleTRS('Contact'))
@section('page-css')
    {{--sayfaya özel css kodlarını eklemek için kullanın--}}

@endsection

@section('content')
    <section class="height-40 bg--dark imagebg page-title page-title--animate parallax" data-overlay="3">
        <div class="background-image-holder">
            <img alt="image" src="/upload/banners/banner_contact.png" />
        </div>
        <div class="container pos-vertical-center">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 text-center">
                    <h2>{{SiteHelpers::GoogleTRS('Contact')}}</h2>
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <section class="features features-10">

        <div class="feature bg--primary-1 col-md-4 text-center" style="background-color: black">

            <i class="icon icon--lg fa-solid fa-industry-windows color--white"></i>
            <h5>{{SiteHelpers::GoogleTRS(config('settings.firm'))}}</h5>
            <p>
                {{SiteHelpers::GoogleTRS(config('settings.address'))}}  <br>
                {{SiteHelpers::GoogleTRS(config('settings.postcode'))}},{{SiteHelpers::GoogleTRS(config('settings.firmCounty'))}},{{SiteHelpers::GoogleTRS(config('settings.firmCity'))}}/{{SiteHelpers::GoogleTRS('Turkiye')}}<br>
                E-mail :<a href="{{config('settings.email')}}" style="text-decoration: none;font-weight: bold">{{config('settings.email')}}</a><br>
                <small>Phone :<a href="tel:{{config('settings.phone')}}" style="text-decoration: none;font-weight: bold">{{SiteHelpers::GoogleTRS(config('settings.phone'))}}</a></small><br>
                <small>Mobile Phone :<a href="tel:{{config('settings.phoneGsm')}}" style="text-decoration: none;font-weight: bold">{{SiteHelpers::GoogleTRS(config('settings.phoneGsm'))}}</a></small><br>
            </p>
        </div>

        <div class="feature bg--secondary col-md-4 text-center">

            <i class="icon icon--lg fa-solid fa-store"></i>
            <h5>{{SiteHelpers::GoogleTRS('OPENING HOURS')}} </h5>
            <p>
              {{SiteHelpers::GoogleTRS('Mon-Friday:')}}  {{SiteHelpers::GoogleTRS(config('settings.workHour_week'))}} <br>
              {{SiteHelpers::GoogleTRS('Sat       :')}}  {{SiteHelpers::GoogleTRS(config('settings.workHour_weekend'))}}
            </p>
        </div>

        <div class="feature bg--primary-1 col-md-4 text-center" style="background-color: black">

            <i class="icon icon--lg fa-solid fa-store color--white"></i>
            <h5>{{SiteHelpers::GoogleTRS('CONTACT US')}}  </h5>
            <p>
                <a href="https://wa.me/{{config('settings.whatsapp')}}" target="_blank"><button class="btn btn-success socicon-whatsapp text-white-50"> {{SiteHelpers::GoogleTRS('How can we help you?')}}</button></a>

            </p>
        </div>
        <div class="feature bg--secondary col-md-12 text-center">

            <i class="icon icon--lg fa-solid fa-store"></i>
            <h5>{{SiteHelpers::GoogleTRS('GET DIRECTIONS')}} </h5>
            <p>

                {!! config('settings.gmaps') !!}
            </p>
        </div>

    </section>


@endsection


@section('page-js')
    {{--sayfaya özel js kodlarını eklemek için kullanın--}}

@endsection
