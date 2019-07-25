<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | @yield('title')</title>

   @include('admin_layout.__layout.css')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 @include('admin_layout.__layout.header')

  <!-- Left side column. contains the logo and sidebar -->
 
@include('admin_layout.__layout.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      
      @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('admin_layout.__layout.footer')

  @include('admin_layout.__layout.stettings')
  <div class="control-sidebar-bg"></div>
</div>

@include('admin_layout.__layout.js')
@yield('js')
</body>
</html>
