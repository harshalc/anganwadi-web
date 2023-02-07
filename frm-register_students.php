<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminKIT</title>

    <?php include './include-common-style.php';?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <?php include './include-sidebar.php';?>

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
                    <form id="studentFormData" action="">
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
                                            <select name="Aganvadi" class="form-control" id="name" required>
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
                                        <label for="" class="form-label">Mother Name<sup class="text-danger">*</sup></label>
                                        <input type="text" name="mother_name" class="form-control" id="mother_name" placeholder="Enter Mother Name " required>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="" class="form-label">Father Name<sup class="text-danger">*</sup></label>
                                        <input type="text" name="father_name" class="form-control" id="father_name" placeholder="Enter Father Name " required>
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
                                            <select name="gender" class="form-control" id="gender">
                                                <option value="select">Select</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="" class="form-label">Joining Date to Aganwadi<sup class="text-danger">*</sup></label>
                                        <input type="date" name="join_date" class="form-control" id="join_date" placeholder=" " required>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="" class="form-label">Pass out Date from Aganwadi<sup class="text-danger">*</sup></label>
                                        <input type="date" name="pass_date" class="form-control" id="pass_date" placeholder=" " required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="" class="form-label">Joining Date Photo<sup class="text-danger">*</sup></label>
                                        <input type="file" name="join_photo" class="form-control" id="join_photo" placeholder=" " required accept="image/*">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="" class="form-label">Pass out Date Photo<sup class="text-danger">*</sup></label>
                                        <input type="file" name="pass_photo" class="form-control" id="pass_photo" placeholder=" " required accept="image/*">
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
<?php include './include-common-scripts.php';?>

<script src="./assets/js/filter/anganwadiOpstionList.js"></script>
<script src="./assets/js/filter/studentRegister.js"></script>

<script>
    stateOptionsSet();
    aganwadiOpstionList();
    studentRegister();
</script>
</body>

</html>