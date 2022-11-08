<?php
global $mysqli;
$host = "localhost";
$user = "root";
$pass = "5piderm4n";
$database = "datamcu";
$mysqli = new mysqli($host, $user, $pass, $database);
if (mysqli_connect_errno()) {
    trigger_error('Koneksi ke database gagal: '  . mysqli_connect_error(), E_USER_ERROR);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" http-equiv="refresh">
    <!-- <meta http-equiv="refresh" content="3"> -->
    <title>Server Room | Monitoring</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">

</head>

<body class="dark-mode layout-navbar-fixed layout-footer-fixed sidebar-collapse layout-fixed" onload="Javascript:AutoRefresh(5000);">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <!-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="/" class="nav-link">Home</a>
                </li> -->

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">SERVER ROOM</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">R Arif FIrmansah</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./index.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard v1</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index2.html" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard v2</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index3.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard v3</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header" style="text-align:center;">
                            <h3>SERVER ROOM MONITORING CONTROL</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card" style="color: #4B515D; border-radius: 35px;">
                                <div class="card-body">

                                    <div class="d-flex">
                                        <?php $temr = mysqli_fetch_array($mysqli->query("SELECT * FROM tbserveroom ORDER BY Created_at DESC LIMIT  1")) ?>
                                        <h6 class="flex-grow-1" style="color: #ffffff;"><?= $temr['Created_at']; ?></h6>
                                    </div>

                                    <div class="d-flex flex-column text-center mt-5 mb-4">
                                        <h6 class="display-4 mb-0 font-weight-bold" style="color: #ffffff;"> <?= $temr['temperature']; ?> °C </h6>
                                        <h6 class="medium" style="color: #ffffff;">Temperature</h6>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1" style="font-size: 1rem;">

                                        </div>
                                        <div>
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-weather/ilu1.webp" width="100px">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="color: #4B515D; border-radius: 35px;">
                                <div class="card-body">

                                    <div class="d-flex">
                                        <h6 class="flex-grow-1" style="color: #ffffff;"><?= $temr['Created_at']; ?></h6>
                                    </div>

                                    <div class="d-flex flex-column text-center mt-5 mb-4">
                                        <h8 class="display-4 mb-0 font-weight-bold" style="color: #ffffff;"> <?= $temr['pressure']; ?>'Pa </h8>
                                        <h6 class="medium" style="color: #ffffff;">Pressure</h6>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1" style="font-size: 1rem;">

                                        </div>
                                        <div>
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-weather/ilu1.webp" width="100px">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="color: #4B515D; border-radius: 35px;">
                                <div class="card-body">

                                    <div class="d-flex">
                                        <h6 class="flex-grow-1" style="color: #ffffff;"><?= $temr['Created_at']; ?></h6>
                                    </div>

                                    <div class="d-flex flex-column text-center mt-5 mb-4">
                                        <h6 class="display-4 mb-0 font-weight-bold" style="color: #ffffff;"> <?= $temr['altitude']; ?>'m </h6>
                                        <h6 class="medium" style="color: #ffffff;">Approx Altitude</h6>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1" style="font-size: 1rem;">

                                        </div>
                                        <div>
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-weather/ilu1.webp" width="100px">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <canvas id="merged" style="min-height: 210px; height: 210px; max-height: 250px; max-width: 100%;"></canvas>

                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <canvas id="temperature" style="min-height: 210px; height: 210px; max-height: 250px; max-width: 100%;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <canvas id="pressure" style="min-height: 210px; height: 210px; max-height: 250px; max-width: 100%;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <canvas id="altitude" style="min-height: 210px; height: 210px; max-height: 250px; max-width: 100%;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->


                </div>
                <!--/. container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2022 <a href="https://adminlte.io">RArifFirmansah</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.2.0
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/adminlte.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="assets/plugins/raphael/raphael.min.js"></script>
    <script src="assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>


    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="assets/dist/js/pages/dashboard2.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.2"></script>
    <script>
        // input output
        var ctx = document.getElementById("merged").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [
                    '',
                    <?php
                    $tren = $mysqli->query("SELECT * FROM tbserveroom ORDER BY Created_at DESC LIMIT 50 ");
                    while ($ivs = mysqli_fetch_array($tren)) {

                    ?> '<?= $ivs['Created_at']; ?>',

                    <?php }; ?>

                ],
                datasets: [
                    // plan
                    {
                        label: 'TEMPEARTURE',
                        data: [
                            '0',

                            <?php
                            $tren = $mysqli->query("SELECT * FROM tbserveroom ORDER BY Created_at DESC LIMIT 50 ");
                            while ($ivs = mysqli_fetch_array($tren)) {
                            ?> '<?= $ivs['temperature']; ?>',

                            <?php }; ?>

                        ],
                        backgroundColor: [

                            'rgb(102, 255, 51)',
                        ],
                        borderColor: [

                            'rgb(102, 255, 51)',
                        ],
                        borderWidth: 1
                    },
                    {
                        label: 'ALTITUDE',
                        data: [
                            '0',

                            <?php
                            $tren = $mysqli->query("SELECT * FROM tbserveroom ORDER BY Created_at DESC LIMIT 50 ");
                            while ($ivs = mysqli_fetch_array($tren)) {
                            ?> '<?= $ivs['altitude']; ?>',

                            <?php }; ?>

                        ],
                        backgroundColor: [

                            'rgb(229, 235, 52)',
                        ],
                        borderColor: [

                            'rgb(229, 235, 52)',
                        ],
                        borderWidth: 1
                    },

                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: false
                    }
                },
                interaction: {
                    mode: 'index',
                    axis: 'y'
                }
            }
        });
        // input output
        var ctx = document.getElementById("pressure").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [
                    '',
                    <?php
                    $tren = $mysqli->query("SELECT * FROM tbserveroom ORDER BY Created_at DESC LIMIT 100 ");
                    while ($ivs = mysqli_fetch_array($tren)) {

                    ?> '<?= $ivs['Created_at']; ?>',

                    <?php }; ?>

                ],
                datasets: [

                    {
                        label: 'PRESSURE',
                        data: [
                            '0',

                            <?php
                            $tren = $mysqli->query("SELECT * FROM tbserveroom ORDER BY Created_at DESC LIMIT 100 ");
                            while ($ivs = mysqli_fetch_array($tren)) {
                            ?> '<?= $ivs['pressure']; ?>',

                            <?php }; ?>

                        ],
                        backgroundColor: [

                            'rgb(229, 235, 52)',
                        ],
                        borderColor: [

                            'rgb(229, 235, 52)',
                        ],
                        borderWidth: 1
                    },

                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: false
                    }
                },
                interaction: {
                    mode: 'index',
                    axis: 'y'
                }
            }
        });

        // input output
        var ctx = document.getElementById("temperature").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [
                    '',
                    <?php
                    $tren = $mysqli->query("SELECT * FROM tbserveroom ORDER BY Created_at DESC LIMIT 50 ");
                    while ($ivs = mysqli_fetch_array($tren)) {

                    ?> '<?= $ivs['Created_at']; ?>',

                    <?php }; ?>

                ],
                datasets: [
                    // plan
                    {
                        label: 'TEMPEARTURE',
                        data: [
                            '0',

                            <?php
                            $tren = $mysqli->query("SELECT * FROM tbserveroom ORDER BY Created_at DESC LIMIT 50 ");
                            while ($ivs = mysqli_fetch_array($tren)) {
                            ?> '<?= $ivs['temperature']; ?>',

                            <?php }; ?>

                        ],
                        backgroundColor: [

                            'rgb(102, 255, 51)',
                        ],
                        borderColor: [

                            'rgb(102, 255, 51)',
                        ],
                        borderWidth: 1
                    }

                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: false
                    }
                },
                interaction: {
                    mode: 'index',
                    axis: 'y'
                }
            }
        });

        // input output
        var ctx = document.getElementById("altitude").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [
                    '',
                    <?php
                    $tren = $mysqli->query("SELECT * FROM tbserveroom ORDER BY Created_at DESC LIMIT 50 ");
                    while ($ivs = mysqli_fetch_array($tren)) {

                    ?> '<?= $ivs['Created_at']; ?>',

                    <?php }; ?>

                ],
                datasets: [
                    // plan
                    {
                        label: 'APPROX ALTITUDE',
                        data: [
                            '0',

                            <?php
                            $tren = $mysqli->query("SELECT * FROM tbserveroom ORDER BY Created_at DESC LIMIT 50 ");
                            while ($ivs = mysqli_fetch_array($tren)) {
                            ?> '<?= $ivs['altitude']; ?>',

                            <?php }; ?>

                        ],
                        backgroundColor: [

                            'rgb(235, 73, 52)',
                        ],
                        borderColor: [

                            'rgb(235, 73, 52)',
                        ],
                        borderWidth: 1
                    }

                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: false
                    }
                },
                interaction: {
                    mode: 'index',
                    axis: 'y'
                }
            }
        });
    </script>
</body>

</html><?php /**PATH D:\Xampp\htdocs\modemcularavel\resources\views/welcome.blade.php ENDPATH**/ ?>