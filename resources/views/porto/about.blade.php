@extends('porto.layouts.porto')
@section('title',\SiteHelpers::ayar('mark').' | About Us')
@section('page-css')


@endsection

@section('content')
    <div class="container pt-5">

        <div class="row py-4 mb-2">
            <div class="col-md-7 order-2">
                <div class="overflow-hidden">
                    <h2 class="text-color-dark font-weight-bold text-12 mb-2 pt-0 mt-0 appear-animation"
                        data-appear-animation="maskUp"
                        data-appear-animation-delay="300">{{$about->name}}</h2>
                </div>
                <div class="overflow-hidden mb-3">
                    <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation"
                       data-appear-animation="maskUp"
                       data-appear-animation-delay="500">{{SiteHelpers::GoogleTRS(config('settings.mark'))}}</p>
                </div>
                <p class="lead appear-animation" data-appear-animation="fadeInUpShorter"
                   data-appear-animation-delay="700">{!! $about->description !!}</p>

                <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="900">
                <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter"
                     data-appear-animation-delay="1000">
                    <div class="col-lg-6">
                        <a href="{{route('contact')}}"
                           class="btn btn-modern btn-dark mt-3">Get In Touch</a>

                    </div>
                    <div class="col-sm-6 text-lg-end my-4 my-lg-0">
                        <strong
                            class="text-uppercase text-1 me-3 text-dark">follow me</strong>
                        <ul class="social-icons float-lg-end">
                            <li class="social-icons-facebook"><a
                                    href="https://www.facebook.com/{{config('settings.facebook')}}" target="_blank"
                                    title="Facebook"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="social-icons-instagram"><a
                                    href="https://www.instagram.com/{{config('settings.instagram')}}" target="_blank"
                                    title="Instagram"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="social-icons-linkedin"><a
                                    href="https://www.linkedin.com/showcase/{{config('settings.linkedin')}}"
                                    target="_blank"
                                    title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                <img src="{{$about->image }}" class="img-fluid mb-2" alt="{{config('settings.mark')}}">
            </div>
        </div>
    </div>

    <section class="section section-default border-0 mt-5 appear-animation" data-appear-animation="fadeIn"
             data-appear-animation-delay="1200">

    </section>

    <div class="container pt-5 pb-2">
        <div class="overflow-hidden">
            <h2 class="text-color-dark font-weight-normal text-6 mb-0 appear-animation" data-appear-animation="maskUp">
                <strong
                    class="font-weight-extra-bold">Our Brands and Certificates</strong>
            </h2>
        </div>

        <div class="row">
            <div class="col">

                <div class="my-4 lightbox appear-animation" data-appear-animation="fadeInUpShorter"
                     data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
                    <div class="owl-carousel owl-theme pb-3"
                         data-plugin-options="{'items': 4, 'margin': 35, 'loop': false}">
                        @foreach($cert as $key => $value)
                            <div class="portfolio-item">
										<span
                                            class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
											<span class="thumb-info-wrapper border-radius-0">
												<img src="{{$value->image}}" class="img-fluid border-radius-0"
                                                     alt="">
												<span class="thumb-info-title">
													<span
                                                        class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">{{$value->name}}</span>
													<span class="thumb-info-type">Our Brands and Certificates</span>
												</span>
												<span class="thumb-info-action">
													<a href="javascript:void(0)" >
														<span
                                                            class="thumb-info-action-icon thumb-info-action-icon-primary"><i
                                                                class="fas fa-link"></i></span>
													</a>
													<a href="{{$value->image}}" class="lightbox-portfolio">
														<span
                                                            class="thumb-info-action-icon thumb-info-action-icon-light"><i
                                                                class="fas fa-search text-dark"></i></span>
													</a>
												</span>
											</span>
										</span>
                            </div>
                        @endforeach


                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection


@section('page-js')

    <script>
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
        })
    </script>

@endsection
