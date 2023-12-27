@extends('frontend.layouts.frontend')
@section('title',SiteHelpers::ayar('mark').' |'.SiteHelpers::GoogleTRS('Homepage'))
@section('page-css')
    {{--sayfaya özel css kodlarını eklemek için kullanın--}}

@endsection

@section('content')
    <section class="slider slider--animate height-90 cover cover-5" data-arrows="true" data-paging="true"
             data-timing="5000">
        <ul class="slides">

            @foreach($sliders as $key=>$slider)
            <li class="imagebg parallax" data-overlay="4">

                <div class="background-image-holder">
                    <img alt="image" src="{{asset("$slider->image")}}"/>
                </div>
                <div class="container pos-vertical-center" style="top: 50%;">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text-center">
                            <h2>{{\Stichoza\GoogleTranslate\GoogleTranslate::trans($slider->title,app()->getLocale())}}</h2>
                            <p class="lead">
                            </p>
                            <a class="btn btn--primary-3" href="{{$slider->url}}">
                                        <span class="btn__text">
                                           {{\Stichoza\GoogleTranslate\GoogleTranslate::trans($slider->btnText,app()->getLocale())}}

                                        </span>
                            </a>
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </li>
            @endforeach
        </ul>
    </section>

    <section>
        <div class="container">
            @if(\Illuminate\Support\Facades\Auth::user())
      <span CLASS="btn btn-primary btn--xs">BÖLÜM 1</span>
            @endif
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                    <p class="lead">{{\Stichoza\GoogleTranslate\GoogleTranslate::trans($section2->title,app()->getLocale())}}<br>
                        {!! \Stichoza\GoogleTranslate\GoogleTranslate::trans($section2->description,app()->getLocale()) !!}
                    </p>
                </div>
            </div>
            <!--end of row-->
        </div>

        <!--end of container-->
    </section>
    <section class="imageblock about-1 bg--white">

        <div class="imageblock__content col-md-6 col-sm-4 pos-right">
            <div class="background-image-holder">
                <img alt="image" src="{{asset($section3->image)}}"/>
            </div>
        </div>
        <div class="container">
            @if(\Illuminate\Support\Facades\Auth::user())
                <span CLASS="btn btn-primary btn--xs">BÖLÜM 2</span>
            @endif
            <div class="row">

                <div class="col-md-5 col-sm-8">
                    <h3>{{\Stichoza\GoogleTranslate\GoogleTranslate::trans($section3->title,app()->getLocale())}}</h3>
                    <p>
                        {!! \Stichoza\GoogleTranslate\GoogleTranslate::trans($section3->description,app()->getLocale()) !!}
                    </p>
                    <a class="btn mb--1" href="{{$section3->url}}">
                                <span class="btn__text">
                                    {{\Stichoza\GoogleTranslate\GoogleTranslate::trans($section3->btnText,app()->getLocale())}}
                                </span>
                    </a>

                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="bg--secondary space--sm shop-tabs">
        <div class="container">

            <div class="row">
                @if(\Illuminate\Support\Facades\Auth::user())
                   <div align="center">
                       <span CLASS="btn btn-primary btn--xs mb-10">BÖLÜM 3</span>
                   </div>
                @endif
                <div class="tabs-container tabs-1">
                    <ul class="tabs text-center">
@foreach($tabs as $key=>$tab)
                        <li class="{{$key==0 ? 'active':null }}">
                            <div class="tab__title btn">
                                <span class="btn__text">{{\Stichoza\GoogleTranslate\GoogleTranslate::trans($tab->title,app()->getLocale())}}</span>
                            </div>
                            <div class="tab__content">
                                <div class="row pos-vertical-align-columns">
                                    <div class="col-md-6">
                                        <p class="lead">
                                           {!! \Stichoza\GoogleTranslate\GoogleTranslate::trans($tab->description,app()->getLocale()) !!}
                                        </p>

                                        <a class="btn btn--primary-3" href="{{$tab->url}}">
                                                    <span class="btn__text">
                                                        {{\Stichoza\GoogleTranslate\GoogleTranslate::trans($tab->btnText,app()->getLocale())}}
                                                    </span>
                                        </a>

                                    </div>
                                    <div class="col-md-4 col-md-push-1 hidden-sm">
                                        <img alt="pic" src="{{$tab->image}}"/>
                                    </div>
                                </div>
                            </div>
                        </li>

                        @endforeach

                    </ul>
                </div>
                <!--end of tabs container-->
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="imagebg section--even parallax" data-overlay="4">

        <div class="background-image-holder">
            <img alt="image" src="{{$section5->image}}"/>
        </div>
        <div class="container">
            @if(\Illuminate\Support\Facades\Auth::user())
                <span CLASS="btn btn-primary btn--xs">BÖLÜM 4</span>
            @endif
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 text-center">
                    <h4>{{\Stichoza\GoogleTranslate\GoogleTranslate::trans($section5->title,app()->getLocale())}}</h4>
                    <a class="btn btn--primary-3" href="mailto:{{$section5->url}}">
                                <span class="btn__text">
                                   {{\Stichoza\GoogleTranslate\GoogleTranslate::trans($section5->btnText,app()->getLocale())}}
                                </span>
                    </a>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>

@endsection


@section('page-js')
    {{--sayfaya özel js kodlarını eklemek için kullanın--}}

@endsection
