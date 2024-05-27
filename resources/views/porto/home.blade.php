@extends('porto.layouts.porto')
@section('title',SiteHelpers::ayar('mark').' |'.SiteHelpers::GoogleTRS('Homepage'))
@section('page-css')
    {{--sayfaya özel css kodlarını eklemek için kullanın--}}
    <style>
        .my-slider::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Siyah rengin %50 opaklıkla uygulanması */
        }
    </style>

@endsection

@section('content')
    <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 7000}" data-dynamic-height="['670px','670px','670px','550px','500px']" style="height: 670px;">
        <div class="owl-stage-outer">
            <div class="owl-stage">

                <!-- Carousel Slide  -->
                @foreach($sliders as $key=>$slider)
                <div class="owl-item position-relative my-slider" style="background-image: url({{asset("$slider->image")}}); background-color: #2E3136; background-size: cover; background-position: center;">
                    <div class="container position-relative z-index-1 h-100">
                        <div class="d-flex flex-column align-items-center justify-content-center h-100">
                            <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorter" data-plugin-options="{'minWindowWidth': 0}">
											<span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
												<img src="{{asset('porto/img/slides/slide-title-border.png')}}" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
											</span>

                                <span class="position-relative">  {{SiteHelpers::GoogleTRS($slider->title)}}  <span class="position-absolute left-50pct transform3dx-n50 top-0 mt-4"><img src="{{asset('porto/img/slides/slide-blue-line.png')}}" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}" alt="" /></span></span>
                                <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
												<img src="{{asset('porto/img/slides/slide-title-border.png')}}" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
											</span>
                            </h3>
                            <h1 class="text-color-light font-weight-extra-bold text-12 mb-3 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">{{SiteHelpers::GoogleTRS($slider->content)}}</h1>
                            <p class="text-4 text-color-light font-weight-light opacity-7 mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0}">{{SiteHelpers::GoogleTRS($slider->content2)}}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <div class="owl-nav">
            <button type="button" role="presentation" class="owl-prev" aria-label="Previous"></button>
            <button type="button" role="presentation" class="owl-next" aria-label="Next"></button>
        </div>
        <div class="owl-dots mb-5">
            @foreach($sliders as $key=>$slider)
            <button role="button" class="owl-dot {{($key==0)?'active':''}}" aria-label="Slide {{($key+1)}}"><span></span></button>
            @endforeach
        </div>
    </div>

    <div class="home-intro bg-primary" id="home-intro">
        <div class="container">
            @if(\Illuminate\Support\Facades\Auth::user())
                <span CLASS="btn btn-primary btn--xs">BÖLÜM 1</span>
            @endif
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <p>
                         <span class="highlighted-word">{{SiteHelpers::GoogleTRS($section2->title)}}</span>
                        <span><small>{!! SiteHelpers::GoogleTRS($section2->description) !!}</small></span>
                    </p>
                </div>

            </div>

        </div>
    </div>

    <div class="container">
        @if(\Illuminate\Support\Facades\Auth::user())
            <span CLASS="btn btn-primary btn--xs">BÖLÜM 2</span>
        @endif
            <div class="row py-4 mb-2">
                <div class="col-md-7 order-2">
                    <div class="overflow-hidden">
                        <h2 class="text-color-dark font-weight-bold text-12 mb-2 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">{{SiteHelpers::GoogleTRS($section3->title)}}</h2>
                    </div>

                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">{!! SiteHelpers::GoogleTRS($section3->description) !!}</p>

                    <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                    <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                        <div class="col-lg-6">

                            <a href="{{$section3->url}}" class="btn btn-modern btn-primary mt-3"> {{SiteHelpers::GoogleTRS($section3->btnText)}}</a>
                        </div>

                    </div>
                </div>
                <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                    <img src="{{asset($section3->image)}}" class="img-fluid mb-2" alt="{{SiteHelpers::ayar('mark')}}">
                </div>
            </div>

    </div>

    <div class="container mb-5 pb-4">
        @if(\Illuminate\Support\Facades\Auth::user())
            <div align="center">
                <span CLASS="btn btn-primary btn--xs mb-10">BÖLÜM 3</span>
            </div>
        @endif


                <div class="col-lg-12 ">
                <div class="tabs">
                    <ul class="nav nav-tabs">
                        @foreach($tabs as $key=>$tab)
                        <li class="nav-item">
                            <a class="nav-link {{$key==0 ? 'active':null }}" href="#{{strtolower(str_replace(' ', '', $tab->title))}}" data-bs-toggle="tab">{{SiteHelpers::GoogleTRS(strtoupper($tab->title))}}</a>
                        </li>
                       @endforeach
                    </ul>
                    <div class="tab-content">
                        @foreach($tabs as $key=>$tab)
                        <div id="{{strtolower(str_replace(' ', '', $tab->title))}}" class="tab-pane {{$key==0 ? 'active':null }}">
                            <article class="post post-medium">
                                <div class="row mb-3">
                                    <div class="col-lg-5">
                                        <div class="post-image">
                                            <a href="javascript:void(0)">
                                                <img src="{{$tab->image}}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="{{$tab->title}}" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="post-content">
                                            <h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2"><a href="javascript:void(0)">{{SiteHelpers::GoogleTRS($tab->title)}}</a></h2>
                                            <p class="mb-0"> {!! SiteHelpers::GoogleTRS($tab->description) !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </article>

                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
    </div>
    <section class="parallax section section-text-light section-parallax" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '210%'}" data-image-src="{{$section5->image}}">
        @if(\Illuminate\Support\Facades\Auth::user())
            <span CLASS="btn btn-primary btn--xs">BÖLÜM 4</span>
        @endif
        <section class="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-lg-9">
                        <div class="call-to-action-content">
                            <h3><strong class="font-weight-extra-bold">{{SiteHelpers::GoogleTRS($section5->title)}}</strong></h3>

                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <div class="call-to-action-btn">
                            <a href="mailto:{{$section5->url}}" target="_blank" class="btn btn-modern text-2 btn-primary">{{SiteHelpers::GoogleTRS($section5->btnText)}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

@endsection


@section('page-js')
    {{--sayfaya özel js kodlarını eklemek için kullanın--}}

@endsection
