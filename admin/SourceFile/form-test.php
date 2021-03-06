<?php 
// kết nối
  require'db/connect.php';
  $conn->set_charset("utf8");
// Chuỗi kết nối
  $sql = "SELECT * FROM tag WHERE tag.deleted_at is NULL";
   $result = mysqli_query($conn, $sql); 
  if (!$result) {
    die('error'. mysqli_error($conn));
  }
  $sql1 = "SELECT * FROM category WHERE category.deleted_at is NULL";
  $result1 = mysqli_query($conn, $sql1);
  if (!$result1) {
    die('error'. mysqli_error($conn));
  }
  session_start();
// var_dump($_SESSION['user']);die();
if (!isset($_SESSION['admin'])) {
  header("Location:login/login.php");
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
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  
  
</head>
<body class="hold-transition sidebar-mini">
  <?php 
    if (@$_GET['click'] == true) {
      unset($_SESSION['title']);
      unset($_SESSION['content']);
      unset($_SESSION['description']);
      unset($_SESSION['avatar']);
      unset($_SESSION['date_time']);
      unset($_SESSION['location']);
      unset($_SESSION['type']);
    }
  ?>
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
            <h1>Text Editors</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
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
                Bài viết mới
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
                <form role="form" action="add.php" method = "post" enctype="multipart/form-data">
                  <!-- Tit -->
                  <div class="form-group">
                    <label>Title <div class= "text-danger" style="display: inline-block;">*</div></label>
                    <input type="text" name = "title" class="form-control" placeholder="Enter ..." value="<?php if (isset($_SESSION['title'])) {echo $_SESSION['title'];} ?>">
                  </div>
                  <?php 
                    if (@$_GET['empty'] == true) {
                     if (empty($_SESSION['title'])) {
                  ?>
                  <div class="input-group">
                    <div class= " text-danger">Please fill in the blanks</div>
                  </div>
                  <?php      
                      }
                    }
                  ?>
                  <!-- Type -->
                  <div class="form-group">
                    <label>Type</label>
                    <select class="form-control select2" name = "type" id = "option"style="width: 100%;">
                      <?php 
                      if (mysqli_num_rows($result1) > 0){
                        while ($row1 = mysqli_fetch_assoc($result1)) {                 
                      ?>
                       <!-- selected="selected" -->
                        <option <?php if (isset($_SESSION['type']) && $_SESSION['type'] == $row1['id']) echo "selected=\"selected\" "; ?> value = <?php echo $row1['id']?>> <?php echo $row1['name']?></option>
                      <?php  
                        }
                      }
                       ?>
                    </select>
                  </div>
                  <!-- avatar -->
                <div class="form-group">
                  <label for="exampleInputFile">Avatar<div class= "text-danger" style="display: inline-block;">*</div></label>
                  <div>
                    Chọn file để upload:
                    <input type="file" name="fileupload" id="fileupload" accept="image/*" value="<?php if (isset($_SESSION['avatar'])) {echo $_SESSION['avatar'];} ?>" ><br>
                    URL:
                    <input type="text" name = "URL" class="form-control" placeholder="Enter ..." value="<?php if (isset($_SESSION['avatar'])) {echo $_SESSION['avatar'];} ?>">
                  </div>
                </div>
                <?php 
                    if (@$_GET['empty'] == true) {
                     if (empty($_SESSION['avatar'])) {
                  ?>
                  <div class="input-group">
                    <div class= "alert-light text-danger">Please fill in the blanks</div>
                  </div>
                  <?php      
                      }
                    }
                  ?>
                  <!-- Nội dung -->
                  <!-- Date and time range -->
                <div class="form-group">
                  <label>Date and time range:</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-clock"></i></span>
                    </div>
                    <input type="text" class="form-control float-right" name="date_time" id="reservationtime" value="<?php if (isset($_SESSION['date_time'])) {echo $_SESSION['date_time'];} ?>">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- loction -->
                <div class="form-group">
                    <label>location</label>
                    <input type="text" name = "location" class="form-control" id = "location" placeholder="Enter ..." value="<?php if (isset($_SESSION['location'])) {echo $_SESSION['location'];} ?>">
                  </div>
                  <!-- tag -->
                  <div class="form-group">
                    <div><label>Tag</label></div>
                    <?php 
                      if (mysqli_num_rows($result) > 0){
                        while ($row = mysqli_fetch_assoc($result)) {                    
                    ?>
                      <div class="form-check"  style="display: inline-block;">
                        <input class="form-check-input" name ="tag[]" type="checkbox" value = <?php echo $row['id']?>>
                        <label class="form-check-label" ><?php echo $row['tag'] ?></label>
                      </div>
                    <?php  
                        }
                      }
                    ?>
                  </div>
                 <!-- mô tả -->
                  <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="3" name = "description" placeholder="Enter ..." ><?php if (isset($_SESSION['description'])) {echo $_SESSION['description'];} ?></textarea>
                  </div>
                  <label for="exampleInputFile">Content<div class= "text-danger" style="display: inline-block;">*</div></label>
                  <textarea class="textarea" name="content" placeholder="Place some text here"
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php if (isset($_SESSION['description'])) {echo $_SESSION['description'];} ?></textarea>
                  <?php 
                    if (@$_GET['empty'] == true) {
                     if (empty($_SESSION['content'])) {
                  ?>
                  <div class="input-group">
                    <div class= "alert-light text-danger">Please fill in the blanks</div>
                  </div>
                  <?php      
                      }
                    }
                  ?>
                  <div class="form-group">
                    <div class= "text-danger" style="display: inline-block;">*</div>là bắt buộc điền
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

<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

<script type="text/javascript">
  $(document).ready(function () {
  bsCustomFileInput.init();
});
  $(function () {
    // Summernote
    $('.textarea').summernote()
  });
 //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    });
    $(document).ready(function(){
    $('#reservationtime').prop("disabled", true);
    $('#option').click(function(){
            if($(this).val() == '2'){
                $('#reservationtime').prop("disabled", false);
            }
            else{
                $('#reservationtime').prop("disabled", true);
            }
        });
    });
    $(document).ready(function(){
    $('#location').prop("disabled", true);
    $('#option').click(function(){
            if($(this).val() == '2'){
                $('#location').prop("disabled", false);
            }
            else{
                $('#location').prop("disabled", true);
            }
        });
    });
</script>
</script>
</body>
</html>
