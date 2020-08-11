<?php 
// kết nối
  require'../db/connect.php';
// Chuỗi kết nối
  $sql = "SELECT * FROM `user`";
  $conn->set_charset("utf8");
  $result = mysqli_query($conn, $sql); 
  if (!$result) {
    die('error'. mysqli_error($conn));
  }
 ?>
<<<<<<< HEAD

=======
>>>>>>> eab4e6f6b1ff04b8d87783a06866345b6540c41a
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
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
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Admin</b>HUS</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
<<<<<<< HEAD

      <form action="#" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email">
=======
      <form action="login_submit.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="user_name" placeholder="Username">
>>>>>>> eab4e6f6b1ff04b8d87783a06866345b6540c41a
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
<<<<<<< HEAD
          <input type="password" class="form-control" placeholder="Password">
=======
          <input type="password" class="form-control" name ="password"placeholder="Password">
>>>>>>> eab4e6f6b1ff04b8d87783a06866345b6540c41a
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
<<<<<<< HEAD
=======
        <?php 
          if (@$_GET['Empty'] == true) {
        ?>
        <div class="input-group mb-3">
          <div class= "alert-light text-danger"><?php echo $_GET['Empty'] ?></div>
        </div>
        <?php      
          }
        ?>
        <!-- incorrect password or username -->
        <?php 
          if (@$_GET['Invalid'] == true) {
        ?>
        <div class="input-group mb-3">
          <div class= "alert-light text-danger"><?php echo $_GET['Invalid'] ?></div>
        </div>
        <?php      
          }
        ?>
>>>>>>> eab4e6f6b1ff04b8d87783a06866345b6540c41a
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
<<<<<<< HEAD
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
=======
            <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
>>>>>>> eab4e6f6b1ff04b8d87783a06866345b6540c41a
          </div>
          <!-- /.col -->
        </div>
      </form>

     
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.php">I forgot my password</a>
      </p>
<<<<<<< HEAD
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
=======
>>>>>>> eab4e6f6b1ff04b8d87783a06866345b6540c41a
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>

</body>
</html>
