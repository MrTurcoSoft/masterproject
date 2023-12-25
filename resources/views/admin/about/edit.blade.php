<div class="card-content">
    <div class="card-body">
        <form class="form form-vertical" method="post" action="{{route("about.update",$value->id)}}" enctype="multipart/form-data" >
            @csrf
            @if($type == 'bg')
                <div class="col-12">
                    <div class='form-check'>
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">Header Arka Plan Resmi </label>
                            <input class="form-control form-control-sm" id="formFileSm" name="bg" type="file">
                            <small style="color: red;font-weight: bold">Yanlızca 1080x1080 px ölçülerinde</small>
                        </div>
                        <div class="mb-3 right">
                            <label for="formFileSm" class="form-label">Mevcut Header Arka Plan Resmi </label>
                            <img src="{{$value->bg}}" width="30%" alt="">
                        </div>

                    </div>
                </div>
            @elseif($type == 'image')
                <div class="col-12">
                    <div class='form-check'>
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">Hakkımızda Resmi </label>
                            <input class="form-control form-control-sm" id="formFileSm" name="image" type="file">
                            <small style="color: red;font-weight: bold">Yanlızca 3000x3000 px ölçülerinde</small>
                        </div>
                        <div class="mb-3 right">
                            <label for="formFileSm" class="form-label">Mevcut Hakkımızda Resmi </label>
                            <img src="{{$value->image}}" width="30%" alt="">
                        </div>

                    </div>
                </div>
            @else

            <div class="form-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="first-name-vertical">Başlık</label>
                            <input type="text" id="first-name-vertical" class="form-control"
                                   name="name" value="{{$value->name}}" required >
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="email-id-vertical">İçerik</label>
                            <textarea class="form-control" id="body" required name="description">{!! $value->description !!}</textarea>

                        </div>
                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#body' ) )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>
                    </div>
                    @endif
                    <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary me-1 mb-1">Güncelle</button>

                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
