<?php 
// kết nối
    if( isset($_GET['page']) ){
        $page = $_GET['page'];
    }else {
        $page = 1;
    }
    $ipage = ($page-1) * 5;
  require'connectSQL.php';
// Chuỗi kết nối
  $sql = "SELECT `new`.*,`category`.`name` FROM `new`, `category` WHERE new.id_category = category.id AND category.`name`='Đảng và các Đoàn thể' AND new.deleted_at is NULL ORDER BY new.created_at DESC  LIMIT $ipage,5 ";
  $conn->set_charset("utf8");
  $result = mysqli_query($conn, $sql); 
  if (!$result) {
    die('error'. mysqli_error($conn));
  }

  $sqlist = "SELECT COUNT(*) FROM `new`, `category` WHERE new.id_category = category.id AND category.`name`='Đảng và các Đoàn thể' AND new.deleted_at is NULL ORDER BY new.created_at DESC";
    $conn->set_charset("utf8");
    $resultlist = mysqli_query($conn, $sqlist);
    if (!$resultlist) {
        die('error'. mysqli_error($conn));
    }
 ?>        
        <title>Đảng và các đoàn thể</title>
        <!---------start header------------>
        <?php include "../header.html" ?>
        <!---end header------->
        <link rel="stylesheet" type="text/css" href="../../css/canbo_tham.css">
        <link rel="stylesheet" type="text/css" href="../../css/tictuc_tham.css">
		<div class="main-content-wrapper" >
			<div class="container" >
                 <!--------start thanh muc luc------------------->
				<div class="breadcrumb" style="height: 45px !important; overflow: hidden!important; ">
					<div class="row" >
						<div class="col-12">
							  <nav><ol class="breadcrumb" style="padding-top: 0 !important">
                                <li class="breadcrumb-item active" aria-current="page"><a href="tintuc.php" class="item ">Tin tức</a></li>&nbsp;
                                <img src="/php-intership-team/img/hop-tac-quoc-te/breadcrumb.gif">&nbsp;
                                <li class="breadcrumb-item active" aria-current="page"><a href="" class="item ">Đảng và các đoàn thể</a></li>
                              </ol></nav>
							</div></div>
				</div><!----end thanh muc luc-------->
                <!--------start body tin tuc--------->
				<div class="world-latest-articles">
                <div class="row">
                    
                    
                    <!-------start col-8-left-------------->                               
                    <div class="col-12 col-lg-8">
                            <div class="single-blog-content mb-50">
                                <div id="dnn_ContentPane"><div class="DnnModule DnnModule-Tintc-Hinthtin DnnModule-10550"><a name="10550"></a><div id="dnn_ctr10550_ContentPane"><!-- Start_Module_10550 --><div id="dnn_ctr10550_ModuleContent">
        
                            <div id="list_news">
                                <div class="list-news">
                                    <div class="tab-pane fade show">
                                <?php        
                                            if(mysqli_num_rows($result)>0 ){
                                                $i = 0;
                                                while($row = mysqli_fetch_assoc($result) ){  
                                                $id = $row['id'];   
                                        ?>
                                <div class="single-blog-post post-style-4 d-flex align-items-center">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="<?php 
                                                    if($row['avatar']!=null){
                                                        echo  $row['avatar']; 
                                                    }else echo "/php-intership-team/img/tin-tuc/ahus.jpg" ?>"style="width: 210; height: 180;" alt="<?php echo $row['title']; ?>">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="noi-dung/nd-dang-va-cac-doan-the.php?id=<?php echo $id ?>" class="headline">
                                            <h5><?php echo $row['title']; ?></h5>
                                        </a>
                                        <p><?php 
                                            $string=$row['title'];
                                            $array=explode(' ' ,$string);
                                            for($x=0; $x<21 && $x< count($array); $x++){
                                                echo $array[$x] ." ";
                                            }
                                            echo "...";
                                          ?></p>
                                        <!-- Post Meta -->
                                        <div class="post-meta">
                                            <p><a href="noi-dung/nd-dang-va-cac-doan-the.php?id=<?php echo $id ?>" class="post-date"><?php 
                                                $time = strtotime($row['created_at']);
                                                echo  date(" d/m/Y",$time) ; ?></a></p>
                                        </div>
                                    </div>
                                </div>
                                <?php }} ?>
                                
                                
                            </div>    
                                        
                                </div>
                                <div class="list-page">
                                    
                            <div>
                                <ul class="pagination pagination-split">
                                    <?php 
                                    
                                    $count = 0;
                                    if(mysqli_num_rows($resultlist)>0 ){
                                        while($row = mysqli_fetch_assoc($resultlist) ){  
                                          $count = ceil($row['COUNT(*)'] /5) ;
                                          
                                        }
                                    }
                                   
                                if($page <4 && $page<=$count){
                                    for ($x = 1; $x <= 3 && $x<=$count; $x++) {
                                      if( $x==$page ){
                                    
                                 ?>
                                <li>
                                    <a id="dnn_ctr10929_newsviewer_ctl00_vbPaging_btnPg1" class="active" href="dangvadoan.php?page=<?php echo $x ?>"><?php echo $x; ?></a></li>

                                <?php }elseif($x!=$page){ ?>
                                <li>
                                    <a id="dnn_ctr10929_newsviewer_ctl00_vbPaging_btnPg1"  href="dangvadoan.php?page=<?php echo $x ?>"><?php echo $x; ?></a></li>
                                
                                
                                <?php }} ?>
                               
                                    
                                <li>
                                    <a id="dnn_ctr10929_newsviewer_ctl00_vbPaging_btncuoi" style="width: 40px" class="inactive pagelast" href="dangvadoan.php?page=<?php echo $count ?>">Last</a></li>
                                
                                <li>
                                    <a id="dnn_ctr10929_newsviewer_ctl00_vbPaging_btnNext" class="inactive" href="dangvadoan.php?page=<?php if($count>4){
                                        echo "4";
                                        }else echo $count;
                                     ?>" style="padding-top: 10px !important"><i class="fa fa-angle-double-right"></i></a></li>
                                <?php } 
                                if($page >= 4&& $page <7 && $page<=$count){ ?>
                                    <li>
                                    <a id="dnn_ctr10929_newsviewer_ctl00_vbPaging_btnNext" class="inactive" href="dangvadoan.php?page=1" style="padding-top: 10px!important"><i class="fa fa-angle-double-left"></i></a></li>
                                    <?php for ($x = 4; $x < 7 && $x<=$count; $x++) {

                                      if( $x==$page ){
                                    
                                 ?>
                                <li>
                                    <a id="dnn_ctr10929_newsviewer_ctl00_vbPaging_btnPg1" class="active" href="dangvadoan.php?page=<?php echo $x ?>"><?php echo $x; ?></a></li>

                                <?php }elseif($x!=$page){ ?>
                                <li>
                                    <a id="dnn_ctr10929_newsviewer_ctl00_vbPaging_btnPg1"  href="dangvadoan.php?page=<?php echo $x ?>"><?php echo $x; ?></a></li>
                                
                                
                                <?php }} ?>
                                <li>
                                    <a id="dnn_ctr10929_newsviewer_ctl00_vbPaging_btncuoi"style="width: 40px" class="inactive pagelast" href="dangvadoan.php?page=1">First</a></li>
                                    
                                <li>
                                    <a id="dnn_ctr10929_newsviewer_ctl00_vbPaging_btncuoi" style="width: 40px" class="inactive pagelast" href="dangvadoan.php?page=<?php echo $count ?>">Last</a></li>
                                
                                <li>
                                    <a id="dnn_ctr10929_newsviewer_ctl00_vbPaging_btnNext"  class="inactive" href="dangvadoan.php?page=<?php if($count>7){
                                        echo "7";
                                        }else echo $count;
                                     ?>" style="padding-top: 10px !important"><i class="fa fa-angle-double-right"></i></a></li>
                                <?php }
                                if($page >= 7&& $page <10 && $page<$count){ ?>
                                    <li>
                                    <a id="dnn_ctr10929_newsviewer_ctl00_vbPaging_btnNext" class="inactive" href="dangvadoan.php?page=4" style="padding-top: 10px !important"><i class="fa fa-angle-double-left"></i></a></li>
                                    <?php for ($x = 7; $x < 10; $x++) {

                                      if( $x==$page ){
                                    
                                 ?>
                                <li>
                                    <a id="dnn_ctr10929_newsviewer_ctl00_vbPaging_btnPg1" class="active" href="dangvadoan.php?page=<?php echo $x ?>"><?php echo $x; ?></a></li>

                                <?php }elseif($x!=$page){ ?>
                                <li>
                                    <a id="dnn_ctr10929_newsviewer_ctl00_vbPaging_btnPg1"  href="dangvadoan.php?page=<?php echo $x ?>"><?php echo $x; ?></a></li>
                                
                                
                                <?php }} ?>
                               <li>
                                    <a id="dnn_ctr10929_newsviewer_ctl00_vbPaging_btncuoi"style="width: 40px" class="inactive pagelast" href="dangvadoan.php?page=1">First</a></li>
                                    
                                <li>
                                    <a id="dnn_ctr10929_newsviewer_ctl00_vbPaging_btncuoi" style="width: 40px" class="inactive pagelast" href="dangvadoan.php?page=<?php echo $count ?>">Last</a></li>
                                
                                <li>
                                    <a id="dnn_ctr10929_newsviewer_ctl00_vbPaging_btnNext" class="inactive" href="dangvadoan.php?page=<?php if($count>10){
                                        echo "10";
                                        }else echo $count;
                                     ?>" style="padding-top: 10px !important"><i class="fa fa-angle-double-right"></i></a></li>
                                <?php }
                                if($page>$count){
                                 ?>
                                 <li>
                                    <a id="dnn_ctr10929_newsviewer_ctl00_vbPaging_btncuoi" style="width: 40px" class="inactive pagelast" href="dangvadoan.php?page=<?php echo $count ?>">Last</a></li>
                                
                            <?php } ?>
                                </ul>
                            </div>

                                </div>     
                            </div>

                            </div><!-- End_Module_10550 --></div>
                            </div></div>
                                <!-- Single Blog Post -->
                            </div>
                        </div>
                    <!--------------end col-8 left--------------------------------->
                    <!-------start col-4-right-------------->
                    <div class="col-12 col-lg-4" >
                       <div class="bordershadown borderorange mb-15 pd-10" style="float: left">
                            
                            <div class="content">
                                <div id="jquery-accordion-menu" class="jquery-accordion-menu">
                                    <div class="jquery-accordion-menu-header">Tin tức </div>
                                    <ul>
                                        <li class=""><a href="tinmoinhat.php">Tin mới nhất</a></li>
                                        <li class=""><a href="sukien.php">Sự kiện</a></li>
                                        <li class=""><a href="thongbao.php">Thông báo</a></li>
                                        <li class=""><a href="dangvadoanchung.php">Tin tức chung</a></li>
                                        <li class="active"><a href="">Đảng và các Đoàn thể</a></li>
                                        <li class=""><a href="daotaots.php">Đào tạo - Tuyển sinh</a></li>
                                        <li class=""><a href="hoatdongkh.php">Hoạt động khoa học</a></li>
                                    </ul>
                                    <div class="jquery-accordion-menu-footer"></div>
                                </div>
                            </div>
                        </div>
                        <div class="bordershadown borderorange mb-15 pd-10" style="float: left">
                            <ul class="bannerrighttop" style="padding-left: 0">
                                <li style="display: block; padding-bottom: 10px;">
                                    <a href="http://60nam.hus.vnu.edu.vn/" target="_blank" alt="Website 60 nam"><img class="img-responsive" src="/php-intership-team/img/hop-tac-quoc-te/hus60y.png" alt="Website 60 nam" width="330" height="91"></a>
                                </li>
                                <li style="display: block; padding-bottom: 10px;">
                                    <a href="http://alumni.hus.vnu.edu.vn/" target="_blank" alt="Website cựu sinh viên"><img class="img-responsive" src="/php-intership-team/img/hop-tac-quoc-te/cuu-sinhvien.jpg" alt="Website cựu sinh viên" width="330" height="124"></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!--------------end col-4-right--------------------------------->
            	</div>
            	</div>
            </div>
        </div>

        <!--  -->
        <!---start footer----->
        <?php include "../footer.html" ?>
        <!----end footer------->
    <!-- </div>
</body>
</html> -->
