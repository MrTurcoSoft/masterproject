@extends('frontend.layouts.frontend')
@section('title',\SiteHelpers::ayar('mark').' | '.\Stichoza\GoogleTranslate\GoogleTranslate::trans('About us',app()->getLocale()))
@section('page-css')


@endsection

@section('content')
    <section class="height-40 bg--dark imagebg page-title page-title--animate parallax" data-overlay="3">
        <div class="background-image-holder">
            <img alt="image" src="{{$about->bg}}" />
        </div>
        <div class="container pos-vertical-center">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 text-center">
                    <h2>{{\Stichoza\GoogleTranslate\GoogleTranslate::trans($about->name,app()->getLocale())}}</h2>
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <section class="imageblock about-1">
        <div class="imageblock__content col-md-6 col-sm-4 pos-left">
            <div class="background-image-holder">
                <img alt="image" src="{{$about->image }}" />
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-push-7 col-sm-8 col-sm-push-4 text-justify">

                    {!! \Stichoza\GoogleTranslate\GoogleTranslate::trans($about->description,app()->getLocale()) !!}
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="stats-1 bg--secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h4>{{\Stichoza\GoogleTranslate\GoogleTranslate::trans('Our Brands and Certificates',app()->getLocale())}}</h4>
                </div>
            </div>
            <!--end of row-->
            <div class="row">
                @foreach($cert as $key => $value)
                <div class="col-sm-3">
                    <div class="text-center">
                        <a href="{{$value->image}}" data-lightbox="Certificates"><img src="{{$value->image}}" alt="{{$value->name}}"></a>
                        <h5>{{\Stichoza\GoogleTranslate\GoogleTranslate::trans($value->name,app()->getLocale())}}</h5>
                    </div>

                </div>
                @endforeach


            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>

@endsection


@section('page-js')

    <script>
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
        })
    </script>

@endsection
