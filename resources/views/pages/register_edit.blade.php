@extends('pages.layout.index')

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
      <!-- <a href="../../index2.html"><b>Admin</b>LTE</a> -->
    </div>
    <div class="card">
    <div>
    <!-- <a href="{{ url()->previous() }}" ><i class="fa fa-angle-double-left" aria-hidden="true"></i></a> -->
    </div>
      <div class="card-body register-card-body">
        <p class="login-box-msg">Update membership</p>

        <form action="{{ url('register/update').'/'. $user->id }}" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
          <div class="input-group mb-3">
            <input type="text" class="form-control" id="id" placeholder="Enter id" name="id" value="{{$user->id}}">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-badge"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Full name" name="name" value="{{$user->name}}">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email" value="{{$user->email}}">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password" value="{{$user->password}}">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <select name="role" id="" class="form-control">
              <option value="">{{$user->role}}</option>
              <option value="Admin">Admin</option>
              <option value="User">User</option>
            </select>

            <!-- <input type="password" class="form-control" placeholder="Retype password" name="cpassword"> -->
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <!-- <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div> -->
          <!-- /.col -->
          <?php if (Auth::check()) {
                  if (Auth::user()->role == 'Admin') { // if the current role is Administrator
                ?>

          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Update</button>
          </div>

          <?php }} ?>
          <!-- /.col -->
      </div>
      </form>

      <!-- <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div> -->

      <!-- <a href="login_view" class="text-center">I already have a register</a> -->
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
</body>