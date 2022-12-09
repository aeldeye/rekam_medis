<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Aplikasi Rekam Medis</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('adm_temp/plugins/images/favicon.png') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('adm_temp/css/style.min.css') }}" rel="stylesheet">
    {{-- Select2 CSS --}}
    <link href="{{ asset('adm_temp/dist/css/select2.min.css') }}" rel="stylesheet" />
    {{-- Datatables CSS --}}
    <link href="{{ asset('adm_temp/datatables/datatables.css') }}" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    @if (auth()->user()->level == '1')
                        <a class="navbar-brand" href="{{ url('/admin/dashboard') }}">
                    @endif
                    @if (auth()->user()->level == '2')
                        <a class="navbar-brand" href="{{ url('/user/dashboard') }}">
                    @endif
                    <!-- Logo icon -->
                    <b class="logo-icon">
                        <!-- Dark Logo icon -->
                        <img src="{{ asset('adm_temp/plugins/images/logo-icon.png') }}" alt="homepage" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class="logo-text">
                        <!-- dark Logo text -->
                        <img src="{{ asset('adm_temp/plugins/images/logo-text.png') }}" alt="homepage" />
                    </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="dropdown">
                            <a class="profile-pic btn dropdown-toggle" href="#" role="button"
                                id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                @if (auth()->user()->level == '1')
                                    <img src="{{ asset('adm_temp/plugins/images/users/d2.jpg') }}" alt="user-img"
                                        width="36" class="img-circle">
                                @endif
                                @if (auth()->user()->level == '2')
                                    <img src="{{ asset('adm_temp/plugins/images/users/d3.jpg') }}" width="36"
                                        class="img-circle" alt="Avatar">
                                @endif
                                <span>{{ auth()->user()->name }}</span> <i
                                    class="icon-submenu lnr lnr-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/logout" class="dropdown-item"><i class="fas fa-sign-out-alt"> Logout</i></a>
                                </li>
                            </ul>
                            </a>
                            {{-- <a class="profile-pic" href="#">
                                <img src="{{ asset('adm_temp/plugins/images/users/varun.jpg') }}" alt="user-img"
                                    width="36" class="img-circle"><span
                                    class="text-white font-medium">Steave</span></a> --}}
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        </>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        @if (auth()->user()->level == '1')
                            <li class="sidebar-item pt-2">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="{{ url('admin/dashboard') }}" aria-expanded="false">
                                    <i class="fas fa-home" aria-hidden="true"></i>
                                    <span class="hide-menu">Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-item pt-2">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="{{ url('admin/dokter/index') }}" aria-expanded="false">
                                    <i class="fas fa-user-md" aria-hidden="true"></i>
                                    <span class="hide-menu">Data Dokter</span>
                                </a>
                            </li>
                            <li class="sidebar-item pt-2">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="{{ url('admin/perawat/index') }}" aria-expanded="false">
                                    <i class="fa fa-stethoscope" aria-hidden="true"></i>
                                    <span class="hide-menu">Data Perawat</span>
                                </a>
                            </li>
                            <li class="sidebar-item pt-2">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="{{ url('admin/pasien/index') }}" aria-expanded="false">
                                    <i class="fas fa-procedures" aria-hidden="true"></i>
                                    <span class="hide-menu">Data Pasien</span>
                                </a>
                            </li>
                            <li class="sidebar-item pt-2">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="{{ url('admin/poliklinik/index') }}" aria-expanded="false">
                                    <i class="fas fa-hospital" aria-hidden="true"></i>
                                    <span class="hide-menu">Data Poliklinik</span>
                                </a>
                            </li>
                            <li class="sidebar-item pt-2">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="{{ url('admin/obat/index') }}" aria-expanded="false">
                                    <i class="fas fa-capsules" aria-hidden="true"></i>
                                    <span class="hide-menu">Data Obat</span>
                                </a>
                            </li>
                            <li class="sidebar-item pt-2">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="{{ url('admin/rekammedis/index') }}" aria-expanded="false">
                                    <i class="fas fa-notes-medical" aria-hidden="true"></i>
                                    <span class="hide-menu">Rekam Medis</span>
                                </a>
                            </li>
                            <li class="sidebar-item pt-2">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="{{ url('admin/laporan/index') }}" aria-expanded="false">
                                    <i class="fas fa-file-medical" aria-hidden="true"></i>
                                    <span class="hide-menu">Laporan</span>
                                </a>
                            </li>
                        @endif
                        @if (auth()->user()->level == '2')
                            <li class="sidebar-item pt-2">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="{{ url('user/dashboard') }}" aria-expanded="false">
                                    <i class="fas fa-home" aria-hidden="true"></i>
                                    <span class="hide-menu">Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-item pt-2">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="{{ url('user/rekammedis/index') }}" aria-expanded="false">
                                    <i class="fas fa-notes-medical" aria-hidden="true"></i>
                                    <span class="hide-menu">Rekam Medis</span>
                                </a>
                            </li>
                            <li class="sidebar-item pt-2">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="{{ url('user/laporan/index') }}" aria-expanded="false">
                                    <i class="fas fa-file-medical" aria-hidden="true"></i>
                                    <span class="hide-menu">Laporan</span>
                                </a>
                            </li>
                        @endif

                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper" style="min-height: 250px;">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div>
                @if (session()->has('pesan'))
                    <div class="alert alert-success" id="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                        {{ session()->get('pesan') }}
                    </div>
                @endif
            </div>
            @yield('content')
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> 2021 © Ample Admin brought to you by <a
                    href="https://www.wrappixel.com/">wrappixel.com</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('adm_temp/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('adm_temp/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('adm_temp/js/app-style-switcher.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('adm_temp/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('adm_temp/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('adm_temp/js/custom.js') }}"></script>
    {{-- Datatables JavaScript --}}
    <script src="{{ asset('adm_temp/datatables/datatables.js') }}"></script>
    {{-- <script src="{{ asset('adm_temp/datatables/jQuery-3.6.0/jquery-3.6.0.js') }}"></script> --}}
    @stack('scripts2')
    {{-- Select2 JavaScript --}}
    <script src="{{ asset('adm_temp/dist/js/select2.min.js') }}"></script>
    @stack('scripts')

    <script type="text/javascript">
        $("document").ready(function() {
            setTimeout(function() {
                $("div.alert").remove();
            }, 3000);
        });
    </script>
</body>

</html>
