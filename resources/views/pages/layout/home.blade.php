<!DOCTYPE html>
<html lang="en">

<head>
  <!-- session -->
  <!-- <meta http-equiv="refresh" content="{{ config('session.lifetime') * 15 }}; url=/logout"> -->
  <!-- sessionend -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Projects</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="../plugins/ekko-lightbox/ekko-lightbox.css">
  <!-- jsGrid -->
  <link rel="stylesheet" href="../../plugins/jsgrid/jsgrid.min.css">
  <link rel="stylesheet" href="../../plugins/jsgrid/jsgrid-theme.min.css">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <!-- banner start -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <!-- Banner End -->

  <!-- ajax -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- ajax -->
  <style>
    .form-control {
      height: 40px;
    }
  </style>

</head>

<body class="hold-transition sidebar-mini">
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
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="../../index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
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
          </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
  
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php if (Auth::check()) {
      if (Auth::user()->role == 'Admin') { // if the current role is Administrator
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
              <div class="info" style="color: #fff;">
                <strong><a href="/admin" class="d-block">Role: &nbsp;{{Auth::user()->role }}</a></strong>

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
                      Tables
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
                      Products
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="projects" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Products</p>
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

                <li class="nav-item">
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                          Login & Register v1
                          <i class="fas fa-angle-left right"></i>
                        </p>
                      </a>

                    </li>
                  </ul>
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
              <div class="info" style="color: #fff;">
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
                      Tables
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
                        <p>Products</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="projects-add" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Products Add</p>
                      </a>
                    </li>
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
                  <a href="pages/examples/faq.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Product Enquiry</p>
                  </a>
                </li>
              </ul>
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
    @yield('');





    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.2.0
      </div>
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>

  <!-- Filterizr-->
  <script src="../plugins/filterizr/jquery.filterizr.min.js"></script>

  <!-- Ekko Lightbox -->
  <script src="../plugins/ekko-lightbox/ekko-lightbox.min.js"></script>

  <!-- jsGrid -->
  <script src="../../plugins/jsgrid/demos/db.js"></script>
  <script src="../../plugins/jsgrid/jsgrid.min.js"></script>


  <script>
    $(function() {
      $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
          alwaysShowClose: true
        });
      });

      $('.filter-container').filterizr({
        gutterPixels: 3
      });
      $('.btn[data-filter]').on('click', function() {
        $('.btn[data-filter]').removeClass('active');
        $(this).addClass('active');
      });
    })
  </script>

  <script>
    $(function() {
      $("#jsGrid1").jsGrid({
        height: "100%",
        width: "100%",

        sorting: true,
        paging: true,

        data: db.clients,

        fields: [{
            name: "Name",
            type: "text",
            width: 150
          },
          {
            name: "Age",
            type: "number",
            width: 50
          },
          {
            name: "Address",
            type: "text",
            width: 200
          },
          {
            name: "Country",
            type: "select",
            items: db.countries,
            valueField: "Id",
            textField: "Name"
          },
          {
            name: "Married",
            type: "checkbox",
            title: "Is Married"
          }
        ]
      });
    });
  </script>

  <script>
    $(document).ready(function() {
      $('.product-image-thumb').on('click', function() {
        var $image_element = $(this).find('img')
        $('.product-image').prop('src', $image_element.attr('src'))
        $('.product-image-thumb.active').removeClass('active')
        $(this).addClass('active')
      })
    })
  </script>


  <script>
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $('#upload_form').on('submit', function(e) {
      e.preventDefault();

      // var path = this.value.replace(/^C:\\fakepath\\/i, '');
      //       $('.file').on("change", function(){ 
      //          path = this.value.replace(/^C:\\fakepath\\/i, '');
      //          $('#image').text(path);
      //        });
      // alert(image);

      // var name = $("#name").val();
      // var description = $('#description').val();
      // var category = $('#category').val();
      // var quantity = $('#quantity').val();
      // var price = $('#price').val();
      // var image = $('#image').val();
      // var image = $('input#image').val();
      $.ajax({
        url: 'projects_add_create',
        method: "POST",
        data: new FormData(this),
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        // data: {
        //   product_name: name,
        //   product_description: description,
        //   product_catogery: category,
        //   product_quantity: quantity,
        //   product_price: price,
        //   image: image

        // },
        success: function(data) {
          $('#message').css('display', 'block');
          $('#message').html(data.message);
          $('#message').addClass(data.class_name);
//           .bind('invalid', function(event) {
//     //setTimeout(function() { $(event.target).focus();}, 50);
//     //alert('hola!');
//    // $('html, body').animate({ scrollTop: $(this).offset().top}, 200);
//    //$(this).css('background','grey');
//   $(this).focus();
// });
          $('#uploaded_image').html(data.uploaded_image);

          // if ($.isEmptyObject(data.error)) {
          //   alert(data.success);
          //   location.reload();
          // } else {
          //   printErrorMsg(data.error);
          // }
        }

      });

    });

    function printErrorMsg(msg) {
      $(".print-error-msg").find("ul").html('');
      $(".print-error-msg").css('display', 'block');
      $.each(msg, function(key, value) {
        // $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
        $('.print-error-msg').find("input").append('<span>' + value + '</span');

      });
    }
  </script>

  <!-- session -->
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
</body>

</html>