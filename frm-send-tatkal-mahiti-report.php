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
                <div class="container-fluid text-uppercase">
                    <form id="userFormData" action="">
                        <!-- SELECT2 EXAMPLE -->
                        <div class="card card-default">
                            <div class="card-header">
                                <h3 class="card-title">Situational Demand Program Report</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="" class="form-label">Report Name<sup class="text-danger">*</sup></label>
                                        <input type="text" name="f_name" class="form-control" id="" placeholder="Report First Name " required>

                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="" class="form-label">Date<sup class="text-danger">*</sup></label>
                                        <input type="date" name="m_name" class="form-control" id="" required>

                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="" class="form-label">File Upload<sup class="text-danger">*</sup></label>
                                        <input type="file" name="" class="form-control" id="" placeholder="File Upload" required>

                                    </div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-center" id="">
                                        <button type="button" class="btn btn-info my-2" id="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                    </form>
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