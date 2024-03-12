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
    <link rel="stylesheet" href="{{ asset('assets/css/pack.css') }}">
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}


    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href=" {{ asset('assets/dashboard/css/sb-admin-2.min.css')}}" rel="stylesheet">
      {{-- <script src="https://cdn.tailwindcss.com"></script> --}}


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion " id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-text mx-3 text-light">Le Digital Master</div>
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

            <!-- Nav Item - Utilities Collapse Menu -->

            <!-- Divider -->
            <hr class="sidebar-divider">

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
                            <!-- Dropdown - Messages -->

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
                                    Setting
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

                            <div class="wrapper mt-4 container">
            @if(session('message'))
                <div class=" container mx-auto alert alert-info">
                    {{ session('message') }}
                </div>
            @endif
            <div class="container-calendar">
                <div id="left">
                    <h1>Prendre un Rendez-vous</h1>
                    <div id="event-section">
                        <form action="{{ route('sendNotificationsAdmin') }}" method="POST">
                            @csrf
                        <h3>Ajouter un rendez-vous</h3>
                        <input type="date" id="eventDate"
                        name="rdv_date">  <br> <label for="">Choisissez une heure :</label>
                        {{-- <input type="text"
                            id="eventTitle"
                            name="rdv_hour"
                            placeholder="Quelle heure choisissez-vous"> --}}
                            <select name="rdv_hour" class="text-center mx-auto">
                                <option value=0> 10 : 00 </option>
                                <option value=1> 15 : 00 </option>
                                <option value=2>18 : 00</option>
                                <option value=3>19 : 00</option>
                                <option value=4>21 : 00</option>
                                <option value=5>21 : 00</option>
                                <option value=6>22 : 00</option>

                            </select> <br>
                        <input type="text"
                            id="eventDescription"
                            name="rdv_description"
                            placeholder="A propos de votre rendez-vous"> <br>
                                <input type="hidden" name="pack" value="pack6">
                        <button type="submit">
                            Envoyer
                        </button>
                        {{-- <div id="reminder-section">
                            <a href="{{ route('client') }}" class="btn btn-secondary m-4" >Dashbord</a>
                        </div> --}}
                    </form>

                        <!-- List to display reminders -->
                        @foreach ( $rdvs as $rdvs)

                        <ul class="container-fluid bg-gray-50 text-light mt-4 rounded" >
                            <li data-event-id="1" class="container bg-secondary rounded-3 p-4   ">

                                <h3 class="text-light fw-bolder fs-4">Voici votre date</h3>
                                <strong class="text-warning fs-5" >{{ $rdvs->rdv_date }}</strong> <br>
                                 <span class="fs-bold fs-5">Votre Heure{ $rdvs->rdv_hour }}</span> <br>
                                <span class="fs-5">{{ $rdvs->rdv_description }}</span> <br>
                                <span class="fs-4"> Vous avez choisit le : {{ $rdvs->pack }}</span> <br>


                                <form action="{{ route('deleteSendNotificationsAdmin', ['id' => $rdvs->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <!-- Votre formulaire -->
                                    {{-- <button class="delete-event" type="submit">Supprimer</button>
                                    <button class="delete-event" type="submit">Discuter sur whatsApp</button> --}}
                                </form>
                                                                <button class="delete-event" id="whatsapp-button" data-toggle="modal" data-target="#whatsappModal">Discuter sur WhatsApp</button>

                        </li>
                    </ul>
                    @endforeach
                    </div>
                </div>
                                <div class="modal fade" id="whatsappModal" tabindex="-1" role="dialog" aria-labelledby="whatsappModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="whatsappModalLabel">Informations de Contact</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="contactForm">
          <div class="form-group">
            <label for="fullname">Nom et Prénom</label>
            <input type="text" class="form-control" id="fullname" placeholder="Nom et Prénom">
          </div>
          <div class="form-group">
            <label for="phone">Numéro de Téléphone</label>
            <input type="tel" class="form-control" id="phone" placeholder="+22990909090">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="button" class="btn btn-primary" id="sendWhatsapp">Envoyer sur WhatsApp</button>
      </div>
    </div>
  </div>
</div>
                <div id="right">
                    <h3 id="monthAndYear"></h3>
                    <div class="button-container-calendar">
                        <button id="previous"
                                onclick="previous()">
                            ‹
                        </button>
                        <button id="next"
                                onclick="next()">
                            ›
                        </button>
                    </div>
                    <table class="table-calendar"
                        id="calendar"
                        data-lang="en">
                        <thead id="thead-month"></thead>
                        <!-- Table body for displaying the calendar -->
                        <tbody id="calendar-body"></tbody>
                    </table>
                    <div class="footer-container-calendar">
                        <label for="month">Aller à: </label>
                        <!-- Dropdowns to select a specific month and year -->
                        <select id="month" onchange="jump()">
                            <option value=0>Jan</option>
                            <option value=1>Feb</option>
                            <option value=2>Mar</option>
                            <option value=3>Avr</option>
                            <option value=4>Mai</option>
                            <option value=5>Juin</option>
                            <option value=6>Jul</option>
                            <option value=7>Ao</option>
                            <option value=8>Sep</option>
                            <option value=9>Oct</option>
                            <option value=10>Nov</option>
                            <option value=11>Dec</option>
                        </select>
                        <!-- Dropdown to select a specific year -->
                        <select id="year" onchange="jump()"></select>
                    </div>
                </div>
            </div>
    </div>

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
            <script src="{{ asset('assets/js/calendarPacK.js') }}"></script>
                     <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha512-5+ZrrJcyx0S/SNb/zqfMGL6eiJz7HHadzTZPz2Nb2uY6U6V6iDw8nIzGxe3z6naJ1sNhP+2zg7JlG7FZ0MS4TA==" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-k2ATUhrFtJ+gx0p7aajr9hAm1bSmkNUqO2+C/AMUfQTtR5LV6tP2stI/Di0DdIq0shWvYci2S8R8n7Cwv49D9w==" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" integrity="sha512-WzLzMSXBU5X+r+n7L7O5xKqQBUbxo9e/g8X4bVJBSEDSiI6f+CcmFqlgN1R7e1ZjfylOtp6f/06DRnlJeZFYrg==" crossorigin="anonymous" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js" integrity="sha512-2yE9FJ9z2FUZw9lIBpiqjtP9w09sWzix4/OpB5UdITCR6a/NdN4HwrKhp+Q8UTVIj39v6wL5GRLx3R6JcT7+bA==" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>

</html>
