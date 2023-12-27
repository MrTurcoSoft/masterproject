@extends('frontend.layouts.frontend')
@section('title',\Stichoza\GoogleTranslate\GoogleTranslate::trans(env('APP_NAME'),app()->getLocale()).' | '.\Stichoza\GoogleTranslate\GoogleTranslate::trans('Contact',app()->getLocale()))
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
                    <h2>{{\Stichoza\GoogleTranslate\GoogleTranslate::trans('Contact',app()->getLocale())}}</h2>
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <section class="features features-10">

        <div class="feature bg--primary-1 col-md-4 text-center" style="background-color: black">

            <i class="icon icon--lg fa-solid fa-industry-windows color--white"></i>
            <h5>{{\Stichoza\GoogleTranslate\GoogleTranslate::trans(config('settings.firm'),app()->getLocale())}}</h5>
            <p>
                {{\Stichoza\GoogleTranslate\GoogleTranslate::trans(config('settings.address'),app()->getLocale())}}  <br>
                {{\Stichoza\GoogleTranslate\GoogleTranslate::trans(config('settings.postcode'),app()->getLocale())}},{{\Stichoza\GoogleTranslate\GoogleTranslate::trans(config('settings.firmCounty'),app()->getLocale())}},{{\Stichoza\GoogleTranslate\GoogleTranslate::trans(config('settings.firmCity'),app()->getLocale())}}/{{\Stichoza\GoogleTranslate\GoogleTranslate::trans('Turkiye',app()->getLocale())}}<br>
                E-mail :<a href="{{config('settings.email')}}" style="text-decoration: none;font-weight: bold">{{config('settings.email')}}</a><br>
                <small>Phone :<a href="tel:{{config('settings.phone')}}" style="text-decoration: none;font-weight: bold">{{\Stichoza\GoogleTranslate\GoogleTranslate::trans(config('settings.phone'),app()->getLocale())}}</a></small><br>
                <small>Mobile Phone :<a href="tel:{{config('settings.phoneGsm')}}" style="text-decoration: none;font-weight: bold">{{\Stichoza\GoogleTranslate\GoogleTranslate::trans(config('settings.phoneGsm'),app()->getLocale())}}</a></small><br>
            </p>
        </div>

        <div class="feature bg--secondary col-md-4 text-center">

            <i class="icon icon--lg fa-solid fa-store"></i>
            <h5>{{\Stichoza\GoogleTranslate\GoogleTranslate::trans('OPENING HOURS',app()->getLocale())}} </h5>
            <p>
              {{\Stichoza\GoogleTranslate\GoogleTranslate::trans('Mon-Friday:',app()->getLocale())}}  {{\Stichoza\GoogleTranslate\GoogleTranslate::trans(config('settings.workHour_week'),app()->getLocale())}} <br>
              {{\Stichoza\GoogleTranslate\GoogleTranslate::trans('Sat       :',app()->getLocale())}}  {{\Stichoza\GoogleTranslate\GoogleTranslate::trans(config('settings.workHour_weekend'),app()->getLocale())}}
            </p>
        </div>

        <div class="feature bg--primary-1 col-md-4 text-center" style="background-color: black">

            <i class="icon icon--lg fa-solid fa-store color--white"></i>
            <h5>{{\Stichoza\GoogleTranslate\GoogleTranslate::trans('CONTACT US',app()->getLocale())}}  </h5>
            <p>
                <a href="https://wa.me/{{config('settings.whatsapp')}}" target="_blank"><button class="btn btn-success socicon-whatsapp text-white-50"> {{\Stichoza\GoogleTranslate\GoogleTranslate::trans('How can we help you?',app()->getLocale())}}</button></a>

            </p>
        </div>
        <div class="feature bg--secondary col-md-12 text-center">

            <i class="icon icon--lg fa-solid fa-store"></i>
            <h5>{{\Stichoza\GoogleTranslate\GoogleTranslate::trans('GET DIRECTIONS',app()->getLocale())}} </h5>
            <p>

                {!! config('settings.gmaps') !!}
            </p>
        </div>

    </section>


@endsection


@section('page-js')
    {{--sayfaya özel js kodlarını eklemek için kullanın--}}

@endsection