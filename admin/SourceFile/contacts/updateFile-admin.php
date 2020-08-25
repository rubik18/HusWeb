<?php 
// kết nối
  require'../db/connect.php';
// Chuỗi kết nối
  $id = (int)$_GET['id'];
  $sql = "SELECT * FROM `user` WHERE user.id= {$id} AND `deleted_at` is NULL";
  $conn->set_charset("utf8");
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  
  if (!$result) {
    die('error'. mysqli_error($conn));
  }
  // echo "<pre>";
  // var_dump($row); die(); 
  // echo "</pre>";
  session_start();
// var_dump($_SESSION['user']);die();
if (!isset($_SESSION['admin'])) {
  header("Location: /php-intership-team/admin/SourceFile/login/login.php");
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Update admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php include '../themepart/top-menu.php' ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include '../themepart/sidebar.php' ?>

  <!-- Content Wrapper. Contains page content -->
  
  <div class="content-wrapper">
  <div class="" style="padding: 1.25rem; ">

  <div class="card">
    <div class="" style="padding : 10px;">
     <div class="register-logo" style="margin-bottom: 5px !important;">
        <b>Admin</b>LTE</a>
      </div>
      <p class="login-box-msg" style="text-align: center; font-size: 15px;">Update a admin</p>

      <form action="update-admin.php?id=<?php echo $row['id']?>" method="post" enctype="multipart/form-data">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name = "full_name" value="<?php echo $row['full_name'] ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name = "user_name" value="<?php echo $row['user_name'] ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name = "password" value="<?php echo $row['password'] ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name = "repassword" value="<?php echo $row['password'] ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
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
        <?php 
          if (@$_GET['exited'] == true) {
        ?>
        <div class="input-group mb-3">
          <div class= "alert-light text-danger"><?php echo $_GET['exited'] ?></div>
        </div>
        <?php      
          }
        ?>
             <div class="form-group">
                  <label for="exampleInputFile">Avatar</label>
                  <div>
                    Chọn file để upload:
                    <input type="file" name="fileupload" id="fileupload" accept="image/*">
                    <img src="<?php echo $row['avatar'] ?>" style ="width: 100px; height: 100px" >
                    <br>URL :
                    <input type="text" name = "URL" class="form-control" value="<?php echo $row['avatar'] ?>" style="border-right: 1.5px solid #dee2e6 !important;">
                  </div>
                </div>
          

        
        <div><label>Lever</label></div>
        <div class="input-group mb-3">
          <select class="form-control " name = "type" style="width: 100%; border-right: 1.5px solid #dee2e6 !important;">
            <option selected="selected" value ="1">1</option>
            <option selected="selected" value ="2">2</option>
            <option selected="selected" value ="3">3</option>
          </select>
        </div>
        <div class="row">
          <div class="col-10">
          </div>
          <!-- /.col -->
          <div class="col-2">
            <button type="submit" class="btn btn-primary btn-block">Update</button>
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

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>

<!-- Select2 -->
<script src="../plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
