<div class="card-content">
    <div class="card-body">
        <form class="form form-vertical" method="post" action="{{route("categories.update",$value->id)}}"
              enctype="multipart/form-data">
            @method('PUT')
            @csrf

                <div class="form-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="ust_id">Kategorisi</label>
                                <select name="ust_id" class="form-control">
                                    <option><-- Kategori Seçiniz --></option>
                                    <option {{$value->ust_id == null ? 'selected' : null}} value="null">Ana Kategori</option>
                                    @foreach ($categories as $category)
                                        <option {{$value->ust_id == $category->id ? 'selected' : null}} value="{{ $category->id }}">{{ $category->cat_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="first-name-vertical">Kategori Adı </label>
                                <input type="text" id="first-name-vertical" class="form-control"
                                       name="cat_name" value="{{$value->cat_name}}" required>

                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="first-name-vertical">Başlık </label>
                                <input type="text" id="first-name-vertical" class="form-control"
                                       name="title" value="{{$value->title}}" required>

                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="email-id-vertical">İçerik</label>
                                <textarea name="description" id="description" cols="30" required
                                          rows="10">{!! $value->description !!}</textarea>
                            </div>
                            <script>
                                ClassicEditor
                                    .create(document.querySelector('#description'))
                                    .catch(error => {
                                        console.error(error);
                                    });
                            </script>
                        </div>


                        <div class="col-12">
                            <div class='form-check'>
                                <div class="mb-3">
                                    <label for="formFileSm" class="form-label">Header Resmi </label>
                                    <input class="form-control form-control-sm" id="formFileSm" name="cat_bg"
                                           type="file">
                                    <small style="color: red;font-weight: bold">Yanlızca 1080X1080 px ölçülerinde</small>
                                </div>
                                <div class="mb-3 right">
                                    <label for="formFileSm" class="form-label">Mevcut Header Resmi </label>
                                    <img src="{{$value->cat_bg}}" width="30%" alt="">
                                </div>

                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <label for="email-id-vertical">Sıralaması</label>
                                <input type="number" id="email-id-vertical" class="form-control"
                                       name="must" value="{{$value->must}}" required>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <label for="email-id-vertical">Durumu</label>

                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="hidden" id="flexSwitchCheckChecked" name="isActive" value="0" >
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="isActive" value="1"  {{$value->isActive ? 'checked' :null }} >
                                <label class="form-check-label" for="flexSwitchCheckChecked">Aktif/Pasif</label>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Güncelle</button>

                        </div>
                    </div>
                </div>

        </form>
    </div>
</div>
