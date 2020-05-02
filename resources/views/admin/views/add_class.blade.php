@extends("admin.layouts.layout")

@section("title","Admin Dashboard | BBR")

@section("content")
 
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0 text-dark">Add Class</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Class</li>
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
              <form role="form" id="frm-add-section" method=''>
                <div class="card-body">
                  <div class="form-group">
                    <label for="class_name">Class Name</label>
                    <input type="text" class="form-control" id="class_name" name='class_name' placeholder="Enter Class Name">
                  </div>

                  <div class="form-group">
                    <label for="dd_section">Choose Class Section</label>
                    <select class="form-control" id="dd_section" name='dd_section'>
                        <option value='1'>A</option>
                        <option value='2'>B</option>
                        <option value='3'>C</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="seats_available">Seats Available</label>
                    <input type="number" min='1' class="form-control" id="seats_available" name='seats_available' placeholder="Enter Seats">
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