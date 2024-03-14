<!DOCTYPE html>
<html lang="en">

<head>
  <!-- session -->
  <!-- <meta http-equiv="refresh" content="{{ config('session.lifetime') * 30 }}; url=/logout"> -->
  <!-- sessionend -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard 2</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/css/adminlte.min.css">
  <!-- jsGrid -->
  <link rel="stylesheet" href="../../plugins/jsgrid/jsgrid.min.css">
  <link rel="stylesheet" href="../../plugins/jsgrid/jsgrid-theme.min.css">
</head>

<!-- <body> -->


<div class="wrapper">
  @if ($message = session('success'))
  <div class="alert alert-success alert-block">
    <strong>{{ $message }}</strong>
  </div>
  @endif
  @if ($message = session('error'))
  <div class="alert alert-danger alert-block">
    <strong>{{ $message }}</strong>
  </div>
  @endif
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block"> <a class="nav-link text-success btn btn-outline-success" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: one;">

          @csrf
        </form>

      </li> -->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <!-- <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a> -->
        <!-- <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div> -->
      </li>

      <!-- Messages Dropdown Menu -->

      <!-- Message End -->
      <!-- </a> -->
      <div class="dropdown-divider"></div>
      <a href="#" class="dropdown-item">
        <!-- Message Start -->
   
        <!-- Message End -->
      </a>
      <div class="dropdown-divider"></div>
      <a href="#" class="dropdown-item">
        <!-- Message Start -->
        <div class="media">
     

          <a style="    margin-top: -8px;" class="nav-link " href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <!-- Logout -->
            <img src="assets/img/user.png" class="img-circle elevation-2" alt="User Image" style="height: 30px; width:30px; 
                  margin-top: -15px; margin-left:5px;
              ">
            <h6 style="    margin-top: -5px;"><b>logout</b></h6>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: one;">
            @csrf
          </form>
        </div>
 
      </a>
      <div class="dropdown-divider"></div>
      <!-- <a href="#" class="dropdown-item dropdown-footer">See All Messages</a> -->
</div>
</li>

<li class="nav-item">
  <a class="nav-link" data-widget="fullscreen" href="#" role="button">
    <i class="fas fa-expand-arrows-alt"></i>
  </a>
