<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminKIT</title>
    <?php include './include-common-style.php'; ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <button hidden id="modalBtn" class="toastrDefaultError">click to open model</button>
    <div class="wrapper">

        <?php include './include-sidebar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Aganwadi Resister</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Aganwadi Resister</li>
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
                                <h3 class="card-title">Resister Aganwadi</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">


                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="Prakalpa" class="form-label">Prakalpa Name<sup class="text-danger">*</sup></label>
                                        <select name="prakalpa_id" class="form-control" id="prakalpa_id" required>
                                            <option value="select">Select</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="Bit" class="form-label">Bit Name<sup class="text-danger">*</sup></label>
                                        <select name="bit_id" class="form-control" id="bit_id" required>
                                            <option value="select">Select</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="" class="form-label">Aganwadi Name<sup class="text-danger">*</sup></label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Aganwadi Name " required>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="" class="form-label">Aganwadi Number<sup class="text-danger">*</sup></label>
                                        <input type="number" name="aganwadi_no" class="form-control" id="aganwadi_no" placeholder="Enter Aganwadi Number " required>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="Prakalpa" class="form-label">Year<sup class="text-danger">*</sup></label>
                                        <select name="year" class="form-control" id="year" required>
                                            <option value="select">Select</option>
                                            <option value="2023-2024">2023-2024</option>
                                            <option value="2024-2025">2024-2025</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-header">
                                    <h3 class="card-title">Aganwadi Address</h3>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="state" class="form-label">STATE<sup class="text-danger">*</sup></label>
                                            <select name="state" class="form-control" id="state">
                                                <option value="select">Select</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="form-label">DISTRICT<sup class="text-danger">*</sup></label>
                                            <select name="district" class="form-control" id="district">
                                                <option value="select">Select</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>TALUKA <sup class="text-danger">*</sup> </label>
                                            <select name="block" class="form-control" id="block">
                                                <option value="select">Select</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>VILLAGE <sup class="text-danger">*</sup></label>
                                            <select name="village" class="form-control" id="village">
                                                <option value="select">Select</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="" class="form-label">ZIP CODE<sup class="text-danger">*</sup></label>
                                        <span class="text-danger" id="msg"></span>
                                        <input type="tel" name="zip_code" class="form-control" id="zip_code" placeholder="enter zip-code" minlength="6" maxlength="6" onKeyUp="zipCode()" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-center" id="">
                                        <button type="button" class="btn btn-info my-2 " id="submit">Submit</button>
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
    <script src="./assets/js/filter/anganwadiOpstionList.js"></script>
    <script src="./assets/js/filter/anganwadiRegister.js"></script>
    <script src="./assets/js/filter/updateaganwadi.js"></script>

    <script src="assets/js/parseData.js"></script>

    <script>
        praklpOpstionList();
        bitOpstionList();
        // anganwadiRegister();
        stateOptionsSet();
    </script>
    <script>
        (() => {
            let id = getQueryParamValue("id")

            if (!id) {
                anganwadiRegister();
                return
            }
            updateaganwadi(id)
        })()
    </script>


    <script>
        document.querySelector("#logout").addEventListener("click", function() {
            sessionStorage.clear();
            window.location.href = "frm-login.php";
        })
    </script>
</body>

</html>