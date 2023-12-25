<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Guestbook</title>

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
                    <a class="navbar-brand" href="{{ url('/guestbook') }}">
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
                            <h3>Ayarları Göster</h3>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Açıklama</th>
                                    <th>Anahtar</th>
                                    <th>Tipi</th>
                                    <th>Değer</th>
                                    <th>İşlemler</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $setting->id }}</td>
                                        <td>{{ $setting->settings_description }}</td>
                                        <td>{{ $setting->settings_key }}</td>
                                        <td>{{ $setting->settings_type }}</td>
                                        <td>{{ $setting->settings_value }}</td>
                                        <td>
                                            <a href="{{ url('/settings/'.$setting->id.'/edit') }}">Edit</a> |
                                            <a href="{{ url('/settings/'.$setting->id) }}">Show</a>
                                        </td>
                                    </tr>
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
    <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>
