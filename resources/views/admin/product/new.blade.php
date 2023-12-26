<div class="card-content">
    <div class="card-body">
        <form class="form form-vertical" method="post" action="{{route("products.store")}}"
              enctype="multipart/form-data">
            @csrf
            <div class="form-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="first-name-vertical">Adı </label>
                            <input type="text" id="first-name-vertical" class="form-control"
                                   name="name"  required>

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="first-name-vertical">Modeli </label>
                            <input type="text" id="first-name-vertical" class="form-control"
                                   name="title"  required>

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="email-id-vertical">İçerik</label>
                            <textarea name="description" id="body" cols="30"
                                      rows="10"></textarea>
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
                                    <option value="{{$category->id}}" >{{$category->cat_name}}</option>
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
                        </div>
                    </div>
                    <div class="col-12">
                        <table class="mb-10" style="border-collapse: collapse; width: 20%;border:#ffffff;">
                            <tbody>
                            <tr>
                                <td style="width: 20%;"><b>Sıralama</b></td>
                                <td style="background: #d6e6ff"><input type="number" id="contact-info-vertical" class="form-control"
                                                                       name="must"  required></td>
                            </tr>
                            <tr>
                                <td style="width: 20%;"><b>Durumu</b></td>
                                <td style="width: 50%;background: #d6e6ff" class="form-check form-switch"> <input class="form-check-input" type="hidden" id="flexSwitchCheckChecked" name="isActive"
                                                                                                                  value="0">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="isActive"
                                           value="1" checked ></td>
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
                                                                                  name="volume"  required></td>
                            </tr>
                            <tr>
                                <td style="width: 50%;"><b>Box Sizes</b></td>
                                <td style="width: 50%;background: #d6e6ff"><input type="text" id="contact-info-vertical" class="form-control"
                                                                                  name="boxsize"  required></td>
                            </tr>
                            <tr>
                                <td style="width: 50%;background: #d6e6ff"><b>Quantity in Box</b></td>
                                <td style="width: 50%;background: #d6e6ff"><input type="text" id="contact-info-vertical" class="form-control"
                                                                                  name="qtyBox"  required></td>
                            </tr>
                            <tr>
                                <td style="width: 50%;"><b>Box Net Weight</b></td>
                                <td style="width: 50%;background: #d6e6ff"><input type="text" id="contact-info-vertical" class="form-control"
                                                                                  name="BoxNetW"  required></td>
                            </tr>
                            <tr>
                                <td style="width: 50%;background: #d6e6ff"><b>Box Gross Weight</b></td>
                                <td style="width: 50%;background: #d6e6ff"><input type="text" id="contact-info-vertical" class="form-control"
                                                                                  name="BoxGrossW"  required></td>
                            </tr>
                            <tr>
                                <td style="width: 50%;"><b>Boxes on Pallet</b></td>
                                <td style="width: 50%;background: #d6e6ff"><input type="text" id="contact-info-vertical" class="form-control"
                                                                                  name="BoxOnPallet"  required></td>
                            </tr>
                            <tr>
                                <td style="width: 50%;background: #d6e6ff"><b>HS CODE</b></td>
                                <td style="width: 50%;background: #d6e6ff"><input type="text" id="contact-info-vertical" class="form-control"
                                                                                  name="hsCode"  required></td>
                            </tr>
                            <tr>
                                <td style="width: 50%;"><b>BARCODE</b></td>
                                <td style="width: 50%;background: #d6e6ff"><input type="text" id="contact-info-vertical" class="form-control"
                                                                                  name="barcode"  required></td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary me-1 mb-1">Ekle</button>

                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
