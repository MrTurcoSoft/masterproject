<div class="card-content">
    <div class="card-body">
        <form class="form form-vertical" method="post" action="{{route("posts.store")}}"
              enctype="multipart/form-data">
            @csrf
            <div class="form-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="title">Başlık </label>
                            <input type="text" id="title" class="form-control"
                                   name="title"  required>

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="content">İçerik</label>
                            <textarea name="content" id="content" cols="30"
                                      rows="10"></textarea>
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
                        <input type="text" class="form-control" id="tags" name="tags" placeholder="Tagları Virgülle ayırarak giriniz">
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
                        </div>
                    </div>

                    <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary me-1 mb-1">Ekle</button>

                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
