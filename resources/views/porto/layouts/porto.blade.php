<!DOCTYPE html>
<html lang="en">
@include('porto.inc.head')

<body data-plugin-page-transition>
<div class="body">

   @include('porto.inc.header')

    <!-- Main Content -->
    <div role="main" class="main">
       @yield('content')
    </div>

   @include('porto.inc.footer')
</div>

<!-- Vendor -->
<script src="{{asset('porto/vendor/plugins/js/plugins.min.js')}}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{asset('porto/js/theme.js')}}"></script>

<!-- Circle Flip Slideshow Script -->
<script src="{{asset('porto/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js')}}"></script>
<!-- Current Page Views -->
<script src="{{asset('porto/js/views/view.home.js')}}"></script>

<!-- Theme Custom -->
<script src="{{asset('porto/js/custom.js')}}"></script>

<!-- Theme Initialization Files -->
<script src="{{asset('porto/js/theme.init.js')}}"></script>

@yield('page-js')

</body>
</html>
