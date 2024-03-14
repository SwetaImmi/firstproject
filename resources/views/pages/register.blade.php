@extends('pages.layout.index')
<meta name="csrf-token" content="{{ csrf_token() }}" />

<body class="hold-transition register-page">

  <div class="register-box">
    <div class="register-logo">
      <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>
    <div id="alert" class="alert-success " data-message="my message">


      <div class="card">
        <div>
          <a href="{{ url()->previous() }}?/BACK"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
        </div>
        <!-- @if ($message = Session::get('success'))
        <div class=" success p-4 mb-3 bg-green-200 rounded" id="success">
          <p class="text-green-800">{{ $message }}</p>
        </div>
        @endif -->

        <div class="card-body register-card-body">
          <p class="login-box-msg">Register a new membership</p>
          <!-- alert -->
          <div class="alert print-error-msg " style="display:none " role="alert">
            <span style="color: red;">
              <strong>Error!</strong> Please Fill the valid information...
            </span>
          </div>
          <!-- alert -->
          <form>
            @csrf
            <div class="input-group mb-3">
            <strong style="color: red;">*</strong>
             Name:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" class="form-control" placeholder="Full name" name="name" id="name">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
            <strong style="color: red;">*</strong>
            Email:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="email" class="form-control" placeholder="Email" name="email" id="email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
            <strong style="color: red;">*</strong>
              Password:<input type="password" class="form-control" placeholder="Password" name="password" id="password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
            <strong style="color: red;">*</strong>
              Role:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <select name="role" id="role" class="form-control">
                <option value="">---Select---</option>
                <option id="role" value="Admin">Admin</option>
                <option id="role" value="User">User</option>
              </select>

              <!-- <input type="password" class="form-control" placeholder="Retype password" name="cpassword"> -->
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
              
            </div>

            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block" id="comment">Register</button>
            </div>
            <!-- /.col -->
        </div>
        </form>


        <a href="login_view" class="text-center">I already have a register</a>
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


  <script>
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $('#comment').click('submit', function(e) {
      e.preventDefault();

      var name = $("#name").val();
      var email = $('#email').val();
      var password = $('#password').val();
      var role = $('#role').val();
      $.ajax({
        type: "POST",
        url: 'register/post',
        data: {
          name: name,
          email: email,
          password: password,
          role: role,

        },
        success: function(data) {
          if ($.isEmptyObject(data.error)) {
            alert(data.success);
            location.reload();
          } else {
            printErrorMsg(data.error);
          }
        },



      });

    });

    function printErrorMsg(msg) {
      $(".print-error-msg").find("input").html('');
      $(".print-error-msg").css('display', 'block');
      $.each(msg, function(key, value) {
        $('print-error-msg').find("input").append('<span>' + value + '</span');
        // $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
        // $(".print-error-msg").find("email").append('<li>'+value.name+'</li>');
      });
    }


    // error: function (xhr) {
    //    $('#validation-errors').html('');
    //    $.each(xhr.responseJSON.errors, function(key,value) {
    //      $('#validation-errors').append('<div class="alert alert-danger">'+value+'</div');
    //  }); 
    // },
  </script>
</body>