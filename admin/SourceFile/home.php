<?php 
// Kết nối
require'db/connect.php';
$conn->set_charset("utf8");
//chuỗi kết nối
session_start();
// var_dump(empty($_SESSION['admin']));die();
if (empty($_SESSION['admin'])) {
  header("Location:login/login.php");
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | DataTables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php include './themepart/top-menu.php' ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include './themepart/sidebar.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Home</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item active">Home</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <h5 class="mb-2 mt-4">Small Box</h5>
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- Tin tức -->
            <?php 
              $sql = "SELECT COUNT(new.id) FROM category, new WHERE new.id_category = category.id AND category.parent_id = 1  AND new.deleted_at is NULL";
              $result = mysqli_query($conn, $sql);
              $row = mysqli_fetch_row($result);
              // $sql1 ="SELECT count(id) FROM category, new WHERE new.id_category = category.id AND category.parent_id = 1  AND new.deleted_at is NULL";
              // $result1 = mysqli_query($conn, $sql1);
              // $row1 = mysqli_fetch_row($result1);
              // $count = $row[0] + $row1[0];
              // var_dump($count);die();
            ?>
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $row[0];  ?></h3>

                <p>Tin tức</p>
              </div>
              <div class="icon">
                <i class="fas fa-newspaper"></i>
              </div>
              <a href="table-tintuc.php" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <?php 
              $sql = "SELECT COUNT(id) FROM new WHERE new.id_category = 2 AND  new.deleted_at is NULL ";
              $result = mysqli_query($conn, $sql);
              $row = mysqli_fetch_row($result);
            ?>
            <!-- sự kiện -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $row[0]; ?></h3>

                <p>Sự kiện</p>
              </div>
              <div class="icon">
                <i class="fas fa-glass-cheers"></i>
              </div>
              <a href="table-sukien.php" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- Thông báo -->
            <?php 
              $sql = "SELECT COUNT(id) FROM new WHERE new.id_category = 3 AND  new.deleted_at is NULL ";
              $result = mysqli_query($conn, $sql);
              $row = mysqli_fetch_row($result);
            ?>
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $row[0]; ?></h3>

                <p>Thông báo</p>
              </div>
              <div class="icon">
                <i class="far fa-flag"></i>
              </div>
              <a href="table-thongbao.php" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>5</h3>

                <p>Contact</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <a href="\php-intership-team\admin\SourceFile\contacts\contacts-table.php" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
