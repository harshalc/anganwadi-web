<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminKIT</title>
    <?php include './include-common-style.php'; ?>
    <?php include './include-datatable-style.php'; ?>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php include './include-sidebar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Bit List</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Bit List</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header">
                                        <h3 class="card-title">Bit List</h3>
                                    </div>

                                </div>

                                <div class="card-body">
                                    <div class="" style="overflow-x: auto;">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead class="bg-secondary  ">
                                                <tr>
                                                    <th>Sr.No</th>
                                                    <th>Bit Name</th>
                                                    <th>Update / Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody id="bitList">
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <?php include './include-copy-right.php' ?>
    </div>
    <!-- ./wrapper -->
    <?php include './include-common-scripts.php'; ?>
    <?php include './include-datatable-scripts.php'; ?>

    <script src="./assets/js/filter/bitGetList.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });

        bitGEtList();
    </script>
    <!--  LogOut -->
    <script>
        document.querySelector("#logout").addEventListener("click", function() {
            sessionStorage.clear();
            window.location.href = "frm-login.php";
        })
    </script>
</body>

</html>