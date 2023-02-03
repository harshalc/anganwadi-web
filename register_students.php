<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminKIT</title>

    <!-- window icon -->
    <link rel="shortcut icon" type="image/x-icon" href="./dist/img/idea-80.png">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include './sidebar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Resister Student</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Resister Student</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid text-uppercase">
                    <form id="UserFormData" action="">
                        <!-- SELECT2 EXAMPLE -->
                        <div class="card card-default">
                            <div class="card-header">
                                <h3 class="card-title">Resister Student</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">


                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="Aganvadi" class="form-label">Aganvadi Kendra<sup>*</sup></label>
                                            <select name="Aganvadi" class="form-control" id="" required>
                                                <option value="select">Select</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Year</label>
                                            <select name="block" class="form-control" id="">
                                                <option value="select">Select</option>
                                                <option value="select">2023-2024</option>
                                                <option value="select">2024-2025</option>
                                            </select>
                                        </div>
                                    </div> -->
                                </div>

                                <div class="card-header">
                                    <h3 class="card-title">Student Information</h3>
                                </div>

                                <div class="row pt-3">
                                    <div class="col-md-4 form-group">
                                        <label for="" class="form-label">First Name<sup class="text-danger">*</sup></label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter First Name " required>

                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="" class="form-label">Middle Name<sup class="text-danger">*</sup></label>
                                        <input type="text" name="middle_name" class="form-control" id="middle_name" placeholder="Enter Middle Name " required>

                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="" class="form-label">Last Name<sup class="text-danger">*</sup></label>
                                        <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Enter Last Name " required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="" class="form-label">Mother Name<sup class="text-danger">*</sup></label>
                                        <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Enter Mother Name " required>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="" class="form-label">Father Name<sup class="text-danger">*</sup></label>
                                        <input type="text" name="" class="form-control" id="" placeholder="Enter Father Name " required>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="" class="form-label">Date Of Birth<sup class="text-danger">*</sup></label>
                                        <input type="date" name="dob" class="form-control" id="" placeholder=" " required>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="state" class="form-label">Gender<sup>*</sup></label>
                                            <select name="state" class="form-control" id="">
                                                <option value="select">Select</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="" class="form-label">Joining Date to Aganwadi<sup class="text-danger">*</sup></label>
                                        <input type="date" name="date" class="form-control" id="" placeholder=" " required>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="" class="form-label">Pass out Date from Aganwadi<sup class="text-danger">*</sup></label>
                                        <input type="date" name="date" class="form-control" id="" placeholder=" " required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="" class="form-label">Joining Date Photo<sup class="text-danger">*</sup></label>
                                        <input type="file" name="file" class="form-control" id="" placeholder=" " required accept="image/*">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="" class="form-label">Pass out Date Photo<sup class="text-danger">*</sup></label>
                                        <input type="file" name="file" class="form-control" id="" placeholder=" " required accept="image/*">
                                    </div>
                                </div>

                                <div class="card-header">
                                    <h3 class="card-title">Student Address</h3>
                                </div>

                                <div class="row pt-3">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="state" class="form-label">STATE<sup>*</sup></label>
                                            <select name="state" class="form-control" id="state">
                                                <option value="select">Select</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="form-label">DISTRICT<sup>*</sup></label>
                                            <select name="district" class="form-control" id="district">
                                                <option value="select">Select</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>TALUKA</label>
                                            <select name="block" class="form-control" id="block">
                                                <option value="select">Select</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>GRAMPANCHAYAT</label>
                                            <select name="local_body" class="form-control" id="local_body">
                                                <option value="select">Select</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>VILLAGE</label>
                                            <select name="village" class="form-control" id="village">
                                                <option value="select">Select</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="" class="form-label">ZIP CODE<sup>*</sup></label>
                                        <input type="number" name="zip_code" class="form-control" id="zip_code" placeholder="enter zip-code" required>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-center" id="">
                                        <button type="button" class="btn btn-info my-2" id="">Submit</button>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="">Admin</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>