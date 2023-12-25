@extends('frontend.layouts.frontend')
@section('title',env('APP_NAME').' | Contact')
@section('page-css')
    {{--sayfaya özel css kodlarını eklemek için kullanın--}}

@endsection

@section('content')
    <section class="height-40 bg--dark imagebg page-title page-title--animate parallax" data-overlay="3">
        <div class="background-image-holder">
            <img alt="image" src="upload/banners/banner_contact.png" />
        </div>
        <div class="container pos-vertical-center">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 text-center">
                    <h2>Contact</h2>
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <section class="features features-10">

        <div class="feature bg--primary-1 col-md-4 text-center" style="background-color: black">

            <i class="icon icon--lg fa-solid fa-industry-windows color--white"></i>
            <h5>{{config('settings.firm')}}</h5>
            <p>
                {{config('settings.address')}}  <br>
                {{config('settings.postcode')}},{{config('settings.firmCounty')}},{{config('settings.firmCity')}}/Turkiye<br>
                E-mail :<a href="{{config('settings.email')}}" style="text-decoration: none;font-weight: bold">{{config('settings.email')}}</a><br>
                <small>Phone :<a href="tel:{{config('settings.phone')}}" style="text-decoration: none;font-weight: bold">{{config('settings.phone')}}</a></small><br>
                <small>Mobile Phone :<a href="tel:{{config('settings.phoneGsm')}}" style="text-decoration: none;font-weight: bold">{{config('settings.phoneGsm')}}</a></small><br>
            </p>
        </div>

        <div class="feature bg--secondary col-md-4 text-center">

            <i class="icon icon--lg fa-solid fa-store"></i>
            <h5>OPENING HOURS </h5>
            <p>
              Mon-Friday:  {{config('settings.workHour_week')}} <br>
              Sat       :  {{config('settings.workHour_weekend')}}
            </p>
        </div>

        <div class="feature bg--primary-1 col-md-4 text-center" style="background-color: black">

            <i class="icon icon--lg fa-solid fa-store color--white"></i>
            <h5>CONTACT US  </h5>
            <p>
                <a href="https://wa.me/{{config('settings.whatsapp')}}" target="_blank"><button class="btn btn-success socicon-whatsapp text-white-50"> How can we help you?</button></a>

            </p>
        </div>
        <div class="feature bg--secondary col-md-12 text-center">

            <i class="icon icon--lg fa-solid fa-store"></i>
            <h5>GET DIRECTIONS </h5>
            <p>

                {!! config('settings.gmaps') !!}
            </p>
        </div>

    </section>


@endsection


@section('page-js')
    {{--sayfaya özel js kodlarını eklemek için kullanın--}}

@endsection
