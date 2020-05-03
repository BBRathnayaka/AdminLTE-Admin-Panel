@extends("admin.layouts.layout")

@section("title","Admin Dashboard | BBR")

@section("content")

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4 class="m-0 text-dark">Add Students</h4>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Students</li>
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
                    <form role="form" id="frm-add-student" method=''>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="student_regno">Registration Number</label>
                                <input type="text" class="form-control" id="student_regno" name='student_regno' placeholder="Enter Registration Number">
                            </div>
                            <div class="form-group">
                                <label for="student_name">Student Name</label>
                                <input type="text" class="form-control" id="student_name" name='student_name' placeholder="Enter Student Name">
                            </div>
                            <div class="form-group">
                                <label for="dd_gender">Gender</label>
                                <select class="form-control" id="dd_gender" name='dd_gender'>
                                    <option value='1'>Male</option>
                                    <option value='2'>Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="faculty_age">Age</label>
                                <input type="number" class="form-control" id="faculty_age" name='faculty_age' placeholder="Enter Student Age">
                            </div>
                            <div class="form-group">
                                <label for="student_email">Email</label>
                                <input type="email" class="form-control" id="student_email" name='student_email' placeholder="Enter Student Email">
                            </div>
                            <div class="form-group">
                                <label for="student_roll">Roll Number</label>
                                <input type="number" class="form-control" id="student_roll" name='student_roll' placeholder="Enter Student Phone Number">
                            </div>
                            <div class="form-group">
                                <label for="student_phone">Phone Number</label>
                                <input type="number" max='10' class="form-control" id="student_phone" name='student_phone' placeholder="Enter Student Phone Number">
                            </div>
                            <div class="form-group">
                                <label for="student_address">Address</label>
                                <textarea class="form-control" id="student_address" name='student_address'></textarea>
                            </div>
                            <div class="form-group">
                                <label for="student_photo">Photo</label>
                                <input type="file" class="form-control" id="student_photo" name='student_photo'>
                            </div>
                            <div class="form-group">
                                <label for="student_gurdian">Guardian Name</label>
                                <input type="text" class="form-control" id="student_gurdian" name='student_gurdian' placeholder="Enter Guardian Name">
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