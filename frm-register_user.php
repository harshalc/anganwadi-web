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
                            <h1 class="m-0">Resister User</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Resister User</li>
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
                                <h3 class="card-title">Registration User</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="" class="form-label">Role<sup class="text-danger">*</sup></label>
                                        <select name="role_id" class="form-control" id="role_id" required>
                                            <option value="select">Select</option>
                                            <option value="User 1">User 1</option>
                                            <option value="User 2">User 2</option>
                                            <option value="User 3">User 3</option>
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="" class="form-label">First Name<sup class="text-danger">*</sup></label>
                                        <input type="text" name="f_name" class="form-control" id="f_name" placeholder="Enter First Name " required>

                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="" class="form-label">Middle Name<sup class="text-danger">*</sup></label>
                                        <input type="text" name="m_name" class="form-control" id="m_name" placeholder="Enter Middle Name " required>

                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="" class="form-label">Last Name<sup class="text-danger">*</sup></label>
                                        <input type="text" name="l_name" class="form-control" id="l_name" placeholder="Enter Last Name " required>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="" class="form-label">Email<sup class="text-danger">*</sup></label>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email Id " required>

                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="" class="form-label">Contact Number<sup class="text-danger">*</sup></label>
                                        <input type="tel" name="contact_no" class="form-control" id="contact_no" placeholder="Enter Contact Number " required>

                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>STATE</label>
                                            <select name="state" class="form-control" id="state">
                                                <option value="select">Select</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>District</label>
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

    <script src="./assets/js/filter/anganwadiOpstionList.js"></script>
    <script src="./assets/js/filter/userRegister.js"></script>
    <script src="./assets/js/filter/updateUser.js"></script>

    <script>
        // userRegister();
        stateOptionsSet();
    </script>
    <script>
        (() => {
            let id = getQueryParamValue("id")

            if (!id) {
                userRegister();
                return
            }
            updateUser(id)
        })()
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