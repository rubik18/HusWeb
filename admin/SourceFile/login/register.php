<?php 
// kết nối
  require'../db/connect.php';
  $conn->set_charset("utf8");
// Chuỗi kết nối
  session_start();
// var_dump($_SESSION['user']);die();
if (!isset($_SESSION['admin'])) {
  header("Location:/php-intership-team/admin/SourceFile/login/login.php");
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="">
<!-- sidebar -->
 <?php include '../themepart/top-menu.php' ?>
 <!-- topmenu -->
 <?php include '../themepart/sidebar.php' ?>
 <!-- content -->
<div class="content-wrapper">
  <div class="" style="padding: 1.25rem; ">

  <div class="card">
    <div class="" style="padding : 10px;">
     <div class="register-logo" style="margin-bottom: 5px !important;">
        <b>Admin</b>LTE</a>
      </div>
      <p class="login-box-msg" style="text-align: center; font-size: 15px;">Register a new admin</p>

      <form action="register_submit.php" method="post" enctype="multipart/form-data">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name = "full_name" placeholder="Full name" value="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name = "user_name"placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name = "password"placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name = "repassword"placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <?php 
          if (@$_GET['MinValue'] == true) {
        ?>
        <div class="input-group mb-3">
          <div class= "alert-light text-danger">Your password is too short! You need to type a password more than 8 characters</div>
        </div>
        <?php      
          }
        ?>
        <!-- empty password -->
        <?php 
          if (@$_GET['Empty'] == true) {
        ?>
        <div class="input-group mb-3">
          <div class= "alert-light text-danger">Please fill in the blanks </div>
        </div>
        <?php      
          }
        ?>
        <!-- incorrect password or username -->
        <?php 
          if (@$_GET['exited'] == true) {
        ?>
        <div class="input-group mb-3">
          <div class= "alert-light text-danger"><?php echo $_GET['exited'] ?></div>
        </div>
        <?php      
          }
        ?>
          <div class="input-group">
          <label for="exampleInputFile">Avatar</label>
          </div>
            <div>
              Chọn file để upload:
              <input type="file" name="fileupload" id="fileupload" accept="image/*"><br>
              URL:
              <input type="text" name = "URL" class="form-control" style="border-right: 1.5px solid #dee2e6 !important;" placeholder="Enter ...">
            </div>   
          

        
        <div><label>Lever</label></div>
        <div class="input-group mb-3">
          <select class="form-control " name = "type" style="width: 100%; border-right: 1.5px solid #dee2e6 !important;">
            <option selected="selected" value ="1">1</option>
            <option selected="selected" value ="2">2</option>
          </select>
        </div>
        <div class="row">
          <div class="col-10">
          </div>
          <!-- /.col -->
          <div class="col-2">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
  </div>
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
</body>
</html>
