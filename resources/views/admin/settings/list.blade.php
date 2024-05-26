@extends('admin.layouts.admin')
@section('title',SiteHelpers::ayar('author').' | Site Ayarları')
@section('page-css')
    {{--sayfaya özel css kodlarını eklemek için kullanın--}}

@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <h2>Site Ayarları</h2>
                    </div>

                    <div class="panel-body">
                        <h3>Ayarlar Listesi</h3>
                        <div class="flash-message">
                            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                @if(Session::has('alert-' . $msg))
                                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                                @endif
                            @endforeach
                        </div>

                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Sıra</th>
                                <th>İşlemler</th>
                                <th>Açıklama</th>
                                <th>Anahtar</th>
                                <th>Tipi</th>
                                <th>Değer</th>

                            </tr>
                            </thead>
                            <tbody>
                            @if (!$settings->isEmpty())
                                @php $count=1; @endphp
                                @foreach ($settings as $setting)
                                    <tr>
                                        <td>{{ $setting->settings_must }}</td>

                                        <td>{{ $setting->settings_description }}</td>
                                        <td>{{ $setting->settings_key }}</td>
                                        <td>{{ $setting->settings_type }}</td>
                                        <td>@if($setting->settings_type == 'textarea') {!! $setting->settings_value !!}@elseif($setting->settings_type == 'text') {{$setting->settings_value}} @elseif($setting->settings_type == 'logo'|| $setting->settings_type == 'favicon')
                                                <img src="{{asset($setting->settings_value)}}"  width="35%" alt="">@elseif($setting->settings_type == 'switch')<div class="form-check form-switch">
                                                    <input class="form-check-input input-lg " disabled type="checkbox" id="flexSwitchCheckChecked" name="isActive" value="1"  {{$setting->settings_value ? 'checked' :null }} >
                                                </div> @endif</td>
                                        <td>
                                            <a onclick="ByTurcoSoftModal(this.href,'Site Ayarı Düzenle');return false"
                                               href="settings/{{$setting->id}}/type={{$setting->settings_type}}" title="Güncelle"
                                               class="btn btn-primary btn-sm">
                                                <i class="bi bi-pencil-fill"></i>
                                            </a>

                                        </td>
                                    </tr>
                                    @php $count++; @endphp
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="4">No Setting</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection


@section('page-js')
    {{--sayfaya özel js kodlarını eklemek için kullanın--}}

@endsection
