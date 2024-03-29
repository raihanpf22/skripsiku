<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="../sb-admin2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../sb-admin2/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../sb-admin2/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    
                </div>
               
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data Preparation
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Preprocessing Ketam</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Tahap Preprocessing:</h6>
                        <a class="collapse-item" href="{{ route('dataclean_ketam') }}">Data Cleaning</a>
                        <a class="collapse-item" href="{{ route('casefolding_ketam') }}">Casefolding</a>
                        <a class="collapse-item" href="{{ route('tokenizing_ketam') }}">Tokenizing</a>
                        <a class="collapse-item" href="{{ route('filtering_ketam') }}">Filtering</a>
                        <a class="collapse-item" href="{{ route('normalize_ketam') }}">Normalization</a>
                        <a class="collapse-item" href="{{ route('stemming_ketam') }}">Stemming</a>

                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Preprocessing Getas</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Tahap Preprocessing:</h6>
                        <a class="collapse-item" href="{{ route('dataclean_getas') }}">Data Cleaning</a>
                        <a class="collapse-item" href="{{ route('casefolding_getas') }}">Casefolding</a>
                        <a class="collapse-item" href="{{ route('tokenizing_getas') }}">Tokenizing</a>
                        <a class="collapse-item" href="{{ route('filtering_getas') }}">Filtering</a>
                        <a class="collapse-item" href="{{ route('normalize_getas') }}">Normalization</a>
                        <a class="collapse-item" href="{{ route('stemming_getas') }}">Stemming</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Preprocessing Kricu</span>
                </a>
                <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Tahap Preprocessing:</h6>
                        <a class="collapse-item" href="{{ route('dataclean_kricu') }}">Data Cleaning</a>
                        <a class="collapse-item" href="{{ route('casefolding_kricu') }}">Casefolding</a>
                        <a class="collapse-item" href="{{ route('tokenizing_kricu') }}">Tokenizing</a>
                        <a class="collapse-item" href="{{ route('filtering_kricu') }}">Filtering</a>
                        <a class="collapse-item" href="{{ route('normalize_kricu') }}">Normalization</a>
                        <a class="collapse-item" href="{{ route('stemming_kricu') }}">Stemming</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Preprocessing Otak-otak</span>
                </a>
                <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Tahap Preprocessing:</h6>
                        <a class="collapse-item" href="{{ route('dataclean_otak2') }}">Data Cleaning</a>
                        <a class="collapse-item" href="{{ route('casefolding_otak2') }}">Casefolding</a>
                        <a class="collapse-item" href="{{ route('tokenizing_otak2') }}">Tokenizing</a>
                        <a class="collapse-item" href="{{ route('filtering_otak2') }}">Filtering</a>
                        <a class="collapse-item" href="{{ route('normalize_otak2') }}">Normalization</a>
                        <a class="collapse-item" href="{{ route('stemming_otak2') }}">Stemming</a>
                    </div>
                </div>
            </li>

             <!-- Divider -->
             <hr class="sidebar-divider">

             <!-- Heading -->
             <div class="sidebar-heading">
                 Data Labelling
             </div>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Labelling</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Labelling :</h6>
                        <a class="collapse-item" href="{{ route('labeling_ketam') }}">Labelling Ketam</a>
                        <a class="collapse-item" href="{{ route('labeling_getas') }}">Labelling Getas</a>
                        <a class="collapse-item" href="{{ route('labeling_kricu') }}">Labelling Kricu</a>
                        <a class="collapse-item" href="{{ route('labeling_otak2') }}">Labelling Otak-otak</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data Evaluation
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Hasil Akurasi Data</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Hasil Akurasi:</h6>
                        <a class="collapse-item" href="{{ route('akurasi_ketam') }}">Akurasi Data Ketam</a>
                        <a class="collapse-item" href="{{ route('akurasi_getas') }}">Akurasi Data Getas</a>
                        <a class="collapse-item" href="{{ route('akurasi_kricu') }}">Akurasi Data Kricu</a>
                        <a class="collapse-item" href="{{ route('akurasi_otak2') }}">Akurasi Data Otak-otak</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data Vizualitation
            </div>

            <!-- Nav Item - Charts -->
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsesatu"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Visualisasi Ketam</span>
                </a>
                <div id="collapsesatu" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Jenis Visualisasi:</h6>
                        <a class="collapse-item" href="{{ route('chart_ketam') }}">Diagram Lingkaran</a>
                        <a class="collapse-item" href="{{ route('cfm_ketam') }}">Confusion Matrix</a>
                        <a class="collapse-item" href="{{ route('wc_ketam') }}">Word Cloud</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsedua"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Visualisasi Getas</span>
                </a>
                <div id="collapsedua" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Jenis Visualisasi:</h6>
                        <a class="collapse-item" href="{{ route('chart_getas') }}">Diagram Lingkaran</a>
                        <a class="collapse-item" href="{{ route('cfm_getas') }}">Confusion Matrix</a>
                        <a class="collapse-item" href="{{ route('wc_getas') }}">Word Cloud</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsetiga"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Visualisasi Kricu</span>
                </a>
                <div id="collapsetiga" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Jenis Visualisasi:</h6>
                        <a class="collapse-item" href="{{ route('chart_kricu') }}">Diagram Lingkaran</a>
                        <a class="collapse-item" href="{{ route('cfm_kricu')}}">Confusion Matrix</a>
                        <a class="collapse-item" href="{{ route('wc_kricu') }}">Word Cloud</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseempat"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Visualisasi Otak-otak</span>
                </a>
                <div id="collapseempat" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Jenis Visualisasi:</h6>
                        <a class="collapse-item" href="{{ route('chart_otak2') }}">Diagram Lingkaran</a>
                        <a class="collapse-item" href="{{ route('cfm_otak2')}}">Confusion Matrix</a>
                        <a class="collapse-item" href="{{ route('wc_otak2') }}">Word Cloud</a>
                    </div>
                </div>
            </li>

             <!-- Divider -->
             <hr class="sidebar-divider">

             <!-- Heading -->
             <div class="sidebar-heading">
                 Hasil Analisis
             </div>
 
             <!-- Nav Item - Pages Collapse Menu -->
             <li class="nav-item">
                 <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages23"
                     aria-expanded="true" aria-controls="collapsePages">
                     <i class="fas fa-fw fa-folder"></i>
                     <span>Hasil Analisis Sentimen</span>
                 </a>
                 <div id="collapsePages23" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                     <div class="bg-white py-2 collapse-inner rounded">
                         <h6 class="collapse-header">Hasil Akurasi:</h6>
                         <a class="collapse-item" href="{{ route('analisis_ketam') }}">Hasil Analisis Ketam</a>
                         <a class="collapse-item" href="{{ route('analisis_getas') }}">Hasil Analisis Getas</a>
                         <a class="collapse-item" href="{{ route('analisis_kricu') }}">Hasil Analisis Kricu</a>
                         <a class="collapse-item" href="{{ route('analisis_otak2') }}">Hasil Analisis Otak-otak</a>
                     </div>
                 </div>
             </li>

            

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
                            

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
    
                            
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            
                            <!-- Dropdown - User Information -->
                            
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                 <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @yield('content')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->



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
    <script src="../sb-admin2/vendor/jquery/jquery.min.js"></script>
    <script src="../sb-admin2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../sb-admin2/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../sb-admin2/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../sb-admin2/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../sb-admin2/js/demo/chart-area-demo.js"></script>
    <script src="../sb-admin2/js/demo/chart-pie-demo.js"></script>

    <!-- Page level plugins -->
    <script src="../sb-admin2/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../sb-admin2/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../sb-admin2/js/demo/datatables-demo.js"></script>

</body>

</html>