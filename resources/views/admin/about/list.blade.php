@extends('admin.layouts.admin')
@section('title',env('APP_NAME').' | Hakkımızda Sayfası ')
@section('page-css')
    {{--sayfaya özel css kodlarını eklemek için kullanın--}}

@endsection

@section('content')

    <div class="content-wrapper container">

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Hakkımızda</h3>
                        <p class="text-subtitle text-muted">Sitedeki Hakkımızda bölümünü buradan yönetebilirsiniz. </p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Hakkımızda</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-content">
                            <img class="card-img-bottom img-fluid" src="{{asset($about->bg)}}" alt="Card image cap" style="height: 20rem; object-fit: cover;">

                            <div class="btn-group align-items-center mx-2 px-1">
                                <button type="button" class="btn btn-link p-2 m-1 text-decoration-none">
                                    <a onclick="ByTurcoSoftModal(this.href,'Header Arka Plan Güncelle');return false"
                                       href="about-management/{{$about->id}}/bg" title="Güncelle"
                                       class="btn btn-primary btn-sm">
                                        <i class="bi bi-pencil-fill"></i>
                                    </a>

                                </button>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-center align-items-center flex-column">
                                <div class="justify-content-center align-items-center" >
                                    <img class="img-fluid" src="{{$about->image}}" style="height: 20rem; " alt="image">
                                </div>
                                <div class="btn-group align-items-center mx-2 px-1">
                                    <button type="button" class="btn btn-link p-2 m-1 text-decoration-none">
                                        <a onclick="ByTurcoSoftModal(this.href,'Hakkımızda Sayfası Görseli Güncelle');return false"
                                           href="about-management/{{$about->id}}/image" title="Güncelle"
                                           class="btn btn-primary btn-sm">
                                            <i class="bi bi-pencil-fill"></i>
                                        </a>

                                    </button>

                                </div>
                                <p class="text-small">Hakkımızda Sayfası Görseli</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="btn-group align-items-center mx-2 px-1">
                            <button type="button" class="btn btn-link p-2 m-1 text-decoration-none">
                                <a onclick="ByTurcoSoftModal(this.href,'Hakkımızda İçerik Güncelle');return false"
                                   href="about-management/{{$about->id}}/text" title="Güncelle"
                                   class="btn btn-primary btn-sm">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>

                            </button>

                        </div>
                        <div class="card-body">

                                <div class="form-group">
                                    <h1>Başlık</h1>
                                    <input type="text" disabled value="{{$about->name}}">


                                </div>
                                <div class="form-group">
                                    <h2>İçerik</h2>
                                    <p style="background: #6b7280">{!! $about->description !!}</p>

                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection


@section('page-js')
    <script>
        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(".delete").click(function () {
                destroy_id = $(this).attr('id');
                alertify.confirm('Kaydı Silmek İstediğinize Emin misiniz?', '<b style="color: #f30404;text-transform: uppercase;">ÖNEMLİ UYARI:</b> Kaydı sildiğinizde geri alamazsınız!',


                    function () {
                        $.ajax({
                            type: "POST",
                            url: "slider-management/delete",
                            data: "id=" + destroy_id,
                            success: function (msg) {
                                console.log(msg);
                                if (msg) {
                                    $("#item-" + destroy_id).remove();
                                    alertify.success('Başarıyla silindi');
                                    document.location.reload(true);
                                } else {
                                    alertify.error('Kayıt silinemedi!');

                                }
                            }
                        });

                    },
                    function () {
                        alertify.error('{{trans('back.deleting-aborted')}}')
                    }
                )
                ;

            });
        });
    </script>

@endsection
