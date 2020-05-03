@extends("admin.layouts.layout")

@section("title","Admin Dashboard | BBR")

@section("content")

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4 class="m-0 text-dark">Add Faculty</h4>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Faculty</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title"></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->



                    <form role="form" id="frm-add-faculty" method=''>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="dd_type">Choose Faculty Type</label>
                                <select class="form-control" id="dd_type" name='dd_type'>
                                    <option value='1'>Engeneering</option>
                                    <option value='2'>Information Technology</option>
                                    <option value='3'>Business Management</option>
                                    <option value='4'>Hospitality Management</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="faculty_name">Name</label>
                                <input type="text" class="form-control" id="faculty_name" name='faculty_name' placeholder="Enter Faculty Name">
                            </div>
                            <div class="form-group">
                                <label for="faculty_email">Email</label>
                                <input type="email" class="form-control" id="faculty_email" name='faculty_email' placeholder="Enter Faculty Email">
                            </div>
                            <div class="form-group">
                                <label for="faculty_designation">Designation</label>
                                <input type="text" class="form-control" id="faculty_designation" name='faculty_designation' placeholder="Enter Faculty Designation">
                            </div>
                            <div class="form-group">
                                <label for="faculty_phone">Phone Number</label>
                                <input type="number" class="form-control" id="faculty_phone" name='faculty_phone' placeholder="Enter Faculty Phone Number">
                            </div>
                            <div class="form-group">
                                <label for="dd_gender">Gender</label>
                                <select class="form-control" id="dd_gender" name='dd_gender'>
                                    <option value='1'>Male</option>
                                    <option value='2'>Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="faculty_photo">Photo</label>
                                <input type="file" class="form-control" id="faculty_photo" name='faculty_photo'>
                            </div>
                            <div class="form-group">
                                <label for="faculty_address">Address</label>
                                <textarea class="form-control" id="faculty_address" name='faculty_address'></textarea>
                            </div>
                            <div class="form-group">
                                <label for="dd_status">Status</label>
                                <select class="form-control" id="dd_status" name='dd_status'>
                                    <option value='1'>Active</option>
                                    <option value='0'>Inactive</option>
                                </select>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">


                <!-- ./col -->
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection