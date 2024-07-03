
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href=" https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="{{url('Rabeya/assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
  <link href="{{url('Rabeya/assets/css/now-ui-dashboard.css?v=1.5.0')}}" rel="stylesheet"/>
  <link href="{{url('Rabeya/assets/css/dataTables.min.css')}}" rel="stylesheet"/>
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{url('Rabeya/assets/demo/demo.css')}}" rel="stylesheet" />
  {{-- ------------------------------------------------------------------------------ --}}
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    {{-- <title>Ample Admin Lite Template by WrapPixel</title> --}}

    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('Rabeya/assets/plugins/images/favicon.png')}}">
    <!-- Custom CSS -->
    <link href="{{ url('Rabeya/assets/plugins/bower_components/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('Rabeya/assets/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css')}}">
    <!-- Custom CSS -->
    <link href="{{ url('Rabeya/assets/css/style.min.css')}}" rel="stylesheet">
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="black">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
        <img src="{{url('frontend/img/LOGO-nbg.png')}}" alt="">
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          UIUCanteen
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
                     <!-- TERNARY OPERATION FOR ACTIVE CLASS -->

          <li class="{{ 'admin' == request()->path() ? 'active' : ''}}">
            <a href="/admin">
              <i class="now-ui-icons design_app" class="admin_nav"></i>
              <p class="admin_nav" >Dashboard</p>
            </a>
          </li>

          <li>
            <a href="/offer">
              <i class="now-ui-icons ui-1_bell-53" class="admin_nav"></i>
              <p class="admin_nav">Offers</p>
            </a>
          </li>
          <li>
            <a href="/notice">
              <i class="now-ui-icons ui-1_bell-53" class="admin_nav"></i>
              <p class="admin_nav">Notice</p>
            </a>
          </li>
          <li>
            <a href="/notification">
              <i class="now-ui-icons ui-1_bell-53" class="admin_nav"></i>
              <p class="admin_nav">Notifications</p>
            </a>
          </li>
          <li class="{{ 'roles' == request()->path() ? 'active' : ''}}">
            <a href="./registered">
              <i class="now-ui-icons users_single-02" class="admin_nav"></i>
              <p class="admin_nav">User Profile</p>
            </a>
          </li>
           {{-- <li class="{{ 'productlist' == request()->path() ? 'active' : ''}}">
            <a href="./productlist">
              <i class="now-ui-icons design_bullet-list-67" class="admin_nav"></i>
              <p class="admin_nav">Edit Product</p>
            </a>
          </li> --}}
          <li class="{{ 'addproduct' == request()->path() ? 'active' : ''}}">
            <a href="./addproduct">
              <i class="now-ui-icons design_bullet-list-67" class="admin_nav"></i>
              <p class="admin_nav">Add Product</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <!-- <a class="navbar-brand" href="#pablo">Table List</a> -->
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
             <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              {{-- <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li> --}}
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="/">Log out</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">
                   @yield('username')</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->


      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
       @yield('content')
       </div>
      </div>
          </nav>
  <!--   Core JS Files   -->
  <script src="{{asset('Rabeya/assets/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('Rabeya/assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('Rabeya/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('Rabeya/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{asset('Rabeya/assets/js/plugins/chartjs.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset('Rabeya/assets/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('Rabeya/assets/js/now-ui-dashboard.min.js?v=1.5.0')}}" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('Rabeya/assets/js/dataTables.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('Rabeya/assets/demo/demo.js')}}"></script>


  {{-- ------------------------------- --}}
  <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('Rabeya/assets/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('assetsbootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('Rabeya/assets/js/app-style-switcher.js')}}"></script>
    <script src="{{asset('Rabeya/assets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('Rabeya/assets/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('Rabeya/assets/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('Rabeya/assets/js/custom.js')}}"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="{{asset('Rabeya/assets/plugins/bower_components/chartist/dist/chartist.min.js')}}"></script>
    <script src="{{asset('Rabeya/assets/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{asset('Rabeya/assets/js/pages/dashboards/dashboard1.js')}}"></script>

  @yield('scripts')
</body>

</html>

