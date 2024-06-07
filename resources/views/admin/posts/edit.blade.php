<div class="card-content">
    <div class="card-body">
        <form class="form form-vertical" method="post" action="{{route("posts.update",$value->id)}}"
              enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="form-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="title">Başlık </label>
                            <input type="text" id="title" class="form-control"
                                   name="title" value="{{$value->title}}" required>

                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="content">İçerik</label>
                            <textarea name="content" id="content" cols="30" required
                                      rows="10">{!! $value->content !!}</textarea>
                        </div>
                        <script>
                            ClassicEditor
                                .create(document.querySelector('#content'))
                                .catch(error => {
                                    console.error(error);
                                });
                        </script>
                    </div>
                    <div class="form-group">
                        <label for="tags">Tags</label>
                        <input type="text" class="form-control" id="tags" name="tags" value="{{ $value->tags->pluck('name')->implode(', ') }}">
                    </div>

                    <div class="col-12">
                        <div class='form-check'>
                            <div class="mb-3">
                                <label for="formFileSm" class="form-label">Post Resmi </label>
                                <input class="form-control form-control-sm" id="formFileSm" name="image"
                                       type="file">
                                <small style="color: red;font-weight: bold">Yanlızca 1200px x 500px
                                    ölçülerinde</small>
                            </div>
                            <div class="mb-3 right">
                                <label for="formFileSm" class="form-label">Mevcut Post Resmi </label>
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
