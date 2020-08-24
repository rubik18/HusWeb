<?php 
  
  if (!isset($_SESSION['user'])) {
  header("Location:login/login.php");
}
  $name = $_SESSION['user'];
  $conn->set_charset("utf8");
  $s =  "SELECT * FROM user WHERE user_name = '$name'";
  $r = mysqli_query($conn,$s);
  $old = mysqli_fetch_assoc($r);
   // var_dump($row);die(); 
 ?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/php-intership-team/admin/SourceFile/home.php" class="brand-link">
      <img src="/php-intership-team/admin/SourceFile/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminHUS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo $old['avatar'] ?>" class="img-circle elevation-2" alt="User Image" style ="width:33.6px; height:33.6px " >
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $old['user_name'] ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- tin tức -->
          <li class="nav-item has-treeview">
            <a href="/php-intership-team/admin/SourceFile/table-master.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tin tức
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/php-intership-team/admin/SourceFile/table-master.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataBase</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/php-intership-team/admin/SourceFile/table-tintuc.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tin tức</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/php-intership-team/admin/SourceFile/table-sukien.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sự kiện</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/php-intership-team/admin/SourceFile/table-thongbao.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thông báo</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- tag -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tag
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/php-intership-team/admin/SourceFile/tag/table-tag.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TagTable</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="/php-intership-team/admin/SourceFile/tag/form-tag.php" class="nav-link">
                  <i class="nav-icon fas fa-plus-circle"></i>
                  <p>
                  Thêm Tag
                  </p>
                  </a>
              </li>
            </ul>
          </li>
          <!-- đề tài dự án -->
          <li class="nav-item has-treeview">
            <a href="/php-intership-team/admin/SourceFile/project_research/table-project.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Đề tài dự án
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/php-intership-team/admin/SourceFile/project_research/table-project.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ProjectTable</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="/php-intership-team/admin/SourceFile/project_research/form-project.php" class="nav-link">
                  <i class="nav-icon fas fa-plus-circle"></i>
                  <p>
                  Thêm đề tài
                  </p>
                  </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="/php-intership-team/admin/SourceFile/form-test.php?click=a" class="nav-link">
              <i class="nav-icon fas fa-plus-circle"></i>
              <p>
                Thêm bài viết
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="/DAPM/php-intership-team/admin/SourceFile/updateFile.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Update bài viết
              </p>
            </a>
          </li> -->
          <li class="nav-header">SETTING</li>
          <li class="nav-item">
            <a href="/php-intership-team/admin/SourceFile/login/register.php" class="nav-link">
              <i class="fas fa-user-circle nav-icon"></i>
              <p>Tạo admin</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/php-intership-team/admin/SourceFile/recover-password.php" class="nav-link">
              <i class="fas fa-cog nav-icon"></i>
              <p>Change Password</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/php-intership-team/admin/SourceFile/login/logout.php" class="nav-link">
              <i class="fas fa-sign-out-alt nav-icon"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
