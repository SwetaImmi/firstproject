@extends('pages.layout.home')
@section('')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Project Add</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
            <li class="breadcrumb-item active">Product Add</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>


  <!-- Main content -->
  <section class="content">
  <div class="alert" id="message" style="display: none"></div>
  <!-- <div class="alert" id="messages" style="display: none"></div> -->

    <form method="post" id="upload_form" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Product</h3>


              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- alert -->

            <div class="alert  print-error-msg " style="display:none " role="alert">
              <span style="color: red;">
                <strong>Error!</strong> Please Fill all feild with the valid information...
              </span>
            </div>
            <!-- alert -->
            <input type="hidden" id="inputName" class="form-control" name="role">
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Product Name <strong style="color: red;">*</strong></label>
                <input type="text" class="form-control" name="product_name" id="name">
              </div>
              <div class="form-group">
                <label for="inputDescription">Product Description</label><strong style="color: red;">*</strong>
                <textarea class="form-control" rows="4" name="product_description" id="description"></textarea>
              </div>
              <div class="form-group">
                <label for="inputStatus">Product Categories</label><strong style="color: red;">*</strong>
                <select id="category" class="form-control custom-select" name="product_catogery">
                  <option selected disabled>---Select one---</option>
                  <option value="1">Donut</option>
                  <option value="2">Cookie</option>
                  <option value="3">Chocolate</option>
                  <option value="4">Cake</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Product Quantity</label><strong style="color: red;">*</strong>
                <input type="number" id="quantity" class="form-control" name="product_quantity">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader"> Per Product Price</label><strong style="color: red;">*</strong>
                <input type="text" id="price" class="form-control" name="product_price">
              </div>

              <div class="form-group">
                <label for="inputEstimatedBudget">Product Image Upload</label>
                <!-- <input type="file" id="inputEstimatedBudget" class="form-control" name="image"> -->
                <input type="file" id="image" name="image" class="form-control">
                
              </div>
              <div class="row">
                <div class="col-12">
                  <!-- <a href="#" class="btn btn-secondary">Cancel</a> -->
                  <input id="submit" type="submit" value="Create new Project" class="btn btn-success float-right">
                </div>
              </div>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card-body">
            <div class="form-group">

            </div>

          </div>
          <!-- /.card-body -->
          <!-- /.card -->
        </div>

    </form>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection