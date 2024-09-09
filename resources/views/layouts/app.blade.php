<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Techmybiz</title>
    
            <!-- Favicon -->
    <link rel="shortcut icon" href="images/logo.png" type="image/png">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

   <!-- plugins:css -->
   <link rel="stylesheet" href="css/materialdesignicons.min.css">
   <link rel="stylesheet" href="css/vendor.bundle.base.css">
   <!-- endinject -->
   <!-- Plugin css for this page -->
   <!-- End plugin css for this page -->
   <!-- inject:css -->
   <!-- endinject -->
   <!-- Layout styles -->
   <link rel="stylesheet" href="css/style.css">
   <!-- End layout styles -->

</head>
<body>
    <div class="container-scroller">
              <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="/"><img style="height: 74px; width: 150px" src="images/logo.png" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="/"><img style="height: 74px; width: 150px" src="images/logo.png" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item d-none d-lg-block full-screen-link">
                <a class="nav-link">
                  <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                </a>
              </li>
            
              @guest
                @if (Route::has('login'))
                    <li class="nav-item d-none d-lg-block full-screen-link">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item d-none d-lg-block full-screen-link">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif  
              @else
              <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                  <div class="nav-profile-text">
                    <p class="mb-1 text-white"> {{ Auth::user()->name }}</p>
                  </div>
                </a>
                <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                    <i class="mdi mdi-cached me-2 text-success"></i>  {{ __('Logout') }} </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
              </li>
              @endguest
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span style="color: white;" class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->


      <div class="container-fluid page-body-wrapper">
        @guest
          <!-- partial:partials/_sidebar.html -->
          <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul style="display:none" class="nav">
              <li class="nav-item">
                <a class="nav-link" href="/">
                  <span class="menu-title">Dashboard</span>
                  <i class="mdi mdi-home menu-icon"></i>
                </a>
              </li>

            </ul>
          </nav>
        @else
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="/home">
                    <span class="menu-title">Dashboard</span>
                    <i class="mdi mdi-home menu-icon"></i>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="/apply-form">
                    <span class="menu-title">Application Form</span>
                    <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="/applicant-profile">
                    <span class="menu-title">Profile</span>
                    <i class="mdi mdi-contacts menu-icon"></i>
                  </a>
                </li>
  
              </ul>
            </nav>
        @endguest
         <!-- partial -->
        <div class="main-panel">
            @yield('content')
             <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="container-fluid d-flex justify-content-between">
                <span class="text-muted d-block text-center text-sm-start d-sm-inline-block"></span>
                <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"></span>
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
    <script src="js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="js/dashboard.js"></script>
    <!-- End custom js for this page -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (session('message'))
        <script>
            swal("Good job!", "{{ session('message') }}!", "success");
        </script>
    @endif
    @if (session('error'))
        <script>
            swal("Error!", "{{ session('error') }}!", "warning");
        </script>
    @endif
</body>
</html>
