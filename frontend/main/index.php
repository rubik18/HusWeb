<title>Trường đại học Khoa Học Tự Nhiên</title>

    <!---start header----->
    <?php include "../header.html" ?>
    <!----end header------->

    <?php 
        require 'connectSQL.php';
        $conn->set_charset("utf8");
        $news = mysqli_query($conn,"SELECT `new`.*,`category`.`name` FROM `new`, `category` WHERE new.id_category = category.id AND new.id_category NOT IN(3) AND new.deleted_at is NULL ORDER BY new.created_at DESC LIMIT 3;");
        $link = array("/php-intership-team/frontend/Tintuc/noi-dung/nd-hoat-dong-khoa-hoc.php",
                "/php-intership-team/frontend/Tintuc/noi-dung/nd-su-kien.php",
                "/php-intership-team/frontend/Tintuc/noi-dung/nd-thong-bao-chung.php" ,
                "/php-intership-team/frontend/Tintuc/noi-dung/nd-dang-va-cac-doan-the.php" ,
                "/php-intership-team/frontend/Tintuc/noi-dung/nd-dao-tao-tuyen-sinh.php" ,   
                "/php-intership-team/frontend/Tintuc/noi-dung/nd-hoat-dong-khoa-hoc.php" ,
                "/php-intership-team/frontend/Tintuc/noi-dung/nd-tin-tuc-chung.php "); 

        $noti = mysqli_query($conn,"SELECT new.* FROM `new`, `category` WHERE new.id_category = category.id AND new.id_category = 3 AND new.deleted_at is NULL ORDER BY new.created_at DESC  LIMIT 10;");

        $event = mysqli_query($conn,"SELECT new.* FROM `new`, `category` WHERE new.id_category = category.id AND new.id_category = 2 AND new.deleted_at is NULL ORDER BY new.created_at DESC  LIMIT 6;");
     ?>

    <div class="hero-area">
        <div class="hero-slides owl-carousel owl-theme owl-loaded">            
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active"><a href="">
                        <img class="d-block w-100" src="/php-intership-team/img/main/tra-cuu-diem-thi-thpt-2020-web-hus.jpg" alt="First slide"></a>
                    </div>
                
                    <div class="carousel-item"><a href="">
                        <img class="d-block w-100" src="/php-intership-team/img/main/slider-chao-mung.jpg" alt="Second slide"></a>
                    </div>
                
                    <div class="carousel-item"><a href="">
                        <img class="d-block w-100" src="/php-intership-team/img/main/slider-tuyen-sinh-dai-hoc-2020-v10.5.jpg" alt="Third slide"></a>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="owl-controls">
                <div class="owl-nav">
                    <div class="owl-prev" style=""><i class="fa fa-angle-left"></i></div>
                    <div class="owl-next" style=""><i class="fa fa-angle-right"></i></div>
                </div>
                <div class="owl-dots" style="display: none;"></div>
            </div>
        </div>           
    </div>

    <div class="hero-post-area">
        <div class="hero-post-slide" style="background: #007dc5; min-height: 60px;">
            <div class="navigation single-slide align-items-center text-center">
                <ul>
                    <li class="post-number">
                        <a href="https://eoffice.vnu.edu.vn/khtn" target="_blank">
                            <img src="/php-intership-team/img/main/eoffice.png" alt="E-Office"> 
                            <span>E-OFFICE</span>
                        </a></li>
                    <li class="post-number">
                        <a href="https://dangky.vnu.edu.vn" target="_blank">
                            <img src="/php-intership-team/img/main/canbo.png" alt="Cổng thông tin cán bộ">
                            <span>CỔNG THÔNG TIN <br>CÁN BỘ</span>
                        </a></li>
                    <li class="post-number">
                        <a href="https://daotao.vnu.edu.vn/" target="_blank">
                            <img src="/php-intership-team/img/main/nguoihoc.png" alt="Cổng thông tin người học">
                            <span>CỔNG THÔNG TIN<br>NGƯỜI HỌC</span>
                        </a></li>
                    <li class="post-number">
                        <a href="http://lic.vnu.edu.vn/" target="_blank">
                            <img src="/php-intership-team/img/main/thuvien.png" alt="Thư viện"> 
                            <span>THƯ VIỆN</span>
                        </a></li>
                    <li class="post-number">
                        <a href="https://www.google.com/a/hus.edu.vn" target="_blank">
                            <img src="/php-intership-team/img/main/email.png" alt="Email"> 
                            <span>EMAIL</span>
                        </a></li>
                    <li class="post-number">
                        <a href="" target="_self">
                            <img src="/php-intership-team/img/main/calendar.png" alt="E-Office"> 
                            <span>LỊCH LÀM VIỆC</span>
                        </a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="main-content-wrapper">
        <div class="container">
            <div class="world-latest-articles">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div>                          
                            <div class="row title">
                                <div class="block-title uppercase">
                                    <h5><a>Tin tức</a></h5>
                                </div>  
                            </div>
                                <?php if(mysqli_num_rows($news) > 0){
                                    $i = 0;
                                    while($row = mysqli_fetch_assoc($news)){ 
                                    $id = $row['id'];     
                                ?>
                                <div class="single-blog-post post-style-4 d-flex align-items-center">
                                    <div class="post-thumbnail">
                                        <a href="<?php 
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
                                                ?>">
                                        <img src="<?php echo $row['avatar'];?>" style="width: 210; height: 139" alt="<?php 
                                                $string = $row['title'];
                                                $arr = explode(' ' ,$string);
                                                for($x = 0; $x < 15 && $x < count($arr); $x ++){
                                                    echo $arr[$x] ." ";
                                                }?>..." >
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <a href="<?php 
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
                                                ?>" class="headline">
                                            <h5><?php 
                                                $string = $row['title'];
                                                $arr = explode(' ' ,$string);
                                                for($x = 0; $x < 15 && $x < count($arr); $x ++){
                                                    echo $arr[$x] ." ";
                                                }
                                            ?>...</h5>
                                        </a>
                                        <p>
                                        <?php 
                                            $string = $row['description'];
                                            $arr = explode(' ' ,$string);
                                            for($x = 0; $x < 28 && $x< count($arr); $x++){
                                                echo $arr[$x] ." ";
                                            }
                                        ?>...</p>
                                        <div class="post-meta">
                                            <p><a href="" class="post-date" style="color: grey">
                                                <?php 
                                                    $time = strtotime($row['created_at']);
                                                    echo date("d/m/Y", $time);
                                                ?>
                                                </a> 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php
                               $i ++; }}
                            ?>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div>
                            <div class="titlethongbao">
                                <h5><a>Thông báo</a></h5>
                            </div>
                            <?php if(mysqli_num_rows($noti) > 0){
                                $i = 0;
                                while($row_noti = mysqli_fetch_assoc($noti)){   
                                $id = $row_noti['id'];   
                            ?>
                            <div class="single-blog-post post-style-tb">
                                <div class="media">
                                    <div class="object">
                                        <span class="day">
                                            <?php 
                                                $time = strtotime($row_noti['created_at']);
                                                echo date("d", $time);
                                            ?>
                                        </span>
                                        <span class="date">
                                            <?php 
                                                $time = strtotime($row_noti['created_at']);
                                                echo date("m/Y", $time);
                                            ?>
                                        </span>
                                    </div>
                                    <div class="body">
                                        <h3><a href="/php-intership-team/frontend/Tintuc/noi-dung/nd-thong-bao.php?id= <?php echo $id ?>">
                                        <?php 
                                            $string = $row_noti['title'];
                                            $arr = explode(' ' ,$string);
                                            for($x = 0; $x < 12 && $x < count($arr); $x ++){
                                                echo $arr[$x] ." ";
                                            }
                                        ?>...</a></h3>
                                    </div>
                                </div>                                
                            </div>
                            <?php
                               $i ++; }}
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-content-wrapper2">
        <div class="homesukien">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="mb-20 pd-10">
                            <div class="title">
                                <div class="block-title uppercase">
                                    <h5><a href="/php-intership-team/frontend/Tintuc/sukien.php">Sự kiện</a></h5>
                                </div>
                            </div>
                            <?php 
                                $arr = [];
                                $arr_title = [];
                                $arr_avatar = [];
                                $arr_date = [];
                                $arr_location = [];
                                if(mysqli_num_rows($event) > 0){
                                    $i = 0;
                                    while($row_event = mysqli_fetch_assoc($event)){ 
                                        $id = $row_event['id'];
                                        $title = $row_event['title'];
                                        $avatar = $row_event['avatar'];
                                        $date = $row_event['start_date'];
                                        $location = $row_event['location'];
                                        $arr[$i] = $id;
                                        $arr_title[$i] = $title;
                                        $arr_avatar[$i] =  $avatar;
                                        $arr_date[$i]= $date;
                                        $arr_location[$i] = $location;
                                        $i ++; 
                                    }          
                                }
                            ?>
                            <div class="sukiencontent">
                                <div class="row">
                                    <div class="col-12 col-lg-6 pdr-10">
                                        <div class="col-12 col-lg-12 mrb-20 pd-0">
                                            <a href="/php-intership-team/frontend/Tintuc/noi-dung/nd-su-kien.php?id= <?php echo $arr[0]?>"><img id="dnn_View_ltr1img" src="/php-intership-team/admin/SourceFile/<?php echo $arr_avatar[0]?>" style="width: 565; height: 400;">
                                            </a> 
                                            <div class="caption">
                                                <h4><a style="text-decoration: none" href="/php-intership-team/frontend/Tintuc/noi-dung/nd-su-kien.php?id= <?php echo $arr[0]?>"><?php echo $arr_title[0]?></a></h4>
                                                <p><i class="fa fa-clock-o"></i>
                                                    <?php 
                                                        $time = strtotime($arr_date[0]);
                                                        echo date("d/m/Y",$time);
                                                    ?>
                                                </p>
                                                <p><i class="fa fa-map-marker"></i><?php echo " ".$arr_location[0]?></p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-12 pd-0">
                                            <div class="row">
                                                <div class="col-12 col-lg-6 pdr-10">
                                                    <a href="/php-intership-team/frontend/Tintuc/noi-dung/nd-su-kien.php?id=<?php echo $arr[1]?>"><img id="dnn_View_ltr1img" src="/php-intership-team/admin/SourceFile/<?php echo $arr_avatar[1]?>" style="width: 265; height: 192;">
                                                    </a> 
                                                    <div class="caption2">
                                                        <h4><a style="text-decoration: none" href="/php-intership-team/frontend/Tintuc/noi-dung/nd-su-kien.php?id= <?php echo $arr[1]?>"><?php echo $arr_title[1]?></a></h4>
                                                        <p><i class="fa fa-clock-o"></i>
                                                            <?php 
                                                                $time = strtotime($arr_date[1]);
                                                                echo date("d/m/Y",$time);
                                                            ?>
                                                        </p>
                                                        <p><i class="fa fa-map-marker"></i><?php echo " ".$arr_location[1]?></p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 pdr-0">
                                                    <a href="/php-intership-team/frontend/Tintuc/noi-dung/nd-su-kien.php?id=<?php echo $arr[2]?>"><img id="dnn_View_ltr1img" src="/php-intership-team/admin/SourceFile/<?php echo $arr_avatar[2]?>" style="width: 265; height: 192;">
                                                    </a> 
                                                    <div class="caption2">
                                                        <h4><a style="text-decoration: none" href="/php-intership-team/frontend/Tintuc/noi-dung/nd-su-kien.php?id= <?php echo $arr[2]?>"><?php echo $arr_title[2]?></a></h4>
                                                        <p><i class="fa fa-clock-o"></i>
                                                            <?php 
                                                                $time = strtotime($arr_date[2]);
                                                                echo date("d/m/Y",$time);
                                                            ?>
                                                        </p>
                                                        <p><i class="fa fa-map-marker"></i><?php echo " ".$arr_location[2]?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 pdl-10">
                                        <div class="col-12 col-lg-12 mrb-20 pd-0">
                                            <div class="row">
                                                <div class="col-12 col-lg-6 pdr-10">
                                                    <a href="/php-intership-team/frontend/Tintuc/noi-dung/nd-su-kien.php?id=<?php echo $arr[3]?>"><img id="dnn_View_ltr1img" src="/php-intership-team/admin/SourceFile/<?php echo $arr_avatar[3]?>" style="width: 265; height: 192;">
                                                    </a> 
                                                    <div class="caption2">
                                                        <h4><a style="text-decoration: none" href="/php-intership-team/frontend/Tintuc/noi-dung/nd-su-kien.php?id= <?php echo $arr[3]?>"><?php echo $arr_title[3]?></a></h4>
                                                        <p><i class="fa fa-clock-o"></i>
                                                            <?php 
                                                                $time = strtotime($arr_date[3]);
                                                                echo date("d/m/Y",$time);
                                                            ?>
                                                        </p>
                                                        <p><i class="fa fa-map-marker"></i><?php echo " ".$arr_location[3]?></p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 pdr-0">
                                                    <a href="/php-intership-team/frontend/Tintuc/noi-dung/nd-su-kien.php?id=<?php echo $arr[4]?>"><img id="dnn_View_ltr1img" src="/php-intership-team/admin/SourceFile/<?php echo $arr_avatar[4]?>" style="width: 265; height: 192;">
                                                    </a> 
                                                    <div class="caption2">
                                                        <h4><a style="text-decoration: none" href="/php-intership-team/frontend/Tintuc/noi-dung/nd-su-kien.php?id= <?php echo $arr[4]?>"><?php echo $arr_title[4]?></a></h4>
                                                        <p><i class="fa fa-clock-o"></i>
                                                            <?php 
                                                                $time = strtotime($arr_date[4]);
                                                                echo date("d/m/Y",$time);
                                                            ?>
                                                        </p>
                                                        <p><i class="fa fa-map-marker"></i><?php echo " ".$arr_location[4]?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-12 pd-0">
                                            <a href="/php-intership-team/frontend/Tintuc/noi-dung/nd-su-kien.php?id=<?php echo $arr[5]?>"><img id="dnn_View_ltr1img" src="/php-intership-team/admin/SourceFile/<?php echo $arr_avatar[5]?>" style="width: 565; height: 400;">
                                            </a>  
                                            <div class="caption">
                                                <h4><a style="text-decoration: none" href="/php-intership-team/frontend/Tintuc/noi-dung/nd-su-kien.php?id= <?php echo $arr[5]?>"><?php echo $arr_title[5]?></a></h4>
                                                <p><i class="fa fa-clock-o"></i>
                                                    <?php 
                                                        $time = strtotime($arr_date[5]);
                                                        echo date("d/m/Y",$time);
                                                    ?>
                                                </p>
                                                <p><i class="fa fa-map-marker"></i><?php echo " ".$arr_location[5]?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-content-motvongquanhhus pdt-10 pdb-10">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12"> 
                    <div class="post-content-area">
                        <div class="world-catagory-area">
                            <div class="titlevqh">
                                <div class="block-title uppercase"><a href="">
                                    <h5>Một vòng quanh hus</h5></a>
                                </div>
                            </div>
                            <div class="vonhquanhhus owl-carousel owl-theme owl-responsive-1000 owl-loaded">                      
                            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1150px;"><div class="owl-item active" style="width: 277.5px; margin-right: 10px;"><div class="item-main">
                                    <div class="item-header">
                                        <a href="http://www.hus.vnu.edu.vn/mot-vong-quanh-hus/thanh-tuu-guong-mat.html">
                                            <img alt="Thành tựu và Gương mặt" src="/php-intership-team/img/main/1TaQuangBuu.jpg" class="img-news">
                                        </a>
                                    </div>
                                    <div class="item-content">
                                        <h3>
                                            <a href="http://www.hus.vnu.edu.vn/mot-vong-quanh-hus/thanh-tuu-guong-mat.html">Thành tựu và Gương mặt
                                            </a>
                                        </h3>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 277.5px; margin-right: 10px;"><div class="item-main">
                                    <div class="item-header">
                                        <a href="http://www.hus.vnu.edu.vn/mot-vong-quanh-hus/hoat-dong-sinh-vien.html">
                                            <img alt="Hoạt động sinh viên" src="/php-intership-team/img/main/h2.png" class="img-news">
                                        </a>
                                    </div>
                                    <div class="item-content">
                                        <h3>
                                            <a href="http://www.hus.vnu.edu.vn/mot-vong-quanh-hus/hoat-dong-sinh-vien.html">Hoạt động sinh viên
                                            </a>
                                        </h3>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 277.5px; margin-right: 10px;"><div class="item-main">
                                    <div class="item-header">
                                        <a href="http://www.hus.vnu.edu.vn/mot-vong-quanh-hus/dien-dan-thay-va-tro.html">
                                            <img alt="Diễn đàn thầy và trò" src="/php-intership-team/img/main/h3.png" class="img-news">
                                        </a>
                                    </div>
                                    <div class="item-content">
                                        <h3>
                                            <a href="http://www.hus.vnu.edu.vn/mot-vong-quanh-hus/dien-dan-thay-va-tro.html">Diễn đàn thầy và trò
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 277.5px; margin-right: 10px;">
                                <div class="item-main">
                                    <div class="item-header">
                                        <a href="http://www.hus.vnu.edu.vn/mot-vong-quanh-hus/thu-vien-media.htmlhttp://www.hus.vnu.edu.vn/mot-vong-quanh-hus/thu-vien-media.html">
                                            <img alt="Thư viện Media" src="/php-intership-team/img/main/h4.png" class="img-news">
                                        </a>
                                    </div>
                                    <div class="item-content">
                                        <h3>
                                            <a href="http://www.hus.vnu.edu.vn/mot-vong-quanh-hus/thu-vien-media.html">Thư viện Media
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-controls">
                        <div class="owl-nav">
                            <div class="owl-prev" style="">prev</div>
                            <div class="owl-next" style="">next</div>
                        </div>
                        <div class="owl-dots" style="display: none;"></div>
                    </div>
                </div>                               
            </div>
        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-content-doitac pd-10">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div id="dnn_doitacPane">
                        <div class="DnnModule DnnModule-Banner-Show DnnModule-10886">
                            <div id="dnn_ctr10886_ContentPane">
                                <div id="dnn_ctr10886_ModuleContent">
                                    <div class="titledt"><div class="block-title uppercase"><h5>Các đối tác</h5></div></div>
                                    <div class="doitacs owl-carousel owl-theme owl-responsive-1000 owl-loaded">     
                                        <div class="owl-stage-outer">
                                            <div class="owl-stage" style="transform: translate3d(-460px, 0px, 0px); transition: all 2s ease 0s; width: 1610px;">
                                                <div class="owl-item" style="width: 220px; margin-right: 10px;">
                                                    <div class="post-thumbnail"><a href="" target="_blank" title="46th International Chemistry Olympiad"><img src="/php-intership-team/img/main/07.jpg" alt="46th International Chemistry Olympiad"></a></div>
                                                </div>
                                                <div class="owl-item" style="width: 220px; margin-right: 10px;">
                                                    <div class="post-thumbnail"><a href="" target="_blank" title="ILLINOIS"><img src="/php-intership-team/img/main/01.jpg" alt="ILLINOIS"></a></div>
                                                </div>
                                                <div class="owl-item active" style="width: 220px; margin-right: 10px;">
                                                    <div class="post-thumbnail"><a href="" target="_blank" title="Indian University"><img src="/php-intership-team/img/main/02.jpg" alt="Indian University"></a></div>
                                                </div>
                                                <div class="owl-item active" style="width: 220px; margin-right: 10px;">
                                                    <div class="post-thumbnail"><a href="" target="_blank" title="Tufts"><img src="/php-intership-team/img/main/03.jpg" alt="Tufts"></a></div>
                                                </div>
                                                <div class="owl-item active" style="width: 220px; margin-right: 10px;">
                                                    <div class="post-thumbnail"><a href="" target="_blank" title="Masachusetts">
                                                        <img src="/php-intership-team/img/main/04.jpg" alt="Masachusetts"></a></div>
                                                </div>
                                                <div class="owl-item active" style="width: 220px; margin-right: 10px;">
                                                    <div class="post-thumbnail"><a href="" target="_blank" title="University Greifswald"><img src="/php-intership-team/img/main/05.jpg" alt="University Greifswald"></a></div>
                                                </div>
                                                <div class="owl-item active" style="width: 220px; margin-right: 10px;">
                                                    <div class="post-thumbnail"><a href="" target="_blank" title="jaist"><img src="/php-intership-team/img/main/06.jpg" alt="jaist"></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-controls">
                                            <div class="owl-nav">
                                                <div class="owl-prev" style=""><i class="fa fa-angle-left"></i></div>
                                                <div class="owl-next" style=""><i class="fa fa-angle-right"></i></div>
                                            </div>
                                            <div class="owl-dots" style="display: none;"></div>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!---start footer----->
    <?php include "../footer.html" ?>
    <!----end footer------->
