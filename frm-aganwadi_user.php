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
                    <form id="UserFormData" action="">
                        <!-- SELECT2 EXAMPLE -->
                        <div class="card card-default">
                            <div class="card-header">
                                <h3 class="card-title">Registration Aganwadi User</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="" class="form-label">Aganwadi Name<sup class="text-danger">*</sup></label>
                                        <select name="anganwadi_id" class="form-control" id="anganwadi_id" required>
                                            <option value="select">Select</option>
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
                                        <input type="emai l" name="email" class="form-control" id="email" placeholder="Enter Email Id " onchange="checkEmail()" required>

                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="contact_no" class="form-label">Contact Number<sup class="text-danger">*</sup></label>
                                        <input type="tel" name="contact_no" class="form-control" id="contact_no" placeholder="Enter Contact Number " minlength="10" maxlength="10" onkeypress="return onlyNumberKey(event)" required>

                                    </div>
                                </div>
                                <hr>


                                <div class="card-header">
                                    <h3 class="card-title">User Address</h3>
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
        <!-- /.content-wrapper -->
        <?php include './include-copy-right.php' ?>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <?php include './include-common-scripts.php'; ?>
    <script src="./assets/js/filter/aganwadiUser.js"></script>
    <script src="./assets/js/filter/anganwadiOpstionList.js"></script>
    <script src="./assets/js/filter/updateAnganwadiUser.js"></script>

    <script src="assets/js/parseData.js"></script>

    <script>
        aganwadiuserOpstionList();
        stateOptionsSet();
        // anganwadiUserRegister();
    </script>

    <script>
        (() => {
            let id = getQueryParamValue("id")

            if (!id) {
                anganwadiUserRegister();
                return
            }
            updateAnganwadiUser(id)
        })()

        // function onlyNumberKey(evt) {
        //     // Only ASCII character in that range allowed
        //     var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        //     if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) {

        //         alert('Please provide a valid No ');

        //         return false;


        //     } 
        //     return true;
        // }



        function onlyNumberKey(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                // alert("Please enter only Numbers.");
                return false;
            }

            return true;
        }

        // function ValidateNo() {
        //     var phoneNo = document.getElementById('contact_no');

        //     if (phoneNo.value == "" || phoneNo.value == null) {
        //         alert("Please enter your Mobile No.");
        //         return false;
        //     }
        //     if (phoneNo.value.length < 10 || phoneNo.value.length > 10) {
        //         alert("Mobile No. is not valid, Please Enter 10 Digit Mobile No.");
        //         return false;
        //     }

        // alert("Success ");
        // return true;
        // }



        function checkEmail() {
            var email = document.getElementById('email');
            var filter = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if (!filter.test(email.value)) {
                alert('Please provide a valid email address');
                email.focus;
                return false;
            }
        }
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