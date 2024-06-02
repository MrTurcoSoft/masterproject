<!DOCTYPE html>
<html lang="en">
@include('porto.inc.head')

<body class="loading-overlay-showing" data-loading-overlay data-plugin-options="{'hideDelay': 500, 'effect': 'percentageProgress2'}">
<div class="loading-overlay loading-overlay-percentage loading-overlay-percentage-effect-2">
    <div class="loading-overlay-background-layer"></div>
    <div class="page-loader-progress-wrapper">
        <span class="page-loader-progress">0</span>
        <span class="page-loader-progress-symbol">%</span>
    </div>
</div>
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
