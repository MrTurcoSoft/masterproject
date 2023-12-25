<div class="card-content">
    <div class="card-body">
        <form class="form form-vertical" method="post" action="{{route("homesections.update",$value->id)}}"
              enctype="multipart/form-data">
            @method('PUT')
            @csrf
            @if($section==1)
                <div class="form-body">
                    <div class="row">
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
                        <input type="hidden" name="section" value="1">
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Güncelle</button>

                        </div>
                    </div>
                </div>
            @elseif($section==2)
                <div class="form-body">
                    <div class="row">
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
                                <label for="email-id-vertical">Buton Text</label>
                                <input type="text" id="email-id-vertical" class="form-control"
                                       name="btnText" value="{{$value->btnText}}" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="contact-info-vertical">Buton URL</label>
                                <input type="text" id="contact-info-vertical" class="form-control"
                                       name="url" value="{{$value->url}}" required>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class='form-check'>
                                <div class="mb-3">
                                    <label for="formFileSm" class="form-label">Bölüm Resmi </label>
                                    <input class="form-control form-control-sm" id="formFileSm" name="image"
                                           type="file">
                                    <small style="color: red;font-weight: bold">Yanlızca 1000x1000 px
                                        ölçülerinde</small>
                                </div>
                                <div class="mb-3 right">
                                    <label for="formFileSm" class="form-label">Mevcut Bölüm Resmi </label>
                                    <img src="{{$value->image}}" width="30%" alt="">
                                </div>

                            </div>
                        </div>
                        <input type="hidden" name="section" value="2">
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Güncelle</button>

                        </div>
                    </div>
                </div>
            @elseif($section==4)
                <div class="form-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="first-name-vertical">Başlık </label>
                                <input type="text" id="first-name-vertical" class="form-control"
                                       name="title" value="{{$value->title}}" required>

                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="email-id-vertical">Buton Text</label>
                                <input type="text" id="email-id-vertical" class="form-control"
                                       name="btnText" value="{{$value->btnText}}" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="contact-info-vertical">Buton URL</label>
                                <input type="text" id="contact-info-vertical" class="form-control"
                                       name="url" value="{{$value->url}}" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class='form-check'>
                                <div class="mb-3">
                                    <label for="formFileSm" class="form-label">Bölüm Resmi </label>
                                    <input class="form-control form-control-sm" id="formFileSm" name="image"
                                           type="file">
                                    <small style="color: red;font-weight: bold">Yanlızca 2000x2000 px
                                        ölçülerinde</small>
                                </div>
                                <div class="mb-3 right">
                                    <label for="formFileSm" class="form-label">Mevcut Bölüm Resmi </label>
                                    <img src="{{$value->image}}" width="30%" alt="">
                                </div>

                            </div>
                        </div>
                        <input type="hidden" name="section" value="4">
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Güncelle</button>

                        </div>
                    </div>
                </div>
            @endif

        </form>
    </div>
</div>
