@extends('admin.layouts.admin')
@section('title',SiteHelpers::ayar('author').' | Hakkımızda Sayfası ')
@section('page-css')
    {{--sayfaya özel css kodlarını eklemek için kullanın--}}

@endsection

@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Hakkımızda</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Kurumsal Sayfalar</a></li>
                                <li class="breadcrumb-item active">Hakkımızda</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

@endsection


@section('page-js')

    <!-- Sayfaya Özel JS  -->

@endsection
