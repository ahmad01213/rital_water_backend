
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rital Water | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset("plugins/fontawesome-free/css/all.min.css")}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset("https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css")}}">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{asset("plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset("plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset("plugins/jqvmap/jqvmap.min.css")}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("dist/css/adminlte.min.css")}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset("plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset("plugins/daterangepicker/daterangepicker.css")}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset("plugins/summernote/summernote-bs4.css")}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="{{asset('bootstrap4c-custom-switch-master/dist/css/component-custom-switch.css')}}" rel="stylesheet">
    <style>
        select{ width: 400px; text-align-last:center; }
        option{
            width: 400px; ;
        }
        .row1{
    text-align:center;
  margin-top: 40px;
  margin-bottom: 40px;
  margin-left: 40px;               }
        .btn-glyphicon {
            padding:8px;
            background:#ffffff;
            margin-right:4px;
        }
        .icon-btn {
            padding: 1px 15px 3px 2px;
            border-radius:50px;
        }
        .line {
            width:30%;
            float:center;
        }
        input, input[placeholder] {
            text-align: right;
        }

        .center {
            margin: 30px auto;
            width: 50%;
            border: 1px solid green;
            padding: 10px;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper" >
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>

        </ul>

        <!-- Right navbar links -->
        <!--<ul class="navbar-nav ml-auto">-->
            <!-- Messages Dropdown Menu -->
        <!--    <li class="nav-item dropdown">-->
        <!--        <a class="nav-link" data-toggle="dropdown" href="#">-->
        <!--            <i class="far fa-comments"></i>-->
        <!--            <span class="badge badge-danger navbar-badge">3</span>-->
        <!--        </a>-->
        <!--        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">-->
        <!--            <a href="#" class="dropdown-item">-->
                        <!-- Message Start -->
        <!--                <div class="media">-->
        <!--                    <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">-->
        <!--                    <div class="media-body">-->
        <!--                        <h3 class="dropdown-item-title">-->
        <!--                            Brad Diesel-->
        <!--                            <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>-->
        <!--                        </h3>-->
        <!--                        <p class="text-sm">Call me whenever you can...</p>-->
        <!--                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>-->
        <!--                    </div>-->
        <!--                </div>-->
                        <!-- Message End -->
        <!--            </a>-->
        <!--            <div class="dropdown-divider"></div>-->
        <!--            <a href="#" class="dropdown-item">-->
                        <!-- Message Start -->
        <!--                <div class="media">-->
        <!--                    <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">-->
        <!--                    <div class="media-body">-->
        <!--                        <h3 class="dropdown-item-title">-->
        <!--                            John Pierce-->
        <!--                            <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>-->
        <!--                        </h3>-->
        <!--                        <p class="text-sm">I got your message bro</p>-->
        <!--                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>-->
        <!--                    </div>-->
        <!--                </div>-->
                        <!-- Message End -->
        <!--            </a>-->
        <!--            <div class="dropdown-divider"></div>-->
        <!--            <a href="#" class="dropdown-item">-->
                        <!-- Message Start -->
        <!--                <div class="media">-->
        <!--                    <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">-->
        <!--                    <div class="media-body">-->
        <!--                        <h3 class="dropdown-item-title">-->
        <!--                            Nora Silvester-->
        <!--                            <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>-->
        <!--                        </h3>-->
        <!--                        <p class="text-sm">The subject goes here</p>-->
        <!--                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>-->
        <!--                    </div>-->
        <!--                </div>-->
                        <!-- Message End -->
        <!--            </a>-->
        <!--            <div class="dropdown-divider"></div>-->
        <!--            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>-->
        <!--        </div>-->
        <!--    </li>-->
            <!-- Notifications Dropdown Menu -->
        <!--    <li class="nav-item dropdown">-->
        <!--        <a class="nav-link" data-toggle="dropdown" href="#">-->
        <!--            <i class="far fa-bell"></i>-->
        <!--            <span class="badge badge-warning navbar-badge">15</span>-->
        <!--        </a>-->
        <!--        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">-->
        <!--            <span class="dropdown-item dropdown-header">15 Notifications</span>-->
        <!--            <div class="dropdown-divider"></div>-->
        <!--            <a href="#" class="dropdown-item">-->
        <!--                <i class="fas fa-envelope mr-2"></i> 4 new messages-->
        <!--                <span class="float-right text-muted text-sm">3 mins</span>-->
        <!--            </a>-->
        <!--            <div class="dropdown-divider"></div>-->
        <!--            <a href="#" class="dropdown-item">-->
        <!--                <i class="fas fa-users mr-2"></i> 8 friend requests-->
        <!--                <span class="float-right text-muted text-sm">12 hours</span>-->
        <!--            </a>-->
        <!--            <div class="dropdown-divider"></div>-->
        <!--            <a href="#" class="dropdown-item">-->
        <!--                <i class="fas fa-file mr-2"></i> 3 new reports-->
        <!--                <span class="float-right text-muted text-sm">2 days</span>-->
        <!--            </a>-->
        <!--            <div class="dropdown-divider"></div>-->
        <!--            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>-->
        <!--        </div>-->
        <!--    </li>-->
        <!--    <li class="nav-item">-->
        <!--        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">-->
        <!--            <i class="fas fa-th-large"></i>-->
        <!--        </a>-->
        <!--    </li>-->
        <!--</ul>-->
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">مدير الطلبات</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset("dist/img/user2-160x160.jpg" )}}"class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block"></a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{route('main')}}" class="nav-link {{is_active('main')}}">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                الرئيسية
                            </p>
                        </a>
                    <li class="nav-item  ">
                        <a href="{{route('users.index')}}" class="nav-link {{ is_active('users')}}">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                الأعضاء
                            </p>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('products.index')}}" class="nav-link {{ is_active('products')}}">
                            <i class="nav-icon fas fa-code-branch"></i>
                            <p>
                                المنتجات
                            </p>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('offers.index')}}" class="nav-link {{ is_active('offers')}}">
                            <i class="nav-icon fas fa-cubes"></i>
                            <p>
                                العروض
                            </p>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('orders.index')}}" class="nav-link {{ is_active('orders')}}">
                            <i class="nav-icon fas fa-database"></i>
                            <p>
                                الطلبات
                            </p>
                        </a>
                    </li>
                    <!--<li class="nav-item  ">-->
                    <!--    <a href="{{route('favorites.index')}}" class="nav-link {{ is_active('favorites')}}">-->
                    <!--        <i class="nav-icon fas fa-star"></i>-->
                    <!--        <p>-->
                    <!--            المفضلة-->
                    <!--        </p>-->
                    <!--    </a>-->
                    <!--</li>-->
                    <!--<li class="nav-item  ">-->
                    <!--    <a href="{{route('rates.index')}}" class="nav-link {{ is_active('rates')}}">-->
                    <!--        <i class="nav-icon fas fa-star"></i>-->
                    <!--        <p>-->
                    <!--            التقييمات-->
                    <!--        </p>-->
                    <!--    </a>-->
                    <!--</li>-->
                    <!--<li class="nav-item  ">-->
                    <!--    <a href="{{route('messages.index')}}" class="nav-link {{ is_active('messages')}}">-->
                    <!--        <i class="nav-icon fas fa-star"></i>-->
                    <!--        <p>-->
                    <!--            الرسائل-->
                    <!--        </p>-->
                    <!--    </a>-->
                    <!--</li>-->
                       <li class="nav-item  ">
                        <a href="{{route('contacts.index')}}" class="nav-link {{ is_active('contacts')}}">
                            <i class="nav-icon fas fa-comment"></i>
                            <p>
                                الرسائل
                            </p>
                        </a>
                    </li>
                      <li class="nav-item  ">
                        <a href="{{route('notifications.index')}}" class="nav-link {{ is_active('notifications')}}">
                            <i class="nav-icon fas fa-bell"></i>
                            <p>
                                الإشعارات
                            </p>
                        </a>
                    </li>
                   <li class="nav-item  ">
                        <a href="{{route('settings.edite')}}" class="nav-link {{ is_active('settings')}}">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>
                                الإعدادت
                            </p>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('sliders.index')}}" class="nav-link {{ is_active('sliders')}}">
                            <i class="nav-icon fas fa-upload"></i>
                            <p>
                                سليدر التطبيق
                            </p>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('logoutadmin')}}" class="nav-link ">
                            <i class="nav-icon fas fa-window-close"></i>
                            <p>
                                تسجيل الخروج
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <!-- /.content-wrapper -->
    <div class="content-wrapper " style="background-color: #ffffff">
        @yield('content')
    </div>
    <!--<footer class="main-footer">-->
    <!--    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>-->
    <!--    All rights reserved.-->
    <!--    <div class="float-right d-none d-sm-inline-block">-->
    <!--        <b>Version</b> 3.0.4-->
    <!--    </div>-->
    <!--</footer>-->
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="{{asset("plugins/jquery/jquery.min.js")}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset("plugins/jquery-ui/jquery-ui.min.js")}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<!-- ChartJS -->
<script src="{{asset("plugins/chart.js/Chart.min.js")}}"></script>
<!-- Sparkline -->
<script src="{{asset("plugins/sparklines/sparkline.js")}}"></script>
<!-- JQVMap -->
<script src="{{asset("plugins/jqvmap/jquery.vmap.min.js")}}"></script>
<script src="{{asset("plugins/jqvmap/maps/jquery.vmap.usa.js")}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset("plugins/jquery-knob/jquery.knob.min.js")}}"></script>
<!-- daterangepicker -->
<script src="{{asset("plugins/moment/moment.min.js")}}"></script>
<script src="{{asset("plugins/daterangepicker/daterangepicker.js")}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset("plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")}}"></script>
<!-- Summernote -->
<script src="{{asset("plugins/summernote/summernote-bs4.min.js")}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset("plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("dist/js/adminlte.js")}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset("dist/js/pages/dashboard.js")}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset("dist/js/demo.js")}}"></script>
</body>
</html>
