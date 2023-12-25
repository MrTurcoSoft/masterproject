<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="height: 100%;">
@include('frontend.inc.head')
<title>@yield('title')</title>
<body class="scroll-assist">
<a id="top"></a>
<div class="loader"></div>
@include('frontend.inc.header')
<!--end of modal-container-->
<div class="main-container transition--fade">

    @yield('content')

@include('frontend.inc.footer')
</div>
<script src="{{asset('frontend/js/mrturco.js')}}"></script>
@yield('page-js')
</body>
</html>
