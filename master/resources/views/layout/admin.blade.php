<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome -->
<link rel="stylesheet" href="/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet" href="/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="/css/icheck-bootstrap.min.css">
<!-- JQVMap -->
<link rel="stylesheet" href="/css/jqvmap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="/css/adminlte.min.css">
<link rel="stylesheet" href="/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="/css/responsive.bootstrap4.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="/css/daterangepicker.css">
<!-- summernote -->
<link rel="stylesheet" href="/css/summernote-bs4.css">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<!-- EXTERNAL CSS -->
<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="/css/hover-min.css">
<script src="https://kit.fontawesome.com/f45723ccd1.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

<title>@yield('title')</title>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    </ul>
    <ul>
        <li>
            @include('layout.partials._alert')
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
    <img src="/scss/assets/img/logo-fbb.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
        style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="/scss/assets/img/dummy-profile.jpg" width="160px" height="160px" class="img-circle elevation-2"
            alt="User Image">
        </div>
        <div class="info">
        <a href="#" class="d-block">User Name</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
                <span class="badge badge-info right">1</span>
            </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Order Penjualan</p>
                </a>
            </li>

            </ul>
        </li>

        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
                Invetory
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
            </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>All Product</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="category.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Category</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="diskon.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Diskon</p>
                </a>
            </li>

            </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-shopping-cart"></i>
            <span class="badge badge-info right">1</span>
            <p>
                Orders
                <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="data-order.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Order</p>
                </a>
            </li>
            </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-rss-square"></i>
            <span class="badge badge-info right">3</span>
            <p>
                Promotion
                <i class="fas fa-angle-left right"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="banner.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Banner</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="content-promotion.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Content Promotion</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="media-patner.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Media Patner</p>
                </a>
            </li>

            </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <span class="badge badge-info right">1</span>
            <p>
                Account
                <i class="fas fa-angle-left right"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="settings.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Settings</p>
                </a>
            </li>

            </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
                Logout
            </p>
            </a>
        </li>

        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

    @yield('content')

    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2020 <a href="http://adminlte.io">AdminLTE.io edited on OneCode.id</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.4
        </div>
    </footer>

    <!-- Control Sidebar -->
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="/js/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="/js/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="/js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="/js/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="/js/jquery.vmap.min.js"></script>
    <script src="/js/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="/js/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="/js/moment.min.js"></script>
    <script src="/js/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="/js/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="/js/dashboard.js"></script>
    <script src="/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/js/demo.js"></script>
    <script src="/js/jquery.dataTables.min.js"></script>
    <script src="/js/dataTables.bootstrap4.min.js"></script>
    <script src="/js/dataTables.responsive.min.js"></script>
    <script src="/js/responsive.bootstrap4.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script> 

    <script>
    $(function () {
        $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
        });
        $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        });
    });
    </script>
    </body>

    </html>