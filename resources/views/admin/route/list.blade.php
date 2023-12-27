@extends('admin.layouts.admin')
@section('title',SiteHelpers::ayar('author').' | Route Listesi ')
@section('page-css')
    {{--sayfaya özel css kodlarını eklemek için kullanın--}}

@endsection

@section('content')
    <div class="content-wrapper container">

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Route Listesi</h3>
                        <p class="text-subtitle text-muted">Web Sitesindeki tüm rotaları buradan görebilirsiniz.</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Route Listesi</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12">


                    <div class="card">
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Method</th>
                                    <th>Uri</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($routes as $route)
                                    @if($route->getPrefix() !== '_ignition')
                                        <tr>
                                            <td>{{$route->methods()[0]}}</td>
                                            <td>{{$route->uri}}</td>
                                            <td>{{$route->getName()}}</td>
                                            <td>{{$route->getPrefix()}}</td>
                                            <td>{{$route->getActionmethod()}}</td>

                                        </tr>
                                    @endif
                                @endforeach

                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </section>
        </div>

    </div>

@endsection


@section('page-js')
    {{--sayfaya özel js kodlarını eklemek için kullanın--}}

@endsection
