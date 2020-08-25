<title>Tìm kiếm</title>
<link rel="stylesheet" type="text/css" href="/php-intership-team/css/module.css">
<link rel="stylesheet" type="text/css" href="/php-intership-team/css/bootstrap-v4.0.css">

    <!---start header----->
    <?php include "../header.html" ?>
    <!----end header------->

    <?php 
        require 'connectSQL.php';
        $conn->set_charset("utf8"); 

        $link = array("/php-intership-team/frontend/Tintuc/noi-dung/nd-hoat-dong-khoa-hoc.php",
                "/php-intership-team/frontend/Tintuc/noi-dung/nd-su-kien.php",
                "/php-intership-team/frontend/Tintuc/noi-dung/nd-thong-bao-chung.php" ,
                "/php-intership-team/frontend/Tintuc/noi-dung/nd-dang-va-cac-doan-the.php" ,
                "/php-intership-team/frontend/Tintuc/noi-dung/nd-dao-tao-tuyen-sinh.php" ,   
                "/php-intership-team/frontend/Tintuc/noi-dung/nd-hoat-dong-khoa-hoc.php" ,
                "/php-intership-team/frontend/Tintuc/noi-dung/nd-tin-tuc-chung.php" , ); 

        $limit = 10; 
        if (isset($_GET["page"])) {  
          $pn = $_GET["page"];  
        }  
        else {  
          $pn = 1;  
        };   
      
        $start_from = ($pn-1) * $limit;   
      
     ?>

    <div class="main-content-wrapper">
        <div class="container">
            <div class="breakcrum mb-30">
                <div class="row">
                    <div class="col-12">
                        <ol class="breadcrumb">
                            <li><a href="/php-intership-team/frontend/main/tim-kiem.php" class="item" style="color: gray;">Tìm kiếm</a></li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="world-latest-articles">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="single-blog-content mb-50"> 
                            <style type="text/css">
                                .highlight {
                                    text-decoration: none;
                                    color: black;
                                    background: #21638F;
                                }

                                .fade.in {
                                    opacity: 1;
                                }

                                .resultsearch .nav-tabs li {
                                    padding: 5px 10px;
                                }

                                    .resultsearch .nav-tabs li.active {
                                        padding: 5px 10px;
                                        background: #007dc5;
                                        color: #fff;
                                    }

                                        .resultsearch .nav-tabs li.active a {
                                            color: #fff;
                                        }
                            </style>
                            <style type="text/css">
                                ul.ketquasearch {
                                }

                                    ul.ketquasearch li {
                                        float: left;
                                        margin-top: 10px;
                                    }

                                        ul.ketquasearch li a {
                                            padding: 10px 20px;
                                            margin-right: 5px;
                                            border: solid 1px #eee;
                                            margin-top: 5px;
                                        }

                                        ul.ketquasearch li.active a {
                                            background: #007dc5;
                                            color: #fff;
                                        }
                            </style>
                            <style>
                                .pagination {
                                  display: inline-block;
                                  padding-top: 10px;
                                }

                                .pagination a {
                                  color: black;
                                  float: left;
                                  padding: 8px 16px;
                                  text-decoration: none;
                                  transition: background-color .3s;
                                  border: 1px solid #ddd;
                                  border-radius: 50%;
                                  margin: 0 4px;
                                }

                                .pagination a.active {
                                  background-color: #007dc5;
                                  color: white;
                                  border: 1px solid grey;
                                }

                                .pagination a:hover:not(.active) {background-color: #d8d743;}
                            </style>
                            <h2>Kết quả tìm kiếm</h2>
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <form action="tim-kiem.php" method="get">
                                        <div style="width: 85%; float: left;">
                                            <input name="s" value="<?php echo $_GET['s'];?>" type="text" style="border-color:#ECECEC;border-width:1px;border-style: solid;font-size:17px;height:35px;width:100%;">
                                        </div>
                                        <div style="padding-left: 5px; float: left; width: 70px;">
                                            <input type="submit" name="ok" value="Tìm kiếm" style="background-color:#93d4ff;border-color:#efcece;border-width:1px;border-style:solid;font-weight:bold;height:35px;width:80px;">
                                        </div>
                                    </form>
                                </div>
    
                                <?php
                                    if (isset($_REQUEST['ok'])) 
                                    {
                                        $s = addslashes($_GET['s']);
                                        if (empty($s)) {
                                            ?> 
                                            <div style="margin: 25px 10px 10px 25px;">
                                                <?php echo "<b>Hãy nhập từ khóa cần tìm kiếm</b>";?>
                                            </div>
                                            <?php
                                        } 
                                        else
                                        {   $qr = mysqli_query($conn,"SELECT new.* from `new`, `category`  where new.id_category = category.id  and description  like '%$s%' and title like '%$s%' and content like '%$s%' AND new.deleted_at is NULL;");

                                            $query = mysqli_query($conn,"SELECT new.* from `new`, `category`  where new.id_category = category.id  and description  like '%$s%' and title like '%$s%' and content like '%$s%' AND new.deleted_at is NULL LIMIT $start_from, $limit;");
                                            $num = mysqli_num_rows($qr);
                                            if ($num > 0 && $s != ""){ 
                                            ?> 
                                            <div style="margin: 25px 10px 10px 25px;">
                                                <?php echo "$num kết quả với từ khóa <b>\"$s\"</b>";?>
                                            </div>
                                            <?php
                                                $i = 0;
                                                while ($row = mysqli_fetch_assoc($query)) {
                                                    $id = $row['id'];
                                    ?>

                                <div id="list_news" style="margin-top: 10px; margin-left: 10px; margin-right: 10px; padding-top: 10px; ">
                                    <div class="list-news">
                                        <div class="list-article">
                                            <ul class="list-item">
                                                <li>
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
                                                        <img src="<?php echo $row['avatar'];?>" alt="<?php $string = $row['title'];
                                                            $array = explode(' ' ,$string);
                                                            for($x = 0; $x < 20 && $x < count($array); $x ++){
                                                                echo $array[$x] ." ";
                                                            } ?>..." style="width: 192px; height: 144px;">
                                                    </a>
                                                    <p class="name">
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
                                                            <?php 
                                                                $string = $row['title'];
                                                                $array = explode(' ' ,$string);
                                                                for($x = 0; $x < 20 && $x < count($array); $x ++){
                                                                    echo $array[$x] ." ";
                                                                }
                                                            ?>...
                                                        </a>
                                                    </p>
                                                    <p class="des">
                                                        <?php 
                                                            $string = $row['description'];
                                                            $array = explode(' ' ,$string);
                                                            for($x = 0; $x < 100 && $x < count($array); $x ++){
                                                                echo $array[$x] ." ";
                                                            }
                                                        ?>...
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <?php        
                                                $i ++;}
                                            } 
                                            else {
                                            ?> 
                                                <div style="margin: 25px 10px 10px 25px;">
                                                    <?php echo "Không tìm thấy kết quả với từ khóa <b>\"$s\"</b>";?>
                                                </div>
                                            <?php
                                            }
                                        }
                                    }
                                ?> 
                            </div>
                           
                            <div class="pagination"> 
                              <?php   
                                // Number of pages required. 
                                $total_pages = ceil($num / $limit); 
                                $pagLink = "";                         
                                for ($i = 1; $i <= $total_pages; $i ++) { 
                                  if ($i == $pn) { 
                                      $pagLink .= "<a class='active' href='/php-intership-team/frontend/main/tim-kiem.php?s=".$_GET['s']."&ok=Tìm+kiếm&page=".$i."'>".$i."</a>"; 
                                  }             
                                  else  { 
                                      $pagLink .= "<a href='/php-intership-team/frontend/main/tim-kiem.php?s=".$_GET['s']."&ok=Tìm+kiếm&page=".$i."'>".$i."</a>";
                                  } 
                                };   
                                echo $pagLink;   
                              ?> 
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