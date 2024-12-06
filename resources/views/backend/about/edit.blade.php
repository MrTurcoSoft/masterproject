@extends('backend.layouts.admin')
@section('title',SiteHelpers::ayar('author').' | Hakkımızda Sayfası ')
@section('page-css')
    <!-- Dropify css -->
    <link href="{{asset('backend/plugins/dropify/dropify.min.css')}}" rel="stylesheet" type="text/css" />


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

            <div class="col-xl-12">
                <div class="card card-animate">
                    <div class="card-body">
                        <h4 class="card-title">Hakkımızda Sayfası Düzenleme</h4>
                        <p class="card-subtitle mb-4">Dilden Bağımsız Değerler</p>

                        <div class="row">

                            <div class="col-xl-4">
                                <div class="card">
                                    <form class="form form-vertical" method="post" action="{{route("about.update",$value->id)}}" enctype="multipart/form-data" >
                                        @csrf
                                        <div class="card-body">
                                            <h4 class="card-title">Hakkımızda Resmi</h4>
                                            <p class="card-subtitle mb-4">Yanlızca 3000x3000 px ölçülerinde</p>
                                            <input type="file"
                                                   class="dropify" name="image"
                                                   data-max-file-size="2M"
                                                   data-default-file="{{ asset($value->image) }}" />
                                        </div> <!-- end card-body-->
                                        <div class="card-footer">
                                            <button class="btn btn-warning waves-effect waves-light">Yükle</button>
                                        </div>
                                    </form>
                                </div> <!-- end card-->
                            </div>
                                <div class="col-xl-4">
                                    <div class="card">
                                        <form class="form form-vertical" method="post" action="{{route("about.update",$value->id)}}" enctype="multipart/form-data" >
                                            @csrf
                                        <div class="card-body">
                                            <h4 class="card-title">Header Arka Plan Resmi</h4>
                                            <p class="card-subtitle mb-4">Yanlızca 1080x1080 px ölçülerinde</p>
                                            <input type="file" class="dropify" name="bg" data-max-file-size="2M" data-default-file="{{ asset($value->bg) }}">
                                        </div> <!-- end card-body-->
                                            <div class="card-footer">
                                                <button class="btn btn-primary waves-effect waves-light">Yükle</button>
                                            </div>
                                            <p style="color:red;" class="card-subtitle mb-4 color">SADECE ESKİ TEMA KULLANILACAKSA YÜKLEME YAPIN</p>

                                        </form>
                                    </div> <!-- end card-->
                                </div>

                            <div class="col-sm-10">
                                <form class="form form-vertical" method="post" action="{{route("about.update",$value->id)}}" enctype="multipart/form-data" >
                                    @csrf
                                <div class="tab-content" id="v-pills-tabContent-right">
                                    <div class="tab-pane fade active show" id="en" role="tabpanel" aria-labelledby="en">
                                        <p class="mb-0">İngilizce form alanı</p>
                                    </div>
                                    <div class="tab-pane fade" id="de" role="tabpanel" aria-labelledby="de">
                                        <p class="mb-0">Almanca form alanı</p>
                                    </div>
                                    <div class="tab-pane fade" id="es" role="tabpanel" aria-labelledby="es">
                                        <p class="mb-0">İspanyolca form alanı</p>
                                    </div>
                                    <div class="tab-pane fade" id="fr" role="tabpanel" aria-labelledby="fr">
                                        <p class="mb-0">Fransızca form alanı</p>
                                    </div>
                                    <div class="tab-pane fade" id="hu" role="tabpanel" aria-labelledby="hu">
                                        <p class="mb-0">Macarca form alanı</p>
                                    </div>
                                    <div class="tab-pane fade" id="it" role="tabpanel" aria-labelledby="it">
                                        <p class="mb-0">İtalyanca form alanı</p>
                                    </div>
                                    <div class="tab-pane fade" id="sr" role="tabpanel" aria-labelledby="sr">
                                        <p class="mb-0">Sırpça form alanı</p>
                                    </div>
                                </div> <!-- end tabcontent-->
                                </form>
                            </div> <!-- end col-->

                            @include('backend.inc.tab-lang')

                        </div> <!-- end row-->

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

@endsection


@section('page-js')

    <!--dropify-->
    <script src="{{asset('backend/plugins/dropify/dropify.min.js')}}"></script>

    <!-- Init js-->
    <script src="{{asset('backend/assets/pages/fileuploads-demo.js')}}"></script>

    <script>
        $(document).ready(function () {
            $('.dropify').dropify();
        });
        // Her form için ayrı kontrol
        $('form').each(function () {
            $(this).on('submit', function (e) {
                const form = $(this); // Bu formu yakala
                const fileInputs = [
                    { name: 'bg', label: 'Header Arka Plan Resmi' },
                    { name: 'image', label: 'Diğer Resim' }
                ];

                let missingFiles = [];

                fileInputs.forEach(input => {
                    const fileInput = form.find(`input[name="${input.name}"]`)[0];
                    if (fileInput && (!fileInput.files || !fileInput.files.length)) {
                        missingFiles.push(input.label);
                    }
                });

                if (missingFiles.length > 0) {
                    e.preventDefault();
                    Swal.fire({
                        type: 'error',
                        title: 'Eksik Dosya!',
                        html: `Lütfen bir dosya seçin:<br><strong>Jpeg,jpg veya P</strong>`,
                        confirmButtonText: 'Tamam'
                    });
                } else {
                    console.log('Dosya seçildi.');
                }
            });
        });
    </script>

@endsection
