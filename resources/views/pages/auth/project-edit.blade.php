@extends('pages.layout.home')
@section('')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Project Edit</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
            <li class="breadcrumb-item active">Project Edit</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <form action="{{ url('product_update').'/'. $product->id }}" method="post" enctype="multipart/form-data">
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
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Product Name</label>
                <input type="text" id="inputName" class="form-control" name="product_name" value="{{$product->product_name}}">
              </div>
              <div class="form-group">
                <label for="inputDescription">Product Description</label>
                <textarea id="inputDescription" class="form-control" rows="4" name="product_description" value="{{$product->product_description}}">{{$product->product_description}}</textarea>
              </div>
              <div class="form-group">
                <label for="inputStatus">Product Categories</label>
                <select id="inputStatus" class="form-control custom-select" name="product_catogery" value="{{$product->product_catogery}}">
                  <option selected disabled value="{{$product->product_catogery}}">{{$product->product_catogery}}</option>
                  <!-- <option value="1" >Juice</option>
                  <option value="2" >Cookie</option>
                  <option value="3" >Chocolate</option>
                  <option value="4">Cake</option> -->
                </select>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Product Quantity</label>
                <input type="text" id="inputClientCompany" class="form-control" name="product_quantity" value="{{$product->product_quantity}}">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Product Price</label>
                <input type="text" id="inputProjectLeader" class="form-control" name="product_price" value="{{$product->product_price/$product->product_quantity}}">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Product Image</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse" name="product_image" value="{{$product->product_name}}">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputEstimatedBudget">Product Image Upload</label>
                @if($product->product_image)
                <img  class="form-control" src="{{ asset('uploads/'.$product->product_image) }}" style="height: 150px;width:200px;" name="image" type="file">
                <input type="file" name="image" multiple>
                @else
                <span>No image found!</span>
                <input type="file" name="image" multiple>
                @endif
                <!-- <input type="file" id="inputEstimatedBudget" class="form-control" name="image"> -->
                <!-- <input type="file" name="image" class="form-control"> -->
              </div>
              <!-- <div class="form-group">
                <label for="inputSpentBudget">Total amount spent</label>
                <input type="number" id="inputSpentBudget" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputEstimatedDuration">Estimated project duration</label>
                <input type="number" id="inputEstimatedDuration" class="form-control">
              </div> -->
            </div>
            <!-- /.card-body -->
          </div>
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Files</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <table class="table">
                <thead>
                  <tr>
                    <th>File Name</th>
                    <th>File Size</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <td>Functional-requirements.docx</td>
                    <td>49.8005 kb</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  <tr>
                    <td>UAT.pdf</td>
                    <td>28.4883 kb</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  <tr>
                    <td>Email-from-flatbal.mln</td>
                    <td>57.9003 kb</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  <tr>
                    <td>Logo.png</td>
                    <td>50.5190 kb</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  <tr>
                    <td>Contract-10_12_2014.docx</td>
                    <td>44.9715 kb</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>

      </div>
      <div class="row">
        <div class="col-12">
          <!-- <a href="#" class="btn btn-secondary">Cancel</a> -->
          <input type="submit" value="Update Product" class="btn btn-success float-right">
        </div>
      </div>
    </form>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection