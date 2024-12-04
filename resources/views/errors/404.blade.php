@extends('porto.layouts.porto')
@section('title',SiteHelpers::ayar('mark').' | 404 - Page Not Found')
@section('page-css')
    {{--sayfaya özel css kodlarını eklemek için kullanın--}}


@endsection

@section('content')
    <section class="page-header page-header-modern bg-color-grey page-header-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="font-weight-bold text-dark">404 - Page Not Found</h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb d-block text-center">
                        <li><a href="{{ route('home', ['locale' => app()->getLocale()]) }}">Home</a></li>
                        <li class="active">Pages</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <section class="http-error">
            <div class="row justify-content-center py-3">
                <div class="col-md-7 text-center">
                    <div class="http-error-main">
                        <h2>404!</h2>
                        <p>We're sorry, but the page you were looking for doesn't exist.</p>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0">
                    <h4 class="text-primary">Here are some useful links</h4>
                    <ul class="nav nav-list flex-column">
                        <li class="nav-item"><a class="nav-link" href="{{ route('home', ['locale' => app()->getLocale()]) }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('about', ['locale' => app()->getLocale()]) }}">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('contact', ['locale' => app()->getLocale()]) }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </section>

    </div>



@endsection


@section('page-js')
    {{--sayfaya özel js kodlarını eklemek için kullanın--}}

@endsection
