@extends('porto.layouts.porto')
@section('title',\SiteHelpers::ayar('mark').' | '.___("CATALOGUE’S"))
@section('page-css')
    {{--sayfaya özel css kodlarını eklemek için kullanın--}}

@endsection

@section('content')
    <section
        class="section section-concept section-no-border section-dark section-angled section-angled-reverse pt-5 m-0"
        style="background-image: url({{$about->bg}}); background-size: cover; background-position: center; min-height: 645px;">
        <div class="section-angled-layer-bottom section-angled-layer-increase-angle bg-light"
             style="padding: 8rem 0;"></div>
        <div class="container pt-lg-5 mt-5">
            <div class="row pt-3 pb-lg-0 pb-xl-0">
                <div class="col-lg-6 pt-4 mb-5 mb-lg-0">

                    <h1 class="font-weight-bold text-10 text-xl-12 line-height-2 mb-3" style="color: #000000;">{{___("CATALOGUE’S")}}</h1>

                    <a href="#catalogue" data-hash data-hash-offset="0" data-hash-offset-lg="100"
                       class="btn btn-gradient-primary btn-effect-4 font-weight-semi-bold px-4 btn-py-2 text-3">{{___('View
                        CATALOGUE')}} <i class="fas fa-arrow-down ms-1"></i></a>

                </div>

            </div>
        </div>
    </section>

    <div id="catalogue" class="container py-2">

        <div  class="row mb-5 pb-3">
            @if($catalog->count() > 0 )
                @foreach($catalog as $key => $value)
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter"
                         data-appear-animation-delay="600">
                        <h4 class="mb-4">{{$value->name}}</h4>

                        <div  class="card flip-card flip-card-3d text-center rounded-0">
                            <div class="flip-front p-5">
                                <div class="flip-content my-4">
                                    <img src="{{asset('frontend/img/main/pdf.webp')}}" width="30%" alt="CATALOGUE">
                                </div>
                            </div>
                            <div class="flip-back d-flex align-items-center p-5"
                                 style="background-image: url(https://place-hold.it/379x350/no-text); background-size: cover; background-position: center;">
                                <div class="flip-content my-4">
                                    <h4 class="font-weight-bold text-color-light">{{$value->name}}</h4>

                                    <a href="{{$value->file}}"  class="btn btn-light btn-modern text-color-dark font-weight-bold" download="{{$value->name}}">Download Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter"
                     data-appear-animation-delay="600">
                    <h4 class="mb-4">{{___("No catalog found!")}}</h4>
                </div>

            @endif
        </div>

    </div>

@endsection


@section('page-js')
    {{--sayfaya özel js kodlarını eklemek için kullanın--}}

@endsection
