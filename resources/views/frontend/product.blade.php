@extends('frontend.layouts.frontend')
@section('title',env('APP_NAME').' | '.$product->name.' '.$product->title)
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
                    <h2>{{$category->cat_name}}</h2>
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
                            <h4>{{$product->name}} <br> {{$product->title}}</h4>

                        </div>
                        <br>
                        <br>
                        <div class="item__description">
                            <p>{!! $product->description !!}&nbsp;</p> <br>
                            <table style="border-collapse: collapse; width: 100%;" border="1">
                                <tbody>
                                <tr>
                                    <td style="width: 100%; text-align: center;background: #1c75fa;color: #ffffff;font-weight: bold">
                                        PRODUCT SPESIFICATIONS
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <table class="mb-10" style="border-collapse: collapse; width: 100%;border:#ffffff;">
                                <tbody>
                                <tr>
                                    <td style="width: 50%;background: #d6e6ff"><b>Volume/Pack Of</b></td>
                                    <td style="width: 50%;background: #d6e6ff">{{$product->detay->volume}}</td>
                                </tr>
                                <tr>
                                    <td style="width: 50%;"><b>Box Sizes</b></td>
                                    <td style="width: 50%;">{{$product->detay->boxsize}}</td>
                                </tr>
                                <tr>
                                    <td style="width: 50%;background: #d6e6ff"><b>Quantity in Box</b></td>
                                    <td style="width: 50%;background: #d6e6ff">{{$product->detay->qtyBox}}</td>
                                </tr>
                                <tr>
                                    <td style="width: 50%;"><b>Box Net Weight</b></td>
                                    <td style="width: 50%;">{{$product->detay->BoxNetW}}</td>
                                </tr>
                                <tr>
                                    <td style="width: 50%;background: #d6e6ff"><b>Box Gross Weight</b></td>
                                    <td style="width: 50%;background: #d6e6ff">{{$product->detay->BoxGrossW}}</td>
                                </tr>
                                <tr>
                                    <td style="width: 50%;"><b>Boxes on Pallet</b></td>
                                    <td style="width: 50%;">{{$product->detay->BoxOnPallet}}</td>
                                </tr>
                                <tr>
                                    <td style="width: 50%;background: #d6e6ff"><b>HS CODE</b></td>
                                    <td style="width: 50%;background: #d6e6ff">{{$product->detay->hsCode}}</td>
                                </tr>
                                <tr>
                                    <td style="width: 50%;"><b>BARCODE</b></td>
                                    <td style="width: 50%;">{{$product->detay->barcode}}</td>
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
                        <h4>Related Products</h4>
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
                                        <h5>{{$value->name.' '.$value->title}}</h5>

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
