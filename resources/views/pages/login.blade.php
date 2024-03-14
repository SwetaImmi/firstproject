@extends('pages.layout.index')
<meta name="csrf-token" content="{{ csrf_token() }}" />

<body class="hold-transition login-page">
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

  <div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>

    <!-- /.login-logo -->
    <div class="card">
      <div>
        <a href="{{ url()->previous() }}"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
      </div>
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <!-- alert -->
        <div class="alert  print-error-msg " style="display:none " role="alert">
          <span style="color: red;">
            <strong>Error!</strong> Please Fill the valid information...
          </span>
        </div>
        <!-- alert -->

        <form action="login/post" method="post">
          @csrf
          <div class="input-group mb-3">
            <strong style="color: red;">*</strong>
            Email:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="email" class="form-control" placeholder="Email" name="email" id="email" value="{{ old('email') }}">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <strong style="color: red;">*</strong>
            Password:-&nbsp;
            <input type="password" class="form-control" placeholder="Password" id="password" name="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember" value="1" name="remember_me">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button id="submita" type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <!-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
        <!-- /.social-auth-links -->

        <p class="mb-1">
          <a href="register_view">I forgot my password</a>
        </p>
        <p class="mb-0">
          <a href="register_view" class="text-center">Register a new membership</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->



  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>

  <!-- errror message -->

 
</body>