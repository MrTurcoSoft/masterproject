@extends('frontend.layouts.frontend')
@section('title',\SiteHelpers::ayar('mark').' | '.$tr->trans('CATALOGUE’S',app()->getLocale()))
@section('page-css')
    {{--sayfaya özel css kodlarını eklemek için kullanın--}}

@endsection

@section('content')
    <section class="height-40 bg--dark imagebg page-title page-title--animate parallax" data-overlay="3">
        <div class="background-image-holder">
            <img alt="image" src="{{$about->bg}}"/>
        </div>
        <div class="container pos-vertical-center">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 text-center">
                    <h2>{{$tr->trans('CATALOGUE’S',app()->getLocale())}}</h2>
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>



    <section class="masonry-contained">
        <div class="container">
            <div class="row">
                <div align="center" class="masonry masonry-shop">
                    <div class="masonry__container masonry--animate masonry--active">
                        @if($catalog->count() > 0 )
                       @foreach($catalog as $key => $value)
                        <div class="col-md-4 col-sm-6 masonry__item">
                            <a href="{{$value->file}}" download="{{$tr->trans($value->name,app()->getLocale())}}">
                                <div class="card card-7">
                                    <div class="card__image bg--white">
                                        <img src="{{asset('frontend/img/main/pdf.webp')}}" width="30%" alt="CATALOGUE">
                                    </div>
                                    <div class="card__body boxed bg--white text-center">
                                        <div class="card__title">
                                            <h5 class="text-uppercase">{{$tr->trans($value->name,app()->getLocale())}} <br> </h5>


                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                        @else
                            <div class="col-md-12 col-sm-6 masonry__item">

                                    <div class="card card-7">

                                        <div class="card__body boxed bg--white text-center">
                                            <div class="card__title">
                                                <h5 class="text-uppercase">{{$tr->trans('No catalog found!',app()->getLocale())}} <br> </h5>


                                            </div>
                                        </div>
                                    </div>

                            </div>
                            <div class="col-md-12 col-sm-6 masonry__item">

                                <div class="card card-7">

                                    <div class="card__body boxed bg--white text-center">
                                        <div class="card__title">
                                            <h5 class="text-uppercase"> <br> </h5>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endif
                    </div>
                    <!--end masonry container-->
                </div>
                <!--end masonry-->
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>






@endsection


@section('page-js')
    {{--sayfaya özel js kodlarını eklemek için kullanın--}}

@endsection
