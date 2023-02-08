<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>

    <?php include './include-common-style.php'; ?>
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
                            <h1 class="m-0">Situational Demand Program Report</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Situational Demand Program Report</li>
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
                        <div class="col-md-12">
                            <div class="card card-primary card-outline">
                                <div class="card-header p-2">
                                    <strong>Report</strong>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 py-2">
                                            <strong>Report Name</strong>
                                            <p class="text-muted" id=""></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                    <div class="col-md-6 py-2">
                                            <strong>Aganwadi Name</strong>
                                            <p class="text-muted" id=""></p>
                                        </div>
                                        <div class="col-md-6 py-2">
                                            <strong>Reply Description</strong>
                                            <p class="text-muted" id=""></i>
                                            </p>
                                        </div>
                                    </div>

                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                           
                            <div class="card card-primary card-outline">
                                <div class="card-header p-2">
                                    <strong>Files</strong>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 py-2">
                                            <strong>File</strong>
                                            <p class="text-muted" id=""></p>
                                        </div>
                                        <div class="col-md-6 py-2">
                                            <strong>File</strong>
                                            <p class="text-muted" id=""></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <?php include './include-copy-right.php' ?>
    </div>
    <!-- ./wrapper -->
    <?php include './include-common-scripts.php'; ?>
</body>

</html>