<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Site Settings</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ asset('admin/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet">

    </head>
    <body>

        <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/settings') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="https://by-turco.com" target="_blank">MrTurco</a></li>
                        <li><a href="{{ url('/settings') }}">Tüm Site Ayarları</a></li>
                        <li><a href="{{ url('/settings/create') }}">Yeni Ayar Ekle</a></li>
                    </ul>
                </div>
            </div>
        </nav>

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
                                            <td>
                                                <a href="{{ url('/settings/'.$setting->id.'/edit') }}"><button class="btn btn-warning btn-sm">Düzenle</button></a>
                                                <a href="{{ url('/settings/'.$setting->id) }}"><button class="btn btn-primary btn-sm">Show</button></a>
                                            </td>
                                            <td>{{ $setting->settings_description }}</td>
                                            <td>{{ $setting->settings_key }}</td>
                                            <td>{{ $setting->settings_type }}</td>
                                            <td>{{ $setting->settings_value }}</td>

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
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>Usage</h3>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>{{ config('settings.site_name') }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ config('settings.site_url') }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ config('settings.site_description') }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ config('settings.email') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="{{ asset('admin/js/app.js') }}"></script>

    </body>
</html>
