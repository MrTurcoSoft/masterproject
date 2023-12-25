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
                       {{-- <li><a href="{{ url('/settings/create') }}">Yeni Ayar Ekle</a></li>--}}
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
                            <h3>Yeni Ayar Ekle</h3>
                            <form id="contactForm" action="{{ url('/admin/settings') }}" method="POST">
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger mt-4" id="contactError">
                                        <p><strong>Error!</strong> Problem saving setting.</p>
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
                                    <input type="text" value="{{ old('settings_description') }}" maxlength="100" class="form-control" name="settings_description" id="settings_description" placeholder="Açıklama">
                                </div>

                                <div class="form-group">
                                    <label>Anahtar *</label>
                                    <input type="text" value="{{ old('settings_key') }}" maxlength="100" class="form-control" name="settings_key" id="settings_key" placeholder="Anahtar">
                                </div>

                                    <div class="form-group">
                                        <label>Tipi *</label>
                                        <input type="text" value="{{ old('settings_type') }}" maxlength="100" class="form-control" name="settings_type" id="settings_type" placeholder="Tipi">
                                    </div>

                                    <div class="form-group">
                                        <label>Sırası *</label>
                                        <input type="text" value="{{ old('settings_must') }}" maxlength="100" class="form-control" name="settings_must" id="settings_type" placeholder="Sırası">
                                    </div>

                                <div class="form-group">
                                    <label>Değer *</label>
                                    <textarea maxlength="5000" rows="8" class="form-control" name="settings_value" id="settings_value" placeholder="Değer">{{ old('value') }}</textarea>
                                </div>

                                <input type="submit" value="Yeni Ayar Ekle" class="btn btn-primary">
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
