@extends('backend.layouts.admin')
@section('title','Dashboard')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Dashboard</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="avatar-sm float-right">
                                        <span class="avatar-title bg-soft-primary rounded-circle">
                                            <i class="bx bxs-package m-0 h3 text-primary"></i>
                                        </span>
                            </div>
                            <h6 class="text-muted text-uppercase mt-0">Ürün Sayısı</h6>
                            <h3 class="my-3">{{$productCount}}</h3>
                            <span class="badge badge-soft-primary mr-1"> <a href="{{route('products.index')}}">Ürünleri Gör</a></span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="avatar-sm float-right">
                                        <span class="avatar-title bg-soft-primary rounded-circle">
                                            <i class="bx bx-columns m-0 h3 text-primary"></i>
                                        </span>
                            </div>
                            <h6 class="text-muted text-uppercase mt-0">Kategori Sayısı</h6>
                            <h3 class="my-3">{{$categoryCount}}</h3>
                            <span class="badge badge-soft-primary mr-1"> <a href="{{route('categories.index')}}">Kategorileri Gör</a></span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="avatar-sm float-right">
                                        <span class="avatar-title bg-soft-primary rounded-circle">
                                            <i class="bx bxs-comment m-0 h3 text-primary"></i>
                                        </span>
                            </div>
                            <h6 class="text-muted text-uppercase mt-0">Blog Sayısı</h6>
                            <h3 class="my-3">{{$blogCount}}</h3>
                            <span class="badge badge-soft-primary mr-1"> <a href="{{route('posts.index')}}">Blog Yazılarını Gör</a></span>
                        </div>
                    </div>
                </div>


            </div>
            <!-- end row -->



        </div> <!-- container-fluid -->
    </div>
@endsection

@section('page-css')
    //Sayfaya Özel Css
@endsection
@section('page-js')
    //Sayfaya Özel Js
@endsection
