<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UPDATE BARANG</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link href="{{ asset('cssxjs/plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <!-- overlayScrollbars -->
    <link href="{{ asset('cssxjs/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}" rel="stylesheet">
    <!-- Theme style -->
    <link href="{{ asset('cssxjs/dist/css/adminlte.min.css') }}" rel="stylesheet">
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed" style="overflow-y: hidden">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-dark justify-content-center">
            <h2>WEBSITE STOK BARANG</h2>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <div class="user-panel mb-3 mt-3 text-center">
                <div class="info">
                    <h4>MENU</h4>
                </div>
            </div>

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/dashboard-admin" class="nav-link active">
                                <p>STOK BARANG</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/barang-masuk" class="nav-link">
                                <p>BARANG MASUK</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/barang-keluar" class="nav-link">
                                <p>BARANG KELUAR</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/login" class="nav-link navbar-danger">
                                <p>LOGOUT</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </aside>

        <div class="content-wrapper">
            <div class="content-header">
                <h5 class="mx-4">DATA STOK BARANG - UPDATE BARANG</h5>
            </div>

            <div class="container">
                <a class="btn btn-danger text-light my-2" href="/dashboard-admin">BACK</a>
                <form action='/proses-update/{{ $data->Kd_Barang }}' method="POST"
                enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label>Kode Barang</label>
                            <input class="form-control" name="Kd_Barang" autocomplete="off" 
                            value="{{ $data->Kd_Barang }}" readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label>Nama Barang</label>
                            <input type="text" class="form-control" name="Nm_Barang" autocomplete="off" 
                            value="{{ $data->Nm_Barang }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label>Size Barang</label>
                            <input type="text" class="form-control" name="Sz_Barang" autocomplete="off" 
                            value="{{ $data->Sz_Barang }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label>Harga Barang</label>
                            <input type="number" class="form-control" name="Hg_Barang" autocomplete="off" 
                            value="{{ $data->Hg_Barang }}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                </form>
            </div>
        </div>
    </div>

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard2.js"></script>
</body>

</html>