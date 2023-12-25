@extends('frontend.layouts.frontend')
@section('title',env('APP_NAME').' | '.$cat->cat_name)
@section('page-css')
    {{--sayfaya özel css kodlarını eklemek için kullanın--}}

@endsection

@section('content')
    <section class="height-40 bg--dark imagebg page-title page-title--animate parallax" data-overlay="3">
        <div class="background-image-holder">
            <img alt="image" src="{{$cat->cat_bg}}"/>
        </div>
        <div class="container pos-vertical-center">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 text-center">
                    <h2>{{$cat->cat_name}}</h2>
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                    <p class="lead" style="font-size:medium">
                        <b>{{$cat->title}}</b>
                        <br>
                        {!! $cat->description !!}


                    </p>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>

    <section class="masonry-contained">
        <div class="container">
            <div class="row">
                <div class="masonry masonry-shop">
                    <div class="masonry__container masonry--animate masonry--active">
                       @foreach($products as $key => $product)
                        <div class="col-md-4 col-sm-6 masonry__item">
                            <a href="{{route('product',$product->slug)}}">
                                <div class="card card-7">
                                    <div class="card__image bg--white">
                                        <img alt="Pic"
                                             src="{{$product->image}}" >
                                    </div>
                                    <div class="card__body boxed bg--white text-center">
                                        <div class="card__title">
                                            <h5 class="text-uppercase">{{$product->name}} <br> </h5>
                                            <h5>{{$product->title}}</h5>

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
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
