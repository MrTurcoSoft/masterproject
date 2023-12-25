@extends('admin.layouts.admin')
@section('title',env('APP_NAME').' | Ana Sayfa Bölümleri ')
@section('page-css')


@endsection

@section('content')

    <div class="content-wrapper container">

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Ana Sayfa Bölümleri</h3>
                        <p class="text-subtitle text-muted">Sitedeki Ana Sayfa Bölümlerini buradan yönetebilirsiniz. </p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Ana Sayfa Bölümleri</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12">
                    {{--<a onclick="ByTurcoSoftModal(this.href,'Yeni Slider Ekle');return false"
                       href="{{route('slider-management.create')}}"
                       class='submenu-link'>
                       <button class="btn btn-sm btn-primary mb-5">Yeni Slider Ekle</button>
                    </a>--}}

                    <div class="card">
                        <div class="card-body">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Bölüm No</th>
                                    <th>Image</th>
                                    <th>Başlık</th>
                                    <th>İçerik</th>
                                    <th>Buton Text</th>
                                    <th>Buton URL</th>
                                    <th>Durumu</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sections as $key=> $value)

                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td style="width: 5%">{{$value->section}}. Bölüm</td>
                                            <td style="width: 40%">@if($value->image) <img src="{{$value->image}}" width="30%">@else
                                                    <label class="btn btn-danger btn-sm">Resim Yok</label> @endif</td>
                                            <td style="width: 20%">{{$value->title}}</td>
                                            <td style="width: 50%">{!! $value->description !!}</td>
                                            <td style="width: 5%">{{$value->btnText}}</td>
                                            <td style="width: 10%">{{$value->url}}</td>
                                            <td style="width: 5%">{{$value->isActive == 1 ? 'Aktif' : 'Pasif'}}</td>
                                            <td style="width: 2%">
                                                <a onclick="ByTurcoSoftModal(this.href,'Bölüm Düzenle');return false"
                                                   href="homesections/{{$value->id}}/{{$value->section}}" title="Güncelle"
                                                   class="btn btn-primary btn-sm">
                                                   <i class="bi bi-pencil-fill"></i>
                                                </a>
                                                {{--<a href="javascript:Void(0)">
                                                    <button type="button"
                                                            title="Sil" id="{{$value->id}}"
                                                            class="btn btn-circle btn-sm btn-danger delete"><i
                                                            class="bi bi-trash3-fill"></i></button>
                                                </a>--}}
                                            </td>

                                        </tr>

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

    <script>
        /*let table = new DataTable('#myTable');*/
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
