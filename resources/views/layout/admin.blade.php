<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- theme meta -->
    <meta name="theme-name" content="focus" />
    <title>Admin : Wakluang</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="{{ asset('assetsadmin/css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsadmin/css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsadmin/css/lib/menubar/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsadmin/css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsadmin/css/lib/sweetalert/sweetalert.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsadmin/css/lib/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsadmin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsadmin/css/lib/data-table/buttons.bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assetsadmin/css/lib/data-table/dataTables.bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assetsadmin/css/lib/data-table/buttons.dataTables.min.css') }}" rel="stylesheet" />



    
</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo"><a href="{{ ('/admin/dashboard') }}">
                            <!-- <img src="images/logo.png" alt="" /> --><span>WakLuang</span></a></div>
                    <li class="label">Main</li>
                    <li><a href="{{ ('/admin/dashboard') }}"><i class="ti-home"></i>Dashboard</a></li>
                    <li><a href="{{('/admin/produk/index') }}"><i class="ti-shopping-cart"></i> Produk</a></li>
                    <li><a href="{{('/admin/logout') }}"><i class="ti-power-off"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->

    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <span class="user-avatar">Admin
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('contents')

    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2023 © Admin Board. - <a href="#">wakluang.com</a></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    @yield('asset')

</body>

</html>
