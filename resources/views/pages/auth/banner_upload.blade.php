@extends('pages.layout.home')
@section('')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper ">
    <!-- Content Header (Page header) -->
    <section class="content-header align-items-center">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Project Add</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                        <li class="breadcrumb-item active">Project Add</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form action="banner_upload" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Banner</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <input type="hidden" id="inputName" class="form-control" name="role">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Banner Name</label>
                                <input type="text" id="inputName" class="form-control" name="Banner_name">

                            </div>
                            <!-- <div class="form-group">
                                <label for="inputDescription">Banner Category</label>

                                <input name="Banner_id" id="" type="text" id="inputName" class="form-control"  value=" Homepage Top Banner" disabled>

                            </div> -->

                            <div class="form-group">
                                <label for="inputEstimatedBudget">Banner Image Upload</label>
                                <!-- <input type="file" id="inputEstimatedBudget" class="form-control" name="image"> -->
                                <input type="file" name="image" class="form-control">
                                <!-- <input type="text" id="inputProjectLeader" class="form-control" name="Banner_price"> -->

                            </div>
                            <div class="col-12">
                                <!-- <a href="#" class="btn btn-secondary">Cancel</a> -->
                                <input type="submit" value="Create new Project" class="btn btn-success float-right">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

            </div>

        </form>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection