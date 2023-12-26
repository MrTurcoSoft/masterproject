<div class="card-content">
    <div class="card-body">
        <form class="form form-vertical" method="post" action="{{route("products.update",$value->id)}}"
              enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="form-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="first-name-vertical">Adı </label>
                            <input type="text" id="first-name-vertical" class="form-control"
                                   name="name" value="{{$value->name}}" required>

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="first-name-vertical">Modeli </label>
                            <input type="text" id="first-name-vertical" class="form-control"
                                   name="title" value="{{$value->title}}" required>

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="email-id-vertical">İçerik</label>
                            <textarea name="description" id="body" cols="30" required
                                      rows="10">{!! $value->description !!}</textarea>
                        </div>
                        <script>
                            ClassicEditor
                                .create(document.querySelector('#body'))
                                .catch(error => {
                                    console.error(error);
                                });
                        </script>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="email-id-vertical">Ürün Kategorisi</label>
                            <select class="js-example-basic-multiple form-control" name="categories[]"
                                    multiple="multiple">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" {{collect(old('categories',$product_cat))->contains($category->id)?'selected':null}}>{{$category->cat_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
                        <script>
                            $(document).ready(function() {
                                // Select2 Multiple
                                $(document).ready(function() {
                                    $('.js-example-basic-multiple').select2();
                                });


                            });

                        </script>
                    </div>


                    <div class="col-12">
                        <div class='form-check'>
                            <div class="mb-3">
                                <label for="formFileSm" class="form-label">Ürün Resmi </label>
                                <input class="form-control form-control-sm" id="formFileSm" name="image"
                                       type="file">
                                <small style="color: red;font-weight: bold">Yanlızca 800x600 px
                                    ölçülerinde</small>
                            </div>
                            <div class="mb-3 right">
                                <label for="formFileSm" class="form-label">Mevcut Ürün Resmi </label>
                                <img src="{{$value->image}}" width="30%" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="col-12">
                        <table class="mb-10" style="border-collapse: collapse; width: 20%;border:#ffffff;">
                            <tbody>
                            <tr>
                                <td style="width: 20%;"><b>Sıralama</b></td>
                                <td style="background: #d6e6ff"><input type="number" id="contact-info-vertical" class="form-control"
                                                                       name="must" value="{{$value->must}}" required></td>
                            </tr>
                            <tr>
                                <td style="width: 20%;"><b>Durumu</b></td>
                                <td style="width: 50%;background: #d6e6ff" class="form-check form-switch"> <input class="form-check-input" type="hidden" id="flexSwitchCheckChecked" name="isActive"
                                                                                                                  value="0">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="isActive"
                                           value="1" {{$value->isActive ? 'checked' :null }} ></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="item__description">
                        <p>Ürün Detayları&nbsp;</p> <br>
                        <table style="border-collapse: collapse; width: 100%;" border="1">
                            <tbody>
                            <tr>
                                <td style="width: 100%; text-align: center;background: #1c75fa;color: #ffffff;font-weight: bold">
                                    PRODUCT SPESIFICATIONS
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <table class="mb-10" style="border-collapse: collapse; width: 100%;border:#ffffff;">
                            <tbody>
                            <tr>
                                <td style="width: 50%;background: #d6e6ff"><b>Volume/Pack Of</b></td>
                                <td style="width: 50%;background: #d6e6ff"><input type="text" id="contact-info-vertical" class="form-control"
                                                                                  name="volume" value="{{$value->detay->volume}}" required></td>
                            </tr>
                            <tr>
                                <td style="width: 50%;"><b>Box Sizes</b></td>
                                <td style="width: 50%;background: #d6e6ff"><input type="text" id="contact-info-vertical" class="form-control"
                                                                                  name="boxsize" value="{{$value->detay->boxsize}}" required></td>
                            </tr>
                            </tr>
                            <tr>
                                <td style="width: 50%;background: #d6e6ff"><b>Quantity in Box</b></td>
                                <td style="width: 50%;background: #d6e6ff"><input type="text" id="contact-info-vertical" class="form-control"
                                                                                  name="qtyBox" value="{{$value->detay->qtyBox}}" required></td>
                            </tr>
                            </tr>
                            <tr>
                                <td style="width: 50%;"><b>Box Net Weight</b></td>
                                <td style="width: 50%;background: #d6e6ff"><input type="text" id="contact-info-vertical" class="form-control"
                                                                                  name="BoxNetW" value="{{$value->detay->BoxNetW}}" required></td>
                            </tr>
                            </tr>
                            <tr>
                                <td style="width: 50%;background: #d6e6ff"><b>Box Gross Weight</b></td>
                                <td style="width: 50%;background: #d6e6ff"><input type="text" id="contact-info-vertical" class="form-control"
                                                                                  name="BoxGrossW" value="{{$value->detay->BoxGrossW}}" required></td>
                            </tr>
                            </tr>
                            <tr>
                                <td style="width: 50%;"><b>Boxes on Pallet</b></td>
                                <td style="width: 50%;background: #d6e6ff"><input type="text" id="contact-info-vertical" class="form-control"
                                                                                  name="BoxOnPallet" value="{{$value->detay->BoxOnPallet}}" required></td>
                            </tr>
                            </tr>
                            <tr>
                                <td style="width: 50%;background: #d6e6ff"><b>HS CODE</b></td>
                                <td style="width: 50%;background: #d6e6ff"><input type="text" id="contact-info-vertical" class="form-control"
                                                                                  name="hsCode" value="{{$value->detay->hsCode}}" required></td>
                            </tr>
                            </tr>
                            <tr>
                                <td style="width: 50%;"><b>BARCODE</b></td>
                                <td style="width: 50%;background: #d6e6ff"><input type="text" id="contact-info-vertical" class="form-control"
                                                                                  name="barcode" value="{{$value->detay->barcode}}" required></td>
                            </tr>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary me-1 mb-1">Güncelle</button>

                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
