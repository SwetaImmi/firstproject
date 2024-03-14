@extends('pages.layout.home')
@section('')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="container-fluid">
      <div class="row mb-2">

        <div class="col-sm-6">
          <h1>Seller Information</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
            <!-- <li class="breadcrumb-item active">jsGrid</li> -->
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="card">
      <?php if (Auth::check()) {
        if (Auth::user()->role == 'Admin') { // if the current role is Administrator
      ?>
          <div class="card-header">

            <a class="btn btn-info btn-sm" href="{{ url('register_view') }}">
              <i class="fas fa-pencil-alt">
              </i>
              Create New Role
            </a>
            <!-- <h3 class="card-title">jsGrid</h3> -->
          </div>
      <?php  }
      } ?>
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Role</th>
              <th class="text-center">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($user as $users)
            @if($users->mobile == '')
            <tr>
              <td>{{$users->name}}</td>
              <td>{{$users->email}}</td>
              <td>{{$users->role}}</td>

              <td class="project-actions text-center">


                <?php if (Auth::check()) {
                  if (Auth::user()->role == 'Admin') { // if the current role is Administrator
                ?>
                    <a class="btn btn-info btn-sm" href="{{ url('register_Edit_view').'/'. $users->id  }}">
                      <i class="fas fa-pencil-alt">
                      </i>
                      Edit
                    </a>
                    <a onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm" href="{{ url('projects/destroy').'/'. $users->id}}" role="button">
                      <i class="fas fa-trash">
                      </i>
                      Delete
                    </a>
                  <?php
                  } elseif (Auth::user()->role == 'User') { // if the current role is Administrator
                  ?>

                    <a class="btn btn-primary btn-sm" href="{{ url('register_Edit_view').'/'. $users->id  }}">
                      <i class="fas fa-folder">
                      </i>
                      View
                    </a>

                <?php  }
                } ?>



              </td>
            </tr>
@endif
            @endforeach
            <!-- <tr>
              <td>Mary</td>
              <td>Moe</td>
              <td>mary@example.com</td>
            </tr>
            <tr>
              <td>July</td>
              <td>Dooley</td>
              <td>july@example.com</td>
            </tr> -->
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->


@endsection