</li>
<!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
</ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php if (Auth::check()) {
  if (Auth::user()->role == 'Admin') { // if the current role is Administrator
?>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <!-- <span class="brand-text font-weight-light">AdminLTE 3</span> -->
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="assets/img/user.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <u><strong><a href="/admin" class="d-block">Role: &nbsp;{{Auth::user()->role }}</a></strong> </u>
            Name: &nbsp;<span>{{Auth::user()->name }}</span>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item ">
              <a href="/admin" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <!-- <i class="right fas fa-angle-left"></i> -->
                </p>
              </a>

            </li>

            <!-- tables -->
            <li class="nav-item">
              <a href="table_view" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  User List
                </p>
              </a>
            </li>
            <!-- gallerry -->
            <li class="nav-item">
              <a href="banner_list" class="nav-link">
                <i class="nav-icon far fa-image"></i>
                <p>
                  Banner List
                </p>
              </a>
            </li>
            <!-- login&reg -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-address-book"></i>
                <p>
                  Login & Register
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <!-- <li class="nav-item">
                    <a href="login_view" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Login</p>
                    </a>
                  </li> -->
                <li class="nav-item">
                  <a href="register_view" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Register </p>
                  </a>
                </li>

              </ul>
            </li>
            <!-- products -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Product
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="projects" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Product List</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="projects-add" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Products Add</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="banner_upload" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Banner Upload</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="about_show" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>About Upload</p>
                  </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="project-detail" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Products Detail</p>
                    </a>
                  </li>
                </ul>
              </li> -->


                <!-- <li class="nav-item">
              <a href="gallery" class="nav-link">
                <i class="nav-icon far fa-image"></i>
                <p>
                  Gallery
                </p>
              </a>
            </li> -->

              </ul>
            </li>
            <!-- Examples -->
            <li class="nav-header">EXAMPLES</li>
            <li class="nav-item">
              <a href="calendar" class="nav-link">
                <i class="nav-icon fas fa-calendar-alt"></i>
                <p>
                  Calendar
                  <span class="badge badge-info right">2</span>
                </p>
              </a>
            </li>
            <!-- contacts -->
            <li class="nav-item">
              <a href="contact-us" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Contact us</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="enquiry" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Product Enquiry</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

  <?php } elseif (Auth::user()->role == 'User') {

  ?>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->


      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="assets/img/user.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <u><strong><a href="/admin" class="d-block">Role: &nbsp;{{Auth::user()->role }}</a></strong> </u>
            Name: &nbsp;<span>{{Auth::user()->name }}</span>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item ">
              <a href="/admin" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>

            </li>

            <!-- tables -->
            <li class="nav-item">
              <a href="table_view" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  User List
                </p>
              </a>
            </li>
            <!-- gallerry -->
            <!-- <li class="nav-item">
                <a href="gallery" class="nav-link">
                  <i class="nav-icon far fa-image"></i>
                  <p>
                    Gallery
                  </p>
                </a>
              </li> -->
            <!-- login&reg -->
            <!-- <li class="nav-item">
                <a href="login_view" class="nav-link">
                  <i class="nav-icon fa fa-address-book"></i>
                  <p>
                    Login
                  </p>
                </a>
              </li> -->
            <!-- products -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Products
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="projects" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Product List</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="projects-add" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Products Add</p>
                  </a>
                </li>
              </ul>
              <!-- <li class="nav-item">
                    <a href="project-edit" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Products Edit</p>
                    </a>
                  </li> -->
              <!-- <li class="nav-item">
                    <a href="project-detail" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Products Detail</p>
                    </a>
                  </li>
                </ul>
              </li> -->
              <!-- Examples -->
            <li class="nav-header">EXAMPLES</li>
            <!-- <li class="nav-item">
                    <a href="calendar" class="nav-link">
                      <i class="nav-icon fas fa-calendar-alt"></i>
                      <p>
                        Calendar
                        <span class="badge badge-info right">2</span>
                      </p>
                    </a>
                  </li> -->
            <!-- contacts -->
            <li class="nav-item">
              <a href="contact-us" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Contact us</p>
              </a>
            </li>
            <!-- <li class="nav-item">
                    <a href="pages/examples/faq.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Product Enquiry</p>
                    </a>
                  </li> -->

            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

<?php
  }
}
?>
@yield('content')
<!-- Main index -->


<!-- End main index -->


<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
  <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 3.2.0
  </div>
</footer>
</div>



<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- </body> -->

<script>
  (function() {
    const idleDurationSecs = 7200;
    const warningDurationSecs = 5400;
    let idleTimeout;
    let warningTimeout;

    const resetIdleTimeout = function() {
      clearTimeout(warningTimeout);
      warningTimeout = setTimeout(
        () =>
        toastr.warning(
          "Please refresh the page to remain active",
          "Your session is about to expire", {
            timeOut: 1800000
          }
        ),
        warningDurationSecs * 1000
      );
      clearTimeout(idleTimeout);
      idleTimeout = setTimeout(
        () => document.getElementById("logout-form").submit(),
        idleDurationSecs * 1000
      );
    };

    // Key events for reset time
    resetIdleTimeout();
    window.onmousemove = resetIdleTimeout;
    window.onkeypress = resetIdleTimeout;
    window.click = resetIdleTimeout;
    window.onclick = resetIdleTimeout;
    window.touchstart = resetIdleTimeout;
    window.onfocus = resetIdleTimeout;
    window.onchange = resetIdleTimeout;
    window.onmouseover = resetIdleTimeout;
    window.onmouseout = resetIdleTimeout;
    window.onmousemove = resetIdleTimeout;
    window.onmousedown = resetIdleTimeout;
    window.onmouseup = resetIdleTimeout;
    window.onkeypress = resetIdleTimeout;
    window.onkeydown = resetIdleTimeout;
    window.onkeyup = resetIdleTimeout;
    window.onsubmit = resetIdleTimeout;
    window.onreset = resetIdleTimeout;
    window.onselect = resetIdleTimeout;
    window.onscroll = resetIdleTimeout;
  })();
</script>

</html>