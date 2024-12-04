@extends('porto.layouts.porto')
@section('title',\SiteHelpers::ayar('mark').' | '.$cat->page_title)
@section('keywords',$cat->page_keywords)
@section('description',$cat->page_description)
@section('page-css')
    {{--sayfaya özel css kodlarını eklemek için kullanın--}}

@endsection

@section('content')
    <section
        class="section section-concept section-no-border section-dark section-angled section-angled-reverse pt-5 m-0"
        style="background-image: url({{$cat->cat_bg}}); background-size: cover; background-position: center; min-height: 645px;">
        <div class="section-angled-layer-bottom section-angled-layer-increase-angle bg-light"
             style="padding: 8rem 0;"></div>
        <div class="container pt-lg-5 mt-5">
            <div class="row pt-3 pb-lg-0 pb-xl-0">
                <div class="col-lg-6 pt-4 mb-5 mb-lg-0" >

                    <h1 class="font-weight-bold text-10 text-xl-12 line-height-2 mb-3"
                        style="color: #000000;">{{$cat->cat_name}}</h1>
                    <div style="color: #000000;">
                    <p class="opacity-7 text-4 negative-ls-05 pb-2 mb-4" >
                       {!! $cat->description !!}
                    </p>
                    </div>
                    <a href="#{{$cat->cat_name}}" data-hash data-hash-offset="0" data-hash-offset-lg="100"
                       class="btn btn-gradient-primary btn-effect-4 font-weight-semi-bold px-4 btn-py-2 text-3">{{___("View").$cat->cat_name}}
                        <i class="fas fa-arrow-down ms-1"></i></a>

                </div>

            </div>
        </div>
    </section>
    <div id="{{$cat->cat_name}}" class="container">

        <div class="masonry-loader masonry-loader-showing">
            <div class="row products product-thumb-info-list" data-plugin-masonry
                 data-plugin-options="{'layoutMode': 'fitRows'}">
                @if(count($products) == 0)
                    <div class="col-12">
                        <div class="alert alert-danger">
                           {{___("No products found")}}
                        </div>
                    </div>
                            @endif
                @foreach($products as $key => $product)
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="product mb-0">
                            <div class="product-thumb-info border-0 mb-3">

                                <div class="product-thumb-info-badges-wrapper">
                                    @if($product->created_at->diffInDays() < 30)
                                        <span class="badge badge-ecommerce text-bg-success">{{___("NEW")}}</span>
                                    @endif
                                </div>

                                <div class="addtocart-btn-wrapper">
                                    <a href="{{ getProductUrl($product) }}"
                                       class="text-decoration-none addtocart-btn"
                                       title="{{'View '.$product->name}}">
                                        <i class="fa-regular fa-eye"></i>
                                    </a>


                                </div>
                                    <a href="{{ getProductUrl($product) }}" >
                                        <div class="product-thumb-info-image">
                                            <img alt="" class="img-fluid" src="{{$product->image}}">
                                        </div>
                                    </a>


                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="#"
                                       class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">{{$product->name}}</a>
                                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">

                                        <a href="{{ getProductUrl($product) }}"
                                           class="text-color-dark text-color-hover-primary">{{$product->title}}</a>

                                    </h3>
                                </div>

                            </div>


                        </div>
                    </div>
                @endforeach

            </div>
{{--            <div class="row mt-4">--}}
{{--                <div class="col">--}}
{{--                    <ul class="pagination float-end">--}}
{{--                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>--}}
{{--                        <li class="page-item active"><a class="page-link" href="#">1</a></li>--}}
{{--                        <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                        <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>

    </div>

@endsection


@section('page-js')
    {{--sayfaya özel js kodlarını eklemek için kullanın--}}

@endsection
