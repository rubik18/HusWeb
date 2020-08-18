<title>Tìm kiếm</title>
<link rel="stylesheet" type="text/css" href="/php-intership-team/css/module.css">
<link rel="stylesheet" type="text/css" href="/php-intership-team/css/bootstrap-v4.0.css">

    <!---start header----->
    <?php include "../header.html" ?>
    <!----end header------->

    <?php 
        require 'connectSQL.php';
        $conn->set_charset("utf8"); 
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
                                    background: yellow;
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
                            <h2>Kết quả tìm kiếm</h2>
                                <div class="row">
                                    <div class="col-12 col-md-12">
                                        <form action="tim-kiem.php" method="get">
                                            <div style="width: 85%; float: left;">
                                                <input name="s" value="<?php echo $_GET['s'];?>" type="text" style="border-color:#ECECEC;border-width:1px;border-style: solid;font-size:17px;height:35px;width:100%;">
                                            </div>
                                            <div style="padding-left: 5px; float: left; width: 70px; margin-top: 3px;">
                                                <input type="submit" name="ok" value="Tìm kiếm" style="background-color:yellow;border-color:darkred;border-width:1px;border-style:solid;font-weight:bold;height:30px;width:80px;">
                                            </div>
                                        </form>
                                    </div>
        
                                    <?php
                                        if (isset($_REQUEST['ok'])) 
                                        {
                                            $s = addslashes($_GET['s']);
                                            if (empty($s)) {
                                                echo "Hãy nhập từ khóa cần tìm kiếm";
                                            } 
                                            else
                                            {                                                    
                                                $query = mysqli_query($conn,"SELECT * from `new` where description  like '%$s%' and title like '%$s%' and content like '%$s%';");
                                                $num = mysqli_num_rows($query);
                                                if ($num > 0 && $s != ""){ 
                                                ?> 
                                                <div style="margin: 25px 10px 10px 25px;">
                                                    <?php echo "$num kết quả với từ khóa <b>\"$s\"</b>";?>
                                                </div>
                                                <?php
                                                    while ($row = mysqli_fetch_assoc($query)) {
                                    ?>

                                    <div id="list_news" style="margin-top: 10px; margin-left: 10px; margin-right: 10px; padding-top: 10px; ">
                                        <div class="list-news">
                                            <div class="list-article">
                                                <ul class="list-item">
                                                    <li>
                                                        <a href="">
                                                            <img src="<?php echo $row['avatar'];?>" alt="<?php echo substr($row['title'], 0, 120); ?>..." style="width: 192px; height: 144px;">
                                                        </a>
                                                        <p class="name">
                                                            <a href="">
                                                                <?php echo substr($row['title'], 0, 100); ?>...
                                                            </a>
                                                        </p>
                                                        <p class="des">
                                                            <?php echo ($row['description']); ?>...
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <?php        
                                                    }
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