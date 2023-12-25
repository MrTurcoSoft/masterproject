@extends('admin.layouts.admin')
@section('title',env('APP_NAME').' | Kategoriler ')
@section('page-css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css"/>

@endsection

@section('content')

    <div class="content-wrapper container">

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Kategoriler</h3>
                        <p class="text-subtitle text-muted">Sitedeki Kategorileri buradan yönetebilirsiniz. </p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Kategoriler</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12">
                    <a onclick="ByTurcoSoftModal(this.href,'Yeni Kategori Ekle');return false"
                       href="{{route('categories.create')}}"
                       class='submenu-link'>
                       <button class="btn btn-sm btn-primary mb-5">Yeni Kategori Ekle</button>
                    </a>

                    <div class="card">
                        <div class="card-body">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Header Image</th>
                                    <th>Kategori Adı</th>
                                    <th>Sayfa Başlığı</th>
                                    <th>İçerik</th>
                                    <th>Seo Adres</th>
                                    <th>Ürün Adedi</th>
                                    <th>Durumu</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $key=> $value)

                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td style="width: 30%">@if($value->cat_bg) <img src="{{$value->cat_bg}}" width="30%">@else
                                                    <label class="btn btn-danger btn-sm">Resim Yok</label> @endif</td>
                                            <td style="width: 20%">{{$value->cat_name}}</td>
                                            <td style="width: 20%">{{$value->title}}</td>
                                            <td style="width: 50%">{!! substr($value->description,0,50) !!}.....</td>
                                            <td style="width: 5%">{{$value->slug}}</td>
                                            <td style="width: 10%">{{$value->urunler()->count()}}</td>
                                            <td style="width: 5%">{{$value->isActive == 1 ? 'Aktif' : 'Pasif'}}</td>
                                            <td style="width: 1%">
                                                <a onclick="ByTurcoSoftModal(this.href,'Bölüm Düzenle');return false"
                                                   href="{{route('categories.edit',$value->id)}}" title="Güncelle"
                                                   class="btn btn-primary btn-sm">
                                                   <i class="bi bi-pencil-fill"></i>
                                                </a>
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
                alertify.confirm('Kaydı Silmek İstediğinize Emin misiniz?', '<b style="color: #f30404;text-transform: uppercase;">ÖNEMLİ UYARI:</b> Kaydı sildiğinizde geri alamazsınız!',


                    function () {
                        $.ajax({
                            type: "POST",
                            url: "categories/delete",
                            data: "id=" + destroy_id,
                            success: function (msg) {
                                console.log(msg);
                                if (msg=='ok') {
                                    $("#item-" + destroy_id).remove();
                                    alertify.success('Başarıyla silindi');
                                    document.location.reload(true);
                                } else {
                                    alertify.error('Kayıt silinemedi!');
                                    document.location.reload(true);

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
