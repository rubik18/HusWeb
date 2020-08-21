<?php 
// kết nối
  require'../db/connect.php';
// Chuỗi kết nối
   session_start();
// var_dump($_SESSION['user']);die();
if (!isset($_SESSION['user'])) {
 header("Location: /php-intership-team/admin/SourceFile/login/login.php");
}
  $sql = "SELECT * FROM `user` WHERE user.deleted_at is NULL";
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
  <title>AdminLTE 3 | Contacts</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php include '../themepart/top-menu.php'  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 <?php include '../themepart/sidebar.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contacts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Contacts</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
  
      <div class="card card-solid">

        <div class="card-body pb-0">
          <div class="row d-flex align-items-stretch">
           <!--  -->
              <?php 
                if (mysqli_num_rows($result) > 0){
                  $i = 1;
                while ($row = mysqli_fetch_assoc($result)) {                       
              ?>
              <!--  -->           
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
             
              <div class="card bg-light">
                <div class="card-body pt-0"> <!-- thẻ trắng -->
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b><?php echo $row['full_name'] ?></b></h2>
 
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class=""><span class="fa-li"><i class="fas fa-user"></i></span><?php echo $row['user_name'] ?></li>
                        <li class=""><span class="fa-li"><i class="fas fa-arrow-up"></i></span><?php echo $row['level'] ?></li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="<?php echo $row['avatar'] ?>" alt="" class="img-circle" style ="width : 100px; height : 100px;">
                    </div>
                  </div>
                </div>

                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> View Profile
                    </a>

                    <a class="btn btn-secondary btn-sm" href="updateFile-admin.php?id=<?php echo $row['id']?>">
                      <i class="fas fa-pencil-alt">
                      </i>
                        Edit
                    </a>
                                       
                    <a class="btn btn-danger btn-sm" href="delete-admin.php?id=<?php echo $row['id']?>" onclick =" return confirm('Do you want to delete?')">
                      <i class="fas fa-trash">
                      </i>
                      Delete
                    </a>
                  </div>
                </div>
              </div>
             
            </div>
             <?php 
                  $i++;
                  }
                }
              ?>           
          </div>
        </div> <!-- card body -->
        
      </div> <!-- /.card -->

    </section> <!-- /.content -->
  </div>   <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div> <!-- ./wrapper -->


<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
