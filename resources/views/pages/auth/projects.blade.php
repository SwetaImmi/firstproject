@extends('pages.layout.home')
@section('')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <a class="btn btn-info btn-sm" href="projects-add" class="nav-link">
            <!-- <i class="far fa-circle nav-icon"></i> -->
            <b>Add Products </b>
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
        <h3 class="card-title">Products</h3>

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
      <div id="data-wrapper">
        <table class="table table-striped projects text-justify">
          <thead>
            <tr>
              <th  >
                #
              </th>
              <th >
                Product Name
              </th>
              <th >
                Product Image
              </th>
              <th >
                Product Price
              </th>
             
              <th >
                Actions
              </th>
            </tr>
          </thead>
        
                @include('data')
              
        </table>
        </div>
        <div class="text-center">
          <button class="btn btn-success load-more-data"><i class="fa fa-refresh"></i> Load More Data...</button>
        </div>

        <!-- Data Loader -->
        <div class="auto-load text-center" style="display: none;">
          <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="60" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
            <path fill="#000" d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
              <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s" from="0 50 50" to="360 50 50" repeatCount="indefinite" />
            </path>
          </svg>
        </div>
      </div>
      
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  var ENDPOINT = "{{ route('posts.index') }}";
  var page = 1;

  $(".load-more-data").click(function() {
    page++;
    infinteLoadMore(page);
  });

  /*------------------------------------------
  --------------------------------------------
  call infinteLoadMore()
  --------------------------------------------
  --------------------------------------------*/
  function infinteLoadMore(page) {
    $.ajax({
        url: ENDPOINT + "?page=" + page,
        datatype: "html",
        type: "get",
        beforeSend: function() {
          $('.auto-load').show();
        }
      })
      
      .done(function(response) {
        if (response.html == '') {
          alert(response.html);
          $('.auto-load').html("We don't have more data to display :(");
          
          return;
        }
        $('.auto-load').hide();
        $("#data-wrapper").append(response.html);

      })
      .fail(function(jqXHR, ajaxOptions, thrownError) {
        console.log('Server error occured');
      });
  }
</script>
@endsection