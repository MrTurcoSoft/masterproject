@extends('frontend.layouts.frontend')
@section('title',SiteHelpers::ayar('mark').' | '.$tr->trans($product->name.' '.$product->title,app()->getLocale()))
@section('page-css')
    {{--sayfaya özel css kodlarını eklemek için kullanın--}}

@endsection

@section('content')
    <section class="height-40 bg--dark imagebg page-title page-title--animate parallax" data-overlay="3">
        <div class="background-image-holder">
            <img alt="image" src="{{$category->cat_bg}}"/>
        </div>
        <div class="container pos-vertical-center">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 text-center">
                    <h2>{{$tr->trans($category->cat_name,app()->getLocale())}}</h2>
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="shop-item-detail shop-item-detail-1">
                    <div class="col-sm-6">
                        <div class="" data-animation="fade" data-arrows="true" data-paging="true">
                            <ul class="slides">
                                <li>
                                    <img alt="product" src="{{$product->image}}"/>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-1 col-sm-6">
                        <div class="item__title">
                            <h4>{{$tr->trans($product->name,app()->getLocale())}} <br> {{$tr->trans($product->title,app()->getLocale())}}</h4>

                        </div>
                        <br>
                        <br>
                        <div class="item__description">
                            <p>{!! $tr->trans($product->description,app()->getLocale()) !!}&nbsp;</p> <br>
                            <table style="border-collapse: collapse; width: 100%;" border="1">
                                <tbody>
                                <tr>
                                    <td style="width: 100%; text-align: center;background: #1c75fa;color: #ffffff;font-weight: bold">
                                        {{$tr->trans('PRODUCT SPESIFICATIONS',app()->getLocale())}}
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <table class="mb-10" style="border-collapse: collapse; width: 100%;border:#ffffff;">
                                <tbody>
                                <tr>
                                    <td style="width: 50%;background: #d6e6ff"><b>{{$tr->trans('Volume/Pack Of',app()->getLocale())}}</b></td>
                                    <td style="width: 50%;background: #d6e6ff">{{$tr->trans($product->detay->volume,app()->getLocale())}}</td>
                                </tr>
                                <tr>
                                    <td style="width: 50%;"><b>{{$tr->trans('Box Sizes',app()->getLocale())}}</b></td>
                                    <td style="width: 50%;">{{SiteHelpers::GoogleTRS($product->detay->boxsize)}}</td>
                                </tr>
                                <tr>
                                    <td style="width: 50%;background: #d6e6ff"><b>{{SiteHelpers::GoogleTRS('Quantity in Box')}}</b></td>
                                    <td style="width: 50%;background: #d6e6ff">{{SiteHelpers::GoogleTRS($product->detay->qtyBox)}}</td>
                                </tr>
                                <tr>
                                    <td style="width: 50%;"><b>{{SiteHelpers::GoogleTRS('Box Net Weight')}}</b></td>
                                    <td style="width: 50%;">{{SiteHelpers::GoogleTRS($product->detay->BoxNetW)}}</td>
                                </tr>
                                <tr>
                                    <td style="width: 50%;background: #d6e6ff"><b>{{SiteHelpers::GoogleTRS('Box Gross Weight')}}</b></td>
                                    <td style="width: 50%;background: #d6e6ff">{{SiteHelpers::GoogleTRS($product->detay->BoxGrossW)}}</td>
                                </tr>
                                <tr>
                                    <td style="width: 50%;"><b>{{SiteHelpers::GoogleTRS('Boxes on Pallet')}}</b></td>
                                    <td style="width: 50%;">{{SiteHelpers::GoogleTRS($product->detay->BoxOnPallet)}}</td>
                                </tr>
                                <tr>
                                    <td style="width: 50%;background: #d6e6ff"><b>{{SiteHelpers::GoogleTRS('HS CODE')}}</b></td>
                                    <td style="width: 50%;background: #d6e6ff">{{SiteHelpers::GoogleTRS($product->detay->hsCode)}}</td>
                                </tr>
                                <tr>
                                    <td style="width: 50%;"><b>{{SiteHelpers::GoogleTRS('BARCODE')}}</b></td>
                                    <td style="width: 50%;">{{SiteHelpers::GoogleTRS($product->detay->barcode)}}</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="related-products">
                    <div class="col-sm-12">
                        <h4>{{SiteHelpers::GoogleTRS('Related Products')}}</h4>
                    </div>

                    @foreach($relateProducts->random(3) as $key => $value)
                        <div class="col-sm-4">
                            <a href="">
                                <div class="shop-item shop-item-1">
                                    <div class="shop-item__image">
                                        <img alt="product"
                                             src="{{$value->image}}"/>
                                    </div>
                                    <div class="shop-item__title text-center">
                                        <h5>{{SiteHelpers::GoogleTRS($value->name.' '.$value->title)}}</h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
    </section>

@endsection


@section('page-js')
    {{--sayfaya özel js kodlarını eklemek için kullanın--}}

@endsection
