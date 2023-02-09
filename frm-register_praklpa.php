<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminKIT</title>

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
                            <h1 class="m-0">Prakalpa Resister</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Prakalpa Resister</li>
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
                                <h3 class="card-title">Resister Prakalpa</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">


                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="" class="form-label">Prakalpa Name<sup class="text-danger">*</sup></label>
                                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter Prakalpa Name " required>
                                    </div>
                                </div>
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


    <script src="./assets/js/filter/praklpaRegister.js"></script>
    <!-- <script src="./assets/js/filter/getQueryParamValue.js"></script> -->
    <script src="./assets/js/filter/updatePraklpa.js"></script>

    <script src="assets/js/parseData.js"></script>

    <script>
        (() => {
            let id = getQueryParamValue("id")

            if (!id) {
                praklpaRegister();
                return
            }
            updatePraklpa(id)
        })()
    </script>
    <!--  LogOut -->
    <script>
        document.querySelector("#logout").addEventListener("click", function() {
            sessionStorage.clear();
            window.location.href = "frm-login.php";
        })
    </script>
    <!-- <script>
     praklpaRegister();
</script> -->

</body>

</html>