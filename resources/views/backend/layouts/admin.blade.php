<!DOCTYPE html>
<html lang="en">

<head>
  @include('backend.inc.head')
</head>
<body>

<!-- Begin page -->
<div id="layout-wrapper">

    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">

        <div data-simplebar class="h-100">

            <div class="navbar-brand-box">
                <a href="{{route('dashboard')}}" class="logo">
                    <img src="{{asset(SiteHelpers::ayar('logo_small'))}}" />
                </a>
            </div>

            <!--- Sidemenu -->
            @include('backend.inc.sidebar')
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->

    @include('backend.inc.header')

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

       @yield('content')
        <!-- End Page-content -->

       @include('backend.inc.footer')

    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Overlay-->
<div class="menu-overlay"></div>


<!-- jQuery  -->
<script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('backend/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('backend/assets/js/metismenu.min.js')}}"></script>
<script src="{{asset('backend/assets/js/waves.js')}}"></script>
<script src="{{asset('backend/assets/js/simplebar.min.js')}}"></script>

<!-- Morris Js-->
<script src="{{asset('backend/plugins/morris-js/morris.min.js')}}"></script>
<!-- Raphael Js-->
<script src="{{asset('backend/plugins/raphael/raphael.min.js')}}"></script>

<!-- Morris Custom Js-->
<script src="{{asset('backend/assets/pages/dashboard-demo.js')}}"></script>

<!-- App js -->
<script src="{{asset('backend/assets/js/theme.js')}}"></script>

@yield('page-js')

</body>

</html>
