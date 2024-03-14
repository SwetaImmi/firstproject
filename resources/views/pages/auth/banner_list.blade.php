@extends('pages.layout.home')
@section('')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <a class="btn btn-info btn-sm" href="banner_upload" class="nav-link">
            <!-- <i class="far fa-circle nav-icon"></i> -->
            <b>Add Banner </b>
          </a>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
            <li class="breadcrumb-item active">Projects</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>


  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Banner List</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
          <thead>
            <tr>
              <th style="width: 1%">
                #
              </th>
              <th style="width: 20%">
                Banner Name
              </th>
              <th style="width: 30%">
                Banner Image
              </th>
              <th>
                User Email
              </th>
              <th style="width: 8%" class="text-right">
                Status
              </th>
              <th class="text-right" style="width: 20% ">
                Actions
              </th>
            </tr>
          </thead>
          <?php if (Auth::check()) {
            if (Auth::user()->role == 'Admin') { // if the current role is Administrator
          ?>
              @foreach($banner as $products)
              <tbody>
                <tr>
                  <td>
                    #
                  </td>
                  <td>
                    {{$products->banner_name}}
                  </td>
                  <td>
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        @if($products->banner_img)
                        <img class="table-avatar" src="{{ asset('uploads1/'.$products->banner_img) }}" style="height: 50px;width:100px;">
                        @else
                        <span>No image found!</span>
                        @endif
                        <!-- <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png"> -->
                      </li>

                    </ul>
                  </td>
                  <td class="project_progress">
                    {{$products->email}}
                    <!-- <p>({{$products->updated_at}})</p> -->
                    <!-- <p>({{$products->updated_at->format('H:ia')}}) In UTC timezone</p> -->
                  </td>
                  <td class="text-right">
                    <input id="checkbox" data-id="{{$products->id}}" class="toggle-class" type="checkbox" {{ $products->status ? 'checked' : '' }}>
                  </td>
                  </td>
                  <td class="project-actions text-right">

                    <a onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm" href="{{ url('banner_delete').'/'. $products->id}}" role="button">
                      <i class="fas fa-trash">
                      </i>
                      Delete
                    </a>
                  </td>
                </tr>

              </tbody>
              @endforeach
          <?php
            }
          }

          ?>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
  $(document).ready(function() {
    $('.toggle-class').click(function() {
      // alert("xxx");

      var status = $(this).prop('checked') == true ? 1 : 0;
      var status_un = $('#checkbox').not(this).prop('checked', false).val();

      // var status = $(this).prop('checked') == false ? 1 : 0;

      var user_id = $(this).data('id');
      alert(status);
      alert(status_un);

      $.ajax({
        type: "GET",
        dataType: "json",
        url: '/changeStatus',
        data: {
          'status_un': status_un,
          'status': status,
          'user_id': user_id,
        },


        success: function(data) {
          console.log(data.success)
          location.reload();
        }
      });

    });
  });

  function toggle(chkBox) {
    alert();
    checkboxes = document.getElementById("checkbox").childNodes;
    var isChecked = chkBox.checked; //this just changed, so it really is whether the box wasn't checked beforehand.
    for (var i = 0; i < checkboxes.length; i++) {
      checkboxes[i].checked = false; //clear all of them
    }
    if (isChecked) {
      chkBox.checked = true; //if the original one wasn't checked, check it
    }
  }
</script>
<!-- 
<script>
    $('.toggle-class').on('change', function() {
        $('.toggle-class').not(this).prop('checked', false);  
    });
  </script> -->

@endsection