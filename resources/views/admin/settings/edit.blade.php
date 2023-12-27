<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form id="contactForm" action="{{ route('settings.update',$setting->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        @if (count($errors) > 0)
                            <div class="alert alert-danger mt-4" id="contactError">
                                <p><strong>Error!</strong> Problem updating setting.</p>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if($setting->settings_type =='text')


                        <div class="form-group">
                            <label>Açıklama *</label>
                            <input type="text" disabled value="{{ $setting->settings_description }}" maxlength="100"
                                   class="form-control" name="settings_description" id="settings_description"
                                   placeholder="Option">
                        </div>

                        <div class="form-group">
                            <label>Değer *</label>
                            <input type="text" class="form-control" name="settings_value" value="{{ $setting->settings_value }}" >
                        </div>
                        @elseif($setting->settings_type =='logo' || $setting->settings_type =='slogo' || $setting->settings_type =='favicon')
                            <div class="form-group">
                                <label>Açıklama *</label>
                                <input type="text" disabled value="{{ $setting->settings_description }}" maxlength="100"
                                       class="form-control" name="settings_description" id="settings_description"
                                       placeholder="Option">
                            </div>

                            <div class="form-group">
                                <label>Değer *</label>
                                <input type="file" class="form-control" name="settings_value" >
                            </div>
                        @elseif($setting->settings_type =='textarea')
                            <div class="form-group">
                                <label>Açıklama *</label>
                                <input type="text" disabled value="{{ $setting->settings_description }}" maxlength="100"
                                       class="form-control" name="settings_description" id="settings_description"
                                       placeholder="Option">
                            </div>

                            <div class="form-group">
                                <label>Değer *</label>
                                <textarea class="form-control" name="settings_value" id="body" cols="30" rows="10">{!! $setting->settings_value !!}</textarea>
                            </div>
                        @elseif($setting->settings_type =='switch')
                            <div class="form-group">
                                <label>Açıklama *</label>
                                <input type="text" disabled value="{{ $setting->settings_description }}" maxlength="100"
                                       class="form-control" name="settings_description" id="settings_description"
                                       placeholder="Option">
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="hidden" id="flexSwitchCheckChecked" name="settings_value" value="0" >
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="settings_value" value="1"  {{$setting->settings_value ? 'checked' :null }} >
                                <label class="form-check-label" for="flexSwitchCheckChecked">Pasif / Aktif</label>
                            </div>

                        @elseif($setting->settings_type =='ckeditor')
                            <div class="form-group">
                                <label>Açıklama *</label>
                                <input type="text" disabled value="{{ $setting->settings_description }}" maxlength="100"
                                       class="form-control" name="settings_description" id="settings_description"
                                       placeholder="Option">
                            </div>

                            <div class="form-group">
                                <label>Değer *</label>
                                <textarea class="form-control" name="settings_value" id="body" cols="30" rows="10">{!! $setting->settings_value !!}</textarea>
                            </div>
                            <script>
                                ClassicEditor
                                    .create(document.querySelector('#body'))
                                    .catch(error => {
                                        console.error(error);
                                    });
                            </script>

                        @endif
                        <input type="hidden" name="settings_type" value="{{$setting->settings_type}}">
                        <input type="submit" value="Ayarı Güncelle" class="btn btn-primary">
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
