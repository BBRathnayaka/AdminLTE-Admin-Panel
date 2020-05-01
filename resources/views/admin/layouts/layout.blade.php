<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield("title")</title>

    {{-- include styles--}}
    @include("admin.layouts.styles")

</head>
<body class="hold-transition sidebar-mini layout-fixed"> 
<div class="wrapper">

  <!-- Navbar -->
    {{-- include header--}}
    @include("admin.layouts.header")
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    {{-- include sidebar--}}
    @include("admin.layouts.left_sidebar")

  <!-- Content Wrapper. Contains page content -->
    {{-- dynamic content--}}
    @section("content")
    @show
  <!-- /.content-wrapper -->
    {{-- include footer--}}
    @include("admin.layouts.footer")

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

{{-- include script--}}
@include("admin.layouts.scripts")
</body>
</html>
