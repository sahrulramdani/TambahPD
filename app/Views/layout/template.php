<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>TambahPD</title>

    <!-- Icons -->
    <link rel="stylesheet" href="vendors/feather/feather.css" />
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css" />
    <!-- EndIcons -->

    <!-- Font Awesome -->

    <!-- Plugin -->
    <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css" />
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css" />
    <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css" />
    <!-- End plugin -->

    <!-- Custom Css -->
    <link rel="stylesheet" href="css/vertical-layout-light/style.css" />
    <link rel="stylesheet" href="css/vertical-layout-light/custom.css" />
    <!-- End -->

    <link rel="shortcut icon" href="images/logo-tambah-pd-head.png" />
</head>

<body>
    <div class="container-scroller">
        <?= $this->include('layout/navbar'); ?>

        <div class="container-fluid page-body-wrapper">
            <?= $this->include('layout/sidebar'); ?>

            <div class="main-panel">
                <?= $this->renderSection('content'); ?>
            </div>
        </div>
    </div>
    <!-- Plugins -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- EndPlugins -->

    <!-- Data Tables Plugin -->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="js/dataTables.select.min.js"></script>

    <!-- End Data Tables Plugin -->

    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->

    <!-- Custom Js -->
    <script src="js/dashboard.js"></script>
    <script src="js/Chart.roundedBarCharts.js"></script>
    <!-- End Custom Js -->
    <script src="https://kit.fontawesome.com/347e750e98.js" crossorigin="anonymous"></script>
</body>

</html>