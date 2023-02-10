<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
</div>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="index.php" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Contact</a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->
    <li class="nav-item">
      <a class="nav-link" data-widget="navbar-search" href="#" role="button">
        <i class="fas fa-search"></i>
      </a>
      <div class="navbar-search-block">
        <form class="form-inline">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
              <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
        <i class="fas fa-th-large"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="logout" data-slide="true" role="button">Logout
      </a>
    </li>
  </ul>
</nav>
<!-- /.navbar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="assets/img/admin.png" alt="Admin" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Admin</span>
  </a>
 
  <a href="#" class="brand-link">
    <img src="assets/img/admin.png" alt="Admin" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Admin</span><br>

    <span class="brand-text font-weight-light" id="user_login_name">pranali</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

    <!-- SidebarSearch Form -->
    <div class="form-inline pt-2">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-circle"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./index.php" class="nav-link">
                <i class="far fa-circle nav-icon text-danger"></i>
                <p>Page 1</p>
              </a>
            </li>

          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-circle"></i>
            <p>
              Students
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./frm-register_students.php" class="nav-link">
                <i class="far fa-circle nav-icon text-danger"></i>
                <p>Register Students</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./list-students.php" class="nav-link">
                <i class="far fa-circle nav-icon text-warning"></i>
                <p>Students list</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-circle"></i>
            <p>
              User
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./frm-register_user.php" class="nav-link">
                <i class="far fa-circle nav-icon text-warning"></i>
                <p>Register User</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="list-user.php" class="nav-link">
                <i class="far fa-circle nav-icon text-danger"></i>
                <p>User list</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-circle"></i>
            <p>
              Prakalpa
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./frm-register_praklpa.php" class="nav-link">
                <i class="far fa-circle nav-icon text-warning"></i>
                <p>Register Prakalpa</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="list-prakalpa.php" class="nav-link">
                <i class="far fa-circle nav-icon text-danger"></i>
                <p>Prakalpa list</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-circle"></i>
            <p>
              Bit
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./frm-register_bit.php" class="nav-link">
                <i class="far fa-circle nav-icon text-warning"></i>
                <p>Register Bit</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="list-bit.php" class="nav-link">
                <i class="far fa-circle nav-icon text-danger"></i>
                <p>Bit list</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-circle"></i>
            <p>
              Aganwadi
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./frm-register_aganwadi.php" class="nav-link">
                <i class="far fa-circle nav-icon text-warning"></i>
                <p>Register Aganwadi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./list-aganwadi.php" class="nav-link">
                <i class="far fa-circle nav-icon text-danger"></i>
                <p>Aganwadi list</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-circle"></i>
            <p>
              Aganwadi User
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./frm-aganwadi_user.php" class="nav-link">
                <i class="far fa-circle nav-icon text-warning"></i>
                <p>Register Aganwadi User</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./list-aganwadi_user.php" class="nav-link">
                <i class="far fa-circle nav-icon text-danger"></i>
                <p>Aganwadi User list</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-circle"></i>
            <p>
              Situational Demand Program
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./frm-send-tatkal-mahiti-report.php" class="nav-link">
                <i class="far fa-circle nav-icon text-warning"></i>
                <p>Situational Demand Program Report</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./list-send-tatkal-mahiti-report.php" class="nav-link">
                <i class="far fa-circle nav-icon text-danger"></i>
                <p>Situational Demand Program Report list</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./list-reply-tatkal-mahiti-report.php" class="nav-link">
                <i class="far fa-circle nav-icon text-danger"></i>
                <p>Situational Demand Program Report Reply list</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-circle"></i>
            <p>
              Monthly Monitoring List
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./list-Monthly-monitoring-report.php" class="nav-link">
                <i class="far fa-circle nav-icon text-warning"></i>
                <p>Monthly Monitoring Report List</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-circle"></i>
            <p>
              Weekly Monitoring List
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./list-weekly-monitoring-report.php" class="nav-link">
                <i class="far fa-circle nav-icon text-warning"></i>
                <p>Weekly Monitoring Report List</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-circle"></i>
            <p>
              Anganwadi Suvidha Report
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./list-aganwadi-suvidha-report.php" class="nav-link">
                <i class="far fa-circle nav-icon text-warning"></i>
                <p>Anganwadi Suvidha Report List</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>