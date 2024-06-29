<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Regal Admin</title>
    <!-- base:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/feather/feather.css">
    <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/jquery-bar-rating/fontawesome-stars-o.css">
    <link rel="stylesheet" href="vendors/jquery-bar-rating/fontawesome-stars.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="user-profile">
                <div class="user-image">
                    <img src="images/faces/profil.jpg">
                </div>
                <div class="user-name">
                    Viant Trestan Brinto
                </div>
                <div class="user-designation">
                Web Developer
                </div>
            </div>
            <ul class="nav">    
                <li class="nav-item">
                    <a class="nav-link" href="https://viant-portfolio.vercel.app">
                        <i class="icon-briefcase menu-icon"></i>
                        <span class="menu-title">Portfolio</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Tamu">
                        <i class="icon-columns menu-icon"></i>
                        <span class="menu-title">Daftar Tamu</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.galeri.index') }}">
                        <i class="icon-command menu-icon"></i>
                        <span class="menu-title">Galeris</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/icons/feather-icons">
                        <i class="icon-head menu-icon"></i>
                        <span class="menu-title">Contact Me</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">
                        <i class="icon-arrow-left menu-icon"></i>
                        <span class="menu-title">Log Out</span>
                    </a>
                </li>
            </ul>
        </nav>
    <div class="container-scroller">
        
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar -->
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('galeris')
                    @yield('form')
                    @yield('form_edit')
                    @yield('tamu')
                </div>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- base:js -->
    <script src="vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <!-- End custom js for this page-->
</body>

</html>
