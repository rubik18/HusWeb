<?php 
// kết nối
  require'../db/connect.php';
// Chuỗi kết nối
  $id = (int)$_GET['id'];
  $sql = "SELECT * FROM topic_project,type_topic_project WHERE topic_project.id= {$id} AND topic_project.id_type = type_topic_project.id";
  $conn->set_charset("utf8");
  $result = mysqli_query($conn, $sql); 
  if (!$result) {
    die('error'. mysqli_error($conn));
  }
  $row = mysqli_fetch_array($result);
   session_start();
// var_dump($_SESSION['user']);die();
if (!isset($_SESSION['user'])) {
  header("Location:/php-intership-team/admin/SourceFile/login/login.php");
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Editors</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Text Editors</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/DAPM/php-intership-team/admin/SourceFile/home.php">Home</a></li>
              <li class="breadcrumb-item active">Text Editors</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Update Tag
              </h3>
              <!-- tools box -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fas fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            
            <div class="card-body pad">
              <div class="mb-3">
                <form role="form" action="update-project.php?id= <?php echo $row['id'] ?>" method = "post">
                  <!-- Tag -->
                  <div class="form-group">
                    <label>id_project</label>
                    <input type="text" name = "id_project" class="form-control" value="<?php echo $row['id_project'] ?>">
                  </div>
                  <!-- name -->
                  <div class="form-group">
                    <label>Name</label>
                    <textarea class="form-control" rows="3" name="name"><?php echo $row['name'] ?></textarea>
                  </div>
                  <div class="form-group">
                    <label>Leader</label>
                    <input type="text" name = "leader" class="form-control" value="<?php echo $row['lead_researcher'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Workplace</label>
                    <input type="text" name = "workplace" class="form-control" value="<?php echo $row['workplace'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Approval_date</label>
                    <input type="text" name = "approval_date" class="form-control" value="<?php echo $row['approval_date'] ?> ">
                  </div>
                   <div class="form-group">
                    <label>acceptance_date</label>
                    <input type="text" name = "acceptance_date" class="form-control" value="<?php echo $row['acceptance_date'] ?> ">
                  </div>
                  <!-- php -->
                    <?php 
                      $sql1 = "SELECT * from type_topic_project";
                      $result1 = mysqli_query($conn,$sql1);
                    ?>
                 <!-- Type -->
                  <div class="form-group">
                    <label>Type</label>
                    <select class="form-control select2" name="type" style="width: 100%;">
                      <option selected="selected" value="<?php echo $row['id'] ?>"><?php echo $row['name_type'] ?></option>
                      <?php 
                        if (mysqli_num_rows($result1) > 0){
                          while ($row1 = mysqli_fetch_assoc($result1)) {                 
                      ?>
                        <option  value = <?php echo $row1['id']?>> <?php echo $row1['name_type']?></option>
                      <?php  
                          }
                        }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>result</label>
                    <input type="text" name = "result" class="form-control" value="<?php echo $row['result'] ?> ">
                  </div>
                  <!-- Submit -->
                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  </div>         
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
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
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
</body>
</html>
