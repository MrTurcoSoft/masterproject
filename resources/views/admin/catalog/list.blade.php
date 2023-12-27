@extends('admin.layouts.admin')
@section('title',SiteHelpers::ayar('author').' | Kataloglar')
@section('page-css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css"/>

@endsection

@section('content')

    <div class="content-wrapper container">

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Kataloglar</h3>
                        <p class="text-subtitle text-muted">Sitedeki Katalogları buradan yönetebilirsiniz. </p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Kataloglar</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12">
                    <a onclick="ByTurcoSoftModal(this.href,'Yeni Katalog Ekle');return false"
                       href="{{route('catalog.create')}}"
                       class='submenu-link'>
                        <button class="btn btn-sm btn-primary mb-5">Yeni Katalog Ekle</button>
                    </a>

                    <div class="card">
                        <div class="card-body">
                            <table id="myTable" class="table table-bordered table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Katalog</th>
                                    <th>Başlık</th>
                                    <th>Durumu</th>
                                    <th>İşlemler</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($catalog as $key=> $value)

                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td style="width: 20%"><a href="{{$value->file}}" download="{{$value->name}}"><img
                                                        src="{{asset('frontend/img/main/pdf.webp')}}" width="30%" alt=""></a></td>
                                            <td style="width: 40%">{{$value->name}}</td>
                                            <td style="width: 30%">{{$value->isActive == 1 ? 'Aktif' : 'Pasif'}}</td>
                                            <td style="width: 10%">
                                               {{-- <a onclick="ByTurcoSoftModal(this.href,'Katalog Düzenle');return false"
                                                   href="{{route('certificates.edit',$value->id)}}" title="Güncelle"
                                                   class="btn btn-primary btn-sm">
                                                   <i class="bi bi-pencil-fill"></i>
                                                </a>--}}
                                                <a href="javascript:Void(0)">
                                                    <button type="button"
                                                            title="Sil" id="{{$value->id}}"
                                                            class="btn btn-circle btn-sm btn-danger delete"><i
                                                            class="bi bi-trash3-fill"></i></button>
                                                </a>
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
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        let table = new DataTable('#myTable');
        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(".delete").click(function () {
                destroy_id = $(this).attr('id');
                console.log(destroy_id);
                alertify.confirm('Kaydı Silmek İstediğinize Emin misiniz?', '<b style="color: #f30404;text-transform: uppercase;">ÖNEMLİ UYARI:</b> Kaydı sildiğinizde geri alamazsınız!',


                    function () {
                        $.ajax({
                            type: "POST",
                            url: "catalog/delete",
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
                        alertify.error('Silme işlemi iptal edildi.')
                    }
                )
                ;

            });
        });
    </script>

@endsection
