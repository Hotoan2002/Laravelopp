<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <!-- plugins:css -->

  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ url('assets/css/shared/style.css') }}">
  <!-- endinject -->
  <!-- Layout styles -->

  <link rel="stylesheet" href="{{ url('assets/css/demo_1/style.css') }}">
  <link rel="stylesheet" href="{{ url('css/util.css') }}">
  <!-- End Layout styles -->
  <link rel="shortcut icon" href="{{ url('/assets/images/favicon.ico') }}" />
  <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.21.4/dist/bootstrap-table.min.css">
</head>

<body>

  <div class="container-scroller">
    @include('admin.inc.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      @include('admin.inc.sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          @yield('content')
        </div>
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
              bootstrapdash.com 2020</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap
                admin templates</a> from Bootstrapdash.com</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ URL::asset('./public/assets/vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="assets/vendors/js/vendor.bundle.addons.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ URL::asset('./public/assets/js/shared/off-canvas.js') }}"></script>
  <script src="{{ URL::asset('./public/assets/js/shared/misc.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ URL::asset('./public/assets/js/demo_1/dashboard.js') }}"></script>
  <!-- End custom js for this page-->
  <script src="{{ URL::asset('./public/assets/js/shared/jquery.cookie.js') }}" type="text/javascript"></script>
</body>

</html>