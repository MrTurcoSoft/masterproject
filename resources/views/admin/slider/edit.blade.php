<div class="card-content">
    <div class="card-body">
        <form class="form form-vertical" method="post" action="{{route("slider-management.update",$value->id)}}" enctype="multipart/form-data" >
            @method('PUT')
            @csrf
            <div class="form-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="first-name-vertical">Slider İçeriği </label>
                            <input type="text" id="first-name-vertical" class="form-control"
                                   name="title" value="{{$value->title}}" required >

                        </div>
                        <div class="form-group">
                            <label for="content">Slider İçeriği 1.satır</label>
                            <input type="text" id="content" class="form-control"
                                   name="content" value="{{$value->content}}" required >

                        </div>
                        <div class="form-group">
                            <label for="content2">Slider İçeriği 2.satır</label>
                            <input type="text" id="content2" class="form-control"
                                   name="content2" value="{{$value->content2}}" required >

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
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="hidden" id="flexSwitchCheckChecked" name="isActive" value="0" >
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="isActive" value="1"  {{$value->isActive ? 'checked' :null }} >
                            <label class="form-check-label" for="flexSwitchCheckChecked">Aktif/Pasif</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class='form-check'>
                            <div class="mb-3">
                                <label for="formFileSm" class="form-label">Slider Resmi </label>
                                <input class="form-control form-control-sm" id="formFileSm" name="image" type="file">
                                <small style="color: red;font-weight: bold">Yanlızca 1920x1280 px ölçülerinde</small>
                            </div>
                            <div class="mb-3 right">
                                <label for="formFileSm" class="form-label">Mevcut Slider Resmi </label>
                                <img src="{{$value->image}}" width="30%" alt="">
                            </div>

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
