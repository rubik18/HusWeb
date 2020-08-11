<?php 
// kết nối
  require'SourceFile/db/connect.php';
// Chuỗi kết nối
  $sql = "SELECT * FROM `user`";
  $conn->set_charset("utf8");
  $result = mysqli_query($conn, $sql); 
  if (!$result) {
    die('error'. mysqli_error($conn));
  }
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="SourceFile/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="SourceFile/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="SourceFile/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Admin</b>HUS</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <div class="input-group mb-3">
           <img src="/php-intership-team/admin/SourceFile/myimg/HusLogoFront.png" style="width:100%">
      </div>
      <p class="login-box-msg">Sign in to start your session</p>
        <div class="input-group mb-3">
           <a type="button" href="/php-intership-team/admin/SourceFile/login/login.php" class="btn btn-block btn-primary btn-flat" style="color: white">Login</a>
        </div>
        
      <!-- /.social-auth-links -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="SourceFile/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="SourceFile/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="SourceFile/dist/js/adminlte.min.js"></script>

</body>
</html>
