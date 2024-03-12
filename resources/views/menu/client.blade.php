<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administration LedigitalMaster</title>

    <!-- Custom fonts for this template-->
    <link href=" {{ asset('assets/dashboard/vendor/fontawesome-free/css/all.min.css')}} " rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href=" {{ asset('assets/dashboard/css/sb-admin-2.min.css')}}" rel="stylesheet">
      <script src="https://cdn.tailwindcss.com"></script>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion " id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-text mx-3 text-warning">Le Digital Master</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span class="text-light">Administration</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span class="text-light fas">Section Client</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Clients</h6>
                        <a class="collapse-item" href="{{ route('addPack') }}">Ajouter un Pack</a>
                        <a class="collapse-item" href="{{ route('sendNotifsClients') }}">Envoyer une notification</a>
                        <a class="collapse-item" href="{{ route('seeNotifsClients') }}">Voir les notifications</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Notifications</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
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

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">

                            <!-- Dropdown - Alerts -->

                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">

                            <!-- Dropdown - Messages -->

                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if(Auth::check())
                                    <p class="mr-2 d-none d-lg-inline text-gray-600 small"> {{ Auth::user()->name }}</p>
                                @else
                                    <p class="mr-2 d-none d-lg-inline text-gray-600 small">Veuillez vous connecter.</p>
                                @endif
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-diviser"></div>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="dropdown-item" href="{{ route('logout') }}" type="submit">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Client</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                    <section class="container mx-auto px-8 py-8 lg:py-40">
                        <h2 class="block antialiased tracking-normal font-sans text-4xl font-semibold leading-[1.3] text-blue-gray-900 !text-3xl !leading-snug lg:!text-4xl">Bienvenue sur Le Digital Master !</h2>
                        <p class="block antialiased font-sans text-xl font-normal leading-relaxed text-inherit mt-2 w-full font-normal !text-gray-500 lg:w-5/12">Bienvenue sur votre tableau de bord personnalisé ! Chez Le Digital Master, nous sommes ravis de vous accueillir dans notre communauté. Vous êtes maintenant prêt à explorer toutes les fonctionnalités et services que nous offrons pour vous aider à créer et à gérer vos sites web de manière efficace.</p>
                        <span target="_blank">Découvrez, <b>ce que vous pouvez faire</b></span>.
                        <div class="mt-10 grid grid-cols-1 gap-10 lg:grid-cols-3">

                        <div class="relative flex flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 shadow-md relative grid min-h-[30rem] items-end overflow-hidden rounded-xl"><img src="{{ asset('assets/images/picture11.jpg') }}" alt="bg" class="absolute inset-0 h-full w-full object-cover object-center" />
                            <div class="absolute inset-0 bg-black/70"></div>
                            <div class="p-6 relative flex flex-col justify-end">
                            <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-white">Pack 1</h4>
                            <p class="block antialiased font-sans text-base font-light leading-relaxed text-white my-2 font-normal">
                                Un page d'acceuil + <br>
                                1 à 4 pages catégories
                            </p>
                            <a href="{{ route('pack1') }}" class="bg-primary py-2 my-3 px-4 rounded-md transition-colors duration-300">
                                <p class="text-white text-center">Prendre le pack</p>
                            </a>
                            </div>
                        </div>
                        <div class="relative flex flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 shadow-md relative grid min-h-[30rem] items-end overflow-hidden rounded-xl"><img src="{{ asset('assets/images/picture13.jpg') }}" alt="bg" class="absolute inset-0 h-full w-full object-cover object-center" />
                            <div class="absolute inset-0 bg-black/70"></div>
                            <div class="p-6 relative flex flex-col justify-end">
                            <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-white">Pack 2</h4>
                            <p class="block antialiased font-sans text-base font-light leading-relaxed text-white my-2 font-normal">
                                Une page d'acceuil + <br>
                                1 à 4 pages catégories +<br>
                                Page complément + <br>
                                Une barre de recherche <br>
                            </p>
                            <a href="{{ route('pack2') }}" class="bg-primary py-2 my-3 px-4 rounded-md transition-colors duration-300">
                                <p class="text-white text-center">Prendre le pack</p>
                            </a>
                            </div>
                        </div>
                        <div class="relative flex flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 shadow-md relative grid min-h-[30rem] items-end overflow-hidden rounded-xl"><img src="{{ asset('assets/images/picture14.jpg') }}" alt="bg" class="absolute inset-0 h-full w-full object-cover object-center" />
                            <div class="absolute inset-0 bg-black/70"></div>
                            <div class="p-6 relative flex flex-col justify-end">
                            <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-white">Pack 3</h4>
                            <p class="block antialiased font-sans text-base font-light leading-relaxed text-white my-2 font-normal">
                                Une page d'acceuil + <br>
                                4 à 6 pages catégories + <br>
                                Page complément  + <br>
                                Une barre de recherche  <br>
                            </p>
                            <a href="{{ route('pack3') }}" class="bg-primary py-2 my-3 px-4 rounded-md transition-colors duration-300">
                                <p class="text-white text-center">Prendre le pack</p>
                            </a>
                            </div>
                        </div>
                        <div class="relative flex flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 shadow-md relative grid min-h-[30rem] items-end overflow-hidden rounded-xl"><img src="{{ asset('assets/images/picture15.jpg') }}" alt="bg" class="absolute inset-0 h-full w-full object-cover object-center" />
                            <div class="absolute inset-0 bg-black/70"></div>
                            <div class="p-6 relative flex flex-col justify-end">
                            <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-white">Pack 4</h4>
                            <p class="block antialiased font-sans text-base font-light leading-relaxed text-white my-2 font-normal">
                                Pack 3 + <br>
                                Option de commande  <br>
                            </p>
                            <a href="{{ route('pack4') }}" class="bg-primary py-2 my-3 px-4 rounded-md transition-colors duration-300">
                                <p class="text-white text-center">Prendre le pack</p>
                            </a>
                            </div>
                        </div>
                        <div class="relative flex flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 shadow-md relative grid min-h-[30rem] items-end overflow-hidden rounded-xl"><img src="{{ asset('assets/images/picture16.jpg') }}" alt="bg" class="absolute inset-0 h-full w-full object-cover object-center" />
                            <div class="absolute inset-0 bg-black/70"></div>
                            <div class="p-6 relative flex flex-col justify-end">
                            <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-white">Pack 5</h4>
                            <p class="block antialiased font-sans text-base font-light leading-relaxed text-white my-2 font-normal">
                                Page d'acceuil <br>
                                Barre de recherche + <br>
                                6 à 10 pages catégories + <br>
                                Option de commande
                            </p>
                            <a href="{{ route('pack5') }}" class="bg-primary py-2 my-3 px-4 rounded-md transition-colors duration-300">
                                <p class="text-white text-center">New Project</p>
                            </a>
                            </div>
                        </div>
                        <div class="relative flex flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 shadow-md relative grid min-h-[30rem] items-end overflow-hidden rounded-xl"><img src="{{ asset('assets/images/picture10.jpg') }}" alt="bg" class="absolute inset-0 h-full w-full object-cover object-center" />
                            <div class="absolute inset-0 bg-black/70"></div>
                            <div class="p-6 relative flex flex-col justify-end">
                            <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-white">Pack 5</h4>
                            <p class="block antialiased font-sans text-base font-light leading-relaxed text-white my-2 font-normal">
                                Site E-commerce + <br>
                                Option de commande + <br>
                                Option de payement <br>
                            </p>
                            <a href="{{ route('pack6') }}" class="bg-primary py-2 my-3 px-4 rounded-md transition-colors duration-300">
                                <p class="text-white text-center">New Project</p>
                            </a>
                            </div>
                        </div>
                        </div>
                    </section>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
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
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src=" {{ asset('assets/dashboard/vendor/jquery/jquery.min.js')}}"></script>
    <script src=" {{ asset('assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/dashboard/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src=" {{ asset('assets/dashboard/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('assets/dashboard/vendor/chart.js/Chart.min.js')}} "></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/dashboard/js/demo/chart-area-demo.js')}} "></script>
    <script src=" {{ asset('assets/dashboard/js/demo/chart-pie-demo.js')}}"></script>

</body>

</html>
