<div class="card-content">
    <div class="card-body">
        <form class="form form-vertical" method="post" action="{{route("certificates.store")}}" enctype="multipart/form-data" >
            @csrf
            <div class="form-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="email-id-vertical">Belge İsmi</label>
                            <input type="text" id="email-id-vertical" class="form-control"
                                   name="name"  required>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class='form-check'>
                            <div class="mb-3">
                                <label for="formFileSm" class="form-label">Sertifika/Belge </label>
                                <input class="form-control form-control-sm" id="formFileSm" name="image" type="file">
                                <small style="color: red;font-weight: bold">Yanlızca 600x800 px ölçülerinde</small>
                            </div>


                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="hidden" id="flexSwitchCheckChecked" name="isActive" value="0" >
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="isActive" value="1"  checked >
                            <label class="form-check-label" for="flexSwitchCheckChecked">Aktif/Pasif</label>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary me-1 mb-1">Yeni Ekle</button>

                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
