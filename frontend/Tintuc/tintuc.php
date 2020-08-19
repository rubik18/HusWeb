<?php 
// kết nối
    if( isset($_GET['page']) ){
        $page = $_GET['page'];
    }else {
        $page = 1;
    }
    $ipage = ($page-1) * 9;
  require'connectSQL.php';
// Chuỗi kết nối
  $sql = "SELECT `new`.*,`category`.`name` FROM `new`, `category` WHERE new.id_category = category.id AND category.id NOT IN ('3') AND new.deleted_at is NULL ORDER BY new.created_at DESC LIMIT $ipage,9 ";
  $conn->set_charset("utf8");
  $result = mysqli_query($conn, $sql); 
  if (!$result) {
    die('error'. mysqli_error($conn));
  }

  $link = array("noi-dung/nd-hoat-dong-khoa-hoc.php",
                "noi-dung/nd-su-kien.php",
                "noi-dung/nd-thong-bao.php" ,
                "noi-dung/nd-dang-va-cac-doan-the.php" ,
                "noi-dung/nd-dao-tao-tuyen-sinh.php" ,   
                "noi-dung/nd-hoat-dong-khoa-hoc.php" ,
                "noi-dung/nd-tin-tuc-chung.php" , ); 
 ?>
        <title>Tin tức</title>
        <!---------start header------------>
        <?php include "../header.html" ?>
        <!---end header------->
        <link rel="stylesheet" type="text/css" href="../../css/canbo_tham.css">
		<div class="main-content-wrapper" >
			<div class="container" >
                 <!--------start thanh muc luc------------------->
				<div class="breadcrumb" style="height: 45px !important; overflow: hidden!important; ">
					<div class="row" >
						<div class="col-12">
							  <nav><ol class="breadcrumb" style="padding-top: 0 !important"><li class="breadcrumb-item active" aria-current="page"><a href="#" class="item ">Tin tức</a></li></ol></nav>
							</div></div>
				</div><!----end thanh muc luc-------->
                <!--------start body tin tuc--------->
				<div class="world-latest-articles">
                <div class="row">
                    
                    <div class="col-12 col-lg-12 pdr-0">
                        <div class="single-blog-content mb-50">
                            <div id="dnn_ContentPane">
                            	<div class="DnnModule DnnModule-Tintc-HUSHinthtrangtin DnnModule-10929">
                            		<a name="10929"></a>
                            		<div id="dnn_ctr10929_ContentPane">
                            			<!-- Start_Module_10929 -->
                            			<div id="dnn_ctr10929_ModuleContent">
	
											<div class="row" style="margin: 0;">
                                                <!------start col-9 left----------------------->
            <div class="col-12 col-lg-9 pdr-0">
                <div class="row">
                <!-----------------box-1---------------------> 
                <?php        
                    if(mysqli_num_rows($result)>0 ){
                        $i = 0;
                        while($row = mysqli_fetch_assoc($result) ){  
                        $id = $row['id'];   
                ?>                                     
                <div class="col-12 col-md-6 col-lg-4 magazine-item" style="padding-top: 24px;padding-bottom: 24px !important;">
                        <div class="magazine-item-media">
                                        <span class="media-mask"></span>
                                        <div class="item-image">
                                            <a href="
                                            <?php 
                                                switch ($row['id_category']) {
                                                    case '1':
                                                        echo $link[6] ."?id=" . $id;
                                                        break;
                                                    case '2':
                                                        echo $link[1] ."?id=" . $id;
                                                        break;
                                                    case '3':
                                                        echo $link[2] ."?id=" . $id;
                                                        break;
                                                    case '5':
                                                        echo $link[3] ."?id=" . $id;
                                                        break;
                                                    case '6':
                                                        echo $link[4] ."?id=" . $id;
                                                        break;
                                                    case '7':
                                                        echo $link[5] ."?id=" . $id;
                                                        break; 
                                                    case '8':
                                                        echo $link[6] ."?id=" . $id;
                                                        break;
                                                }
                                            ?>
                                            " class="content">
                                                <span itemprop="image" itemscope="" itemtype="">
                                                    <img src="<?php echo $row['avatar']; ?>"  alt="<?php echo substr($row['title'],0,150); ?>" style="width: 260 ; height: 170;">
                                                </span>
                                            </a>
                                        </div>
                        </div>
                        <div class="magazine-item-main">
            			     <p style="padding: 7px 0px;margin: 0px;color: #8d8d8d!important;">
                                <a href="
                                    <?php 
                                        switch ($row['id_category']) {
                                            case '1':
                                                echo $link[6] ."?id=" . $id;
                                                break;
                                            case '2':
                                                echo $link[1] ."?id=" . $id;
                                                break;
                                            case '3':
                                                echo $link[2] ."?id=" . $id;
                                                break;
                                            case '5':
                                                echo $link[3] ."?id=" . $id;
                                                break;
                                            case '6':
                                                echo $link[4] ."?id=" . $id;
                                                break;
                                            case '7':
                                                echo $link[5] ."?id=" . $id;
                                                break; 
                                            case '8':
                                                echo $link[6] ."?id=" . $id;
                                                break; 
                                            
                                        }
                                    ?>
                                " class="item ">
                                    <?php echo  $row['name'] . "<br>";?>
                                </a></p>  
                            <div class="article-title">
                                <h3 itemprop="name">
                                    <a href="
                                    <?php 
                                        switch ($row['id_category']) {
                                            case '1':
                                                echo $link[6] ."?id=" . $id;
                                                break;
                                            case '2':
                                                echo $link[1] ."?id=" . $id;
                                                break;
                                            case '3':
                                                echo $link[2] ."?id=" . $id;
                                                break;
                                            case '5':
                                                echo $link[3] ."?id=" . $id;
                                                break;
                                            case '6':
                                                echo $link[4] ."?id=" . $id;
                                                break;
                                            case '7':
                                                echo $link[5] ."?id=" . $id;
                                                break; 
                                            case '8':
                                                echo $link[6] ."?id=" . $id;
                                                break; 
                                            
                                        }
                                    ?>
                                    "class="content" style="font-size: 15px">
                                        <?php 
                                            $string=$row['title'];
                                            $array=explode(' ' ,$string);
                                            for($x=0; $x<21 && $x< count($array); $x++){
                                                echo $array[$x] ." ";
                                            }
                                           
                                          ?>
                                    </a>
                                </h3>
                            </div>	
                            <aside class="article-aside clearfix">
                                <dl class="article-info muted">
                                    <dd class="published hasTooltip" title="Được đăng: ">
                                        <i class="fa fa-clock-o"></i>
                                        
                                            <?php 
                                                $time = strtotime($row['created_at']);
                                                echo  date("H:i d/m/Y",$time) . "<br>"; ?>
                                        
                                    </dd>
                                </dl>
                            </aside>
                            <div class="magazine-item-ct">
                                <p style="text-align: justify;">
                                    <?php echo  $row['description'] . "<br>";?>
                                </p>
                            </div>
                        </div>
                </div>
            <?php  $i ++;}} ?>
                
                </div><!------------row ----------------->
                <!-----start list-page----------------------->
                    <div class="list-page">
                        <div>
                            <ul class="pagination pagination-split mb-0">
                                <?php 
                                    $sqlist = "SELECT COUNT(*) FROM `new`, `category` WHERE new.id_category = category.id AND new.deleted_at is NULL ORDER BY new.created_at DESC";
                                    $conn->set_charset("utf8");
                                    $resultlist = mysqli_query($conn, $sqlist);

                                    if (!$resultlist) {
                                        die('error'. mysqli_error($conn));
                                    }
                                    $count = 0;
                                    if(mysqli_num_rows($resultlist)>0 ){
                                        while($row = mysqli_fetch_assoc($resultlist) ){  
                                           $count = floor($row['COUNT(*)'] /9) +1;
                                        }
                                    }
                                    $list = floor($count/4);
                                if($page <4){
                                    for ($x = 1; $x <= 3 && $x<=$count; $x++) {
                                      if( $x==$page ){
                                    
                                 ?>
                                <li>
                                    <a id="dnn_ctr10929_newsviewer_ctl00_vbPaging_btnPg1" class="active" href="tintuc.php?page=<?php echo $x ?>"><?php echo $x; ?></a></li>

                                <?php }elseif($x!=$page){ ?>
                                <li>
                                    <a id="dnn_ctr10929_newsviewer_ctl00_vbPaging_btnPg1"  href="tintuc.php?page=<?php echo $x ?>"><?php echo $x; ?></a></li>
                                
                                
                                <?php }} ?>
                               
                                    
                                <li>
                                    <a id="dnn_ctr10929_newsviewer_ctl00_vbPaging_btncuoi" style="width: 40px" class="inactive pagelast" href="tintuc.php?page=<?php echo $count ?>">Last</a></li>
                                
                                <li>
                                    <a id="dnn_ctr10929_newsviewer_ctl00_vbPaging_btnNext" class="inactive" href="tintuc.php?page=<?php if($count>4){
                                        echo "4";
                                        }else echo $count;
                                     ?>" style="padding-top: 10px"><i class="fa fa-angle-double-right"></i></a></li>
                                <?php } 
                                if($page >= 4&& $page <7){ ?>
                                    <li>
                                    <a id="dnn_ctr10929_newsviewer_ctl00_vbPaging_btnNext" class="inactive" href="tintuc.php?page=1" style="padding-top: 10px!important"><i class="fa fa-angle-double-left"></i></a></li>
                                    <?php for ($x = 4; $x < 7; $x++) {

                                      if( $x==$page ){
                                    
                                 ?>
                                <li>
                                    <a id="dnn_ctr10929_newsviewer_ctl00_vbPaging_btnPg1" class="active" href="tintuc.php?page=<?php echo $x ?>"><?php echo $x; ?></a></li>

                                <?php }elseif($x!=$page){ ?>
                                <li>
                                    <a id="dnn_ctr10929_newsviewer_ctl00_vbPaging_btnPg1"  href="tintuc.php?page=<?php echo $x ?>"><?php echo $x; ?></a></li>
                                
                                
                                <?php }} ?>
                                <li>
                                    <a id="dnn_ctr10929_newsviewer_ctl00_vbPaging_btncuoi"style="width: 40px" class="inactive pagelast" href="tintuc.php?page=1">First</a></li>
                                    
                                <li>
                                    <a id="dnn_ctr10929_newsviewer_ctl00_vbPaging_btncuoi" style="width: 40px" class="inactive pagelast" href="tintuc.php?page=<?php echo $count ?>">Last</a></li>
                                
                                <li>
                                    <a id="dnn_ctr10929_newsviewer_ctl00_vbPaging_btnNext"  class="inactive" href="tintuc.php?page=7" style="padding-top: 10px"><i class="fa fa-angle-double-right"></i></a></li>
                                <?php }
                                if($page >= 7&& $page <10){ ?>
                                    <li>
                                    <a id="dnn_ctr10929_newsviewer_ctl00_vbPaging_btnNext" class="inactive" href="tintuc.php?page=4" style="padding-top: 10px"><i class="fa fa-angle-double-left"></i></a></li>
                                    <?php for ($x = 7; $x < 10; $x++) {

                                      if( $x==$page ){
                                    
                                 ?>
                                <li>
                                    <a id="dnn_ctr10929_newsviewer_ctl00_vbPaging_btnPg1" class="active" href="tintuc.php?page=<?php echo $x ?>"><?php echo $x; ?></a></li>

                                <?php }elseif($x!=$page){ ?>
                                <li>
                                    <a id="dnn_ctr10929_newsviewer_ctl00_vbPaging_btnPg1"  href="tintuc.php?page=<?php echo $x ?>"><?php echo $x; ?></a></li>
                                
                                
                                <?php }} ?>
                               <li>
                                    <a id="dnn_ctr10929_newsviewer_ctl00_vbPaging_btncuoi"style="width: 40px" class="inactive pagelast" href="tintuc.php?page=1">First</a></li>
                                    
                                <li>
                                    <a id="dnn_ctr10929_newsviewer_ctl00_vbPaging_btncuoi" style="width: 40px" class="inactive pagelast" href="tintuc.php?page=<?php echo $count ?>">Last</a></li>
                                
                                <li>
                                    <a id="dnn_ctr10929_newsviewer_ctl00_vbPaging_btnNext" class="inactive" href="tintuc.php?page=10" style="padding-top: 10px"><i class="fa fa-angle-double-right"></i></a></li>
                                <?php }
                                 ?>
                                
                            </ul>
                        </div>

                    </div><!----------end list-page ----------------------------->
                </div><!---------end col-9 left------------------->
                <!-------start col-3-right-------------->
                
                <div class="col-12 col-lg-3" >
                   <div class="bordershadown borderorange mb-15 pd-10" style="float: left">
                        
                        <div class="content">
                            <div id="jquery-accordion-menu" class="jquery-accordion-menu">
                                <div class="jquery-accordion-menu-header">Tin tức </div>
                                <ul>
                                    <li class="active"><a href="tinmoinhat.php">Tin mới nhất</a></li>
                                    <li class=""><a href="sukien.php">Sự kiện</a></li>
                                    <li class=""><a href="thongbao.php">Thông báo</a></li>
                                    <li class=""><a href="tintucchung.php">Tin tức chung</a></li>
                                    <li class=""><a href="dangvadoan.php">Đảng và các Đoàn thể</a></li>
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
                                <a href="#" target="_blank" alt="Chương trình đào tạo đặc biệt"><img class="img-responsive" src="/php-intership-team/img/tin-tuc/chuongtrinhdaotaotainang.jpg" alt="Chương trình đào tạo đặc biệt" width="245" height="88"></a>
                            </li>
                        
                            <li style="display: block; padding-bottom: 10px;">
                                <a href="" target="_blank" alt="Chương trình đào tạo Tài năng"><img class="img-responsive" src="/php-intership-team/img/tin-tuc/dao-tao-chuan-quocte.jpg" alt="Chương trình đào tạo Tài năng" width="245" height="88"></a>
                            </li>
                        
                            <li style="display: block; padding-bottom: 10px;">
                                <a href="" target="_blank" alt="Chương trình đào tạo Tiên tiến"><img class="img-responsive" src="/php-intership-team/img/tin-tuc/daotaotientien.jpg" alt="Chương trình đào tạo Tiên tiến" width="245" height="88"></a>
                            </li>
                        
                            <li style="display: block; padding-bottom: 10px;">
                                <a href="" target="_blank" alt="Chương trình đào tạo liên kết"><img class="img-responsive" src="/php-intership-team/img/tin-tuc/chuongtrinhdaotaochatluongcao.jpg" alt="Chương trình đào tạo liên kết" width="245" height="88"></a>
                            </li>
                        
                            <li style="display: block; padding-bottom: 10px;">
                                <a href="" target="_blank" alt="Chương trình đào tạo chất lượng cao theo thông tư 23 của Bộ"><img class="img-responsive" src="/php-intership-team/img/tin-tuc/daotaotheothongtubo.jpg" alt="Chương trình đào tạo chất lượng cao theo thông tư 23 của Bộ" width="245" height="88"></a>
                            </li>
                        
                            <li style="display: block; padding-bottom: 10px;">
                                <a href="" target="_blank" alt="Học cùng lúc 2 chương trình đào tạo"><img class="img-responsive" src="/php-intership-team/img/tin-tuc/hoc2truong.jpg" alt="Học cùng lúc 2 chương trình đào tạo" width="245" height="88"></a>
                            </li>
                        </ul>
                    </div>

                </div><!--------------end col-3-right--------------------------------->
            		</div>
            	</div>
            </div>
            </div>
        </div></div></div></div></div></div></div>


            
            
        
        <!---start footer----->
        <?php include "../footer.html" ?>
        <!----end footer------->
    

    
    




