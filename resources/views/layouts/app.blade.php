<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <script src="{{ asset('public/vendor/jquery/jquery.min.js') }} "></script>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link href="{{ asset('public/vendor/fontawesome-free/css/all.min.css') }} " rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('public/css/sb-admin-2.min.css') }} " rel="stylesheet">
    <link href="{{ asset('public/css/bootstrap.min.css') }} " rel="stylesheet">
    <link href="{{ asset('public/icons/bootstrap-icons.css') }} " rel="stylesheet">
    <link href="{{ asset('public/jquery/jquery-ui.css') }} " rel="stylesheet">
    <link href="{{ asset('public/jquery/jquery-ui.theme.min.css') }} " rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/vendor/datatables/dataTables.bootstrap4.min.css') }}">

        @livewireStyles

        <!-- Scripts -->
<style type="text/css">
    .error{
        color: white;
        margin-top: 2em;
        background-color: red;
        font-size: 14px;
    }
</style>
    </head>

    <body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->

                <!-- End of Topbar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: brown">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon img-fluid">
                </div>
                <div class="sidebar-brand-text mx-3"><h4 class="sidebar-brand-text mx-3" style="display: inline-block;font-weight: 500;margin: 0 !important;">CIRO</h4></div>
            </a>


            <!-- Divider -->
            <hr class="sidebar-divider my-0">


            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Evento Riesgo Operativo</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('evento.index') }}">Listado</a>
                        <a class="collapse-item" href="{{ route('evento.create') }}">Registro</a>
                    </div>
                </div>
            </li>
            @if(auth()->user()->hasRoles(['admin','super']))
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo2"
                    aria-expanded="true" aria-controls="collapseTwo2">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Cuentas Contables</span>
                </a>
                <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('cuenta-contable.index') }}">Listado</a>
                        <a class="collapse-item" href="{{ route('cuenta-contable.create') }}">Registro</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo3"
                    aria-expanded="true" aria-controls="collapseTwo3">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Tipo Evento</span>
                </a>
                <div id="collapseTwo3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('tipo-evento.index') }}">Listado</a>
                        <a class="collapse-item" href="{{ route('tipo-evento.create') }}">Registro</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo4"
                    aria-expanded="true" aria-controls="collapseTwo4">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>PAF</span>
                </a>
                <div id="collapseTwo4" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('paf.index') }}">Listado</a>
                        <a class="collapse-item" href="{{ route('paf.create') }}">Registro</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo5"
                    aria-expanded="true" aria-controls="collapseTwo5">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Canales</span>
                </a>
                <div id="collapseTwo5" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('canales.index') }}">Listado</a>
                        <a class="collapse-item" href="{{ route('canales.create') }}">Registro</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo6"
                    aria-expanded="true" aria-controls="collapseTwo6">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Proceso</span>
                </a>
                <div id="collapseTwo6" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('procesos.index') }}">Listado</a>
                        <a class="collapse-item" href="{{ route('procesos.create') }}">Registro</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo7"
                    aria-expanded="true" aria-controls="collapseTwo7">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Operación</span>
                </a>
                <div id="collapseTwo7" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('operacion.index') }}">Listado</a>
                        <a class="collapse-item" href="{{ route('operacion.create') }}">Registro</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo8"
                    aria-expanded="true" aria-controls="collapseTwo8">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Lugar</span>
                </a>
                <div id="collapseTwo8" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('lugar.index') }}">Listado</a>
                        <a class="collapse-item" href="{{ route('lugar.create') }}">Registro</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo9"
                    aria-expanded="true" aria-controls="collapseTwo9">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Líneas de Negocio</span>
                </a>
                <div id="collapseTwo9" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('linea-de-negocio.index') }}">Listado</a>
                        <a class="collapse-item" href="{{ route('linea-de-negocio.create') }}">Registro</a>
                    </div>
                </div>
            </li>
            @endif



            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
          <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>





                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">

                                        {{ Auth::user()->name }}

                                </span>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('public/img/undraw_profile.svg') }} ">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">

                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>


                    </ul>

                </nav>
                <main class="py-4">
                    @yield('content')
                </main>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Seguro que desea salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Salir') }}</a></li>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->

    <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/vendor/bootstrap/js/bootstrap.bundle.min.js') }} "></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('public/vendor/jquery-easing/jquery.easing.min.js') }} "></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('public/js/sb-admin-2.min.js') }} "></script>

    <!-- Page level plugins -->
    <script src="{{ asset('public/vendor/chart.js/Chart.min.js') }} "></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('public/js/demo/chart-area-demo.js') }} "></script>
    <script src="{{ asset('public/js/demo/chart-pie-demo.js') }} "></script>
    <script src="{{ asset('public/jquery/jquery-ui.min.js') }} "></script>

     <script src="{{ asset('public/vendor/datatables/jquery.dataTables.min.js') }} "></script>
    <script src="{{ asset('public/vendor/datatables/dataTables.bootstrap4.min.js') }} "></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('public/js/demo/datatables-demo.js') }} "></script>

@stack('modals')

        @livewireScripts
</body>

</html>

