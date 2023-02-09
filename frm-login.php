<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aganwadi Login </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  Theme style
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- jQuery -->
</head>

<body class="hold-transition login-page">

  <div class="">
    <div class="login-logo">
   
      <img src="" alt="" srcset="" height="150px">
    </div>
    <!-- /.login-logo -->
    <div class="card" style="width: 345px; height: 400px;">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Aganwadi login </p>

        <form action="index3.html" method="post">
          <div class="input-group mb-3">
            <input type="contact_no" id="contact_no" class="form-control" placeholder="Contact Number">

            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" id="password" class="form-control" placeholder="Password">
           
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary ">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Save the Password
                </label>
              </div>
            </div>
            <!-- /.col -->
            <!-- /.col -->
          </div>
        </form>
        <br>
        <div class="col-12  d-flex justify-content-center">
          <button type="submit" id="submit" class="btn btn-primary btn-block">Login</button>
        </div>
        <br>
        <!-- /.social-auth-links -->

        <p class="mb-1">
          <a href="">Forgot your password?</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->
  <script src="plugins/jquery/jquery.min.js"></script>

  <?php include './include-common-scripts.php'; ?>


 

  <script src="assets/js/filter/redirectPage.js"></script>

  <script src="assets/js/filter/loginData.js"></script>
  <script>
    $("#submit").click(function(e) {
      e.preventDefault();
      const contact_no = $("#contact_no").val().trim();
      const password = $("#password").val().trim();
      const loginData = {
        contact_no,
        password
      }
      const {
        data,
        status
      } = loginApi(loginData);
      console.log(data);
      if (status == 200) {

        const {
          password,
          ...userData
        } = data
        sessionStorage.setItem("user", JSON.stringify(userData))

        window.location.href = "index.php"
      } else {
        alert("please enter valid Username and Password !!!!!")
      }
    });
  </script>
</body>

</html>