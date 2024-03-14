@extends('pages.layout.home')
@section('')



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper ">
    <!-- Content Header (Page header) -->
    <section class="content-header align-items-center">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <!-- <h1>Project Add</h1> -->
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                        <li class="breadcrumb-item active">Enquiry</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form action="enquiry_post" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row" style="margin-left: 200px;">
                <div class="col-md-8" style="margin-top: -20px;
">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Enquiry page</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <input type="hidden" id="inputName" class="form-control" name="role">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName"> Name</label>
                                <input type="text" id="name" class="form-control" name="name">

                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Email</label>

                                <input name="email" id="email" type="text" id="inputName" class="form-control">

                            </div>

                            <div class="form-group">
                                <label for="inputEstimatedBudget">message</label>
                                <textarea name="message" id="message" class="form-control" cols="30" rows="10"></textarea>
                                <!-- <input type="file" name="image" class="form-control"> -->

                            </div>
                            <div class="col-12">
                                <!-- <a href="#" class="btn btn-secondary">Cancel</a> -->
                                <input type="submit" value="Submit Your Query" class="btn btn-success float-right">
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