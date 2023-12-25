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
                            <h3>Ayarı Güncelle</h3>
                            <form id="contactForm" action="{{ url('/settings/'.$setting->id) }}" method="POST">
                                <input name="_method" type="hidden" value="PUT">

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

                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label>Açıklama *</label>
                                    <input type="text" readonly value="{{ $setting->settings_description }}" maxlength="100" class="form-control" name="settings_description" id="settings_description" placeholder="Option">
                                </div>

                                <div class="form-group">
                                    <label>Anahtar *</label>
                                    <input type="text" value="{{ $setting->settings_key }}" readonly maxlength="100" class="form-control" name="settings_key" id="settings_key" placeholder="Slug">
                                </div>
                                <div class="form-group">
                                    <label>Tipi *</label>
                                    <input type="text" value="{{ $setting->settings_type }}" readonly maxlength="100" class="form-control" name="settings_type" id="settings_type" placeholder="Slug">
                                </div>

                                <div class="form-group">
                                    <label>Değer *</label>
                                    <textarea maxlength="5000" rows="8" class="form-control" name="settings_value" id="settings_value" placeholder="Value">{{ $setting->settings_value }}</textarea>
                                </div>

                                <input type="submit" value="Ayarı Güncelle" class="btn btn-primary">
                            </form>

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
