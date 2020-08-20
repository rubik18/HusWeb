
<?php 
// kết nối
    if( isset($_GET['id']) ){
        $id = $_GET['id'];
    }else {
        $id = 91;
    }
  require'../connectSQL.php';
// Chuỗi kết nối
  $sql = "SELECT * FROM `new` WHERE `id` = $id AND new.deleted_at is NULL";
  $conn->set_charset("utf8");
  $result = mysqli_query($conn, $sql); 
  if (!$result) {
    die('error'. mysqli_error($conn));
  }
 ?>

  <title>
    <?php 
    if(mysqli_num_rows($result)>0){
        $i = 0 ;
        while($row = mysqli_fetch_assoc($result)){
            $i++;
            echo  $row['title'] . "<br>";
    ?>
  </title>
        
        <!---------start header------------>
        <?php include "../../header.html" ?>
        <!---end header------->
        <link rel="stylesheet" type="text/css" href="/php-intership-team/css/tictuc_tham.css">
        <link rel="stylesheet" type="text/css" href="/php-intership-team/css/canbo_tham.css">
        <!--************Start Body**************---------------->
        
        <link rel="stylesheet" type="text/css" href="/php-intership-team/css/tictuc_tham.css">
        <link rel="stylesheet" type="text/css" href="/php-intership-team/css/canbo_tham.css">
        <div class="main-content-wrapper" id="In3">
            <div class="container" >
                 <!--------start thanh muc luc------------------->
                <div class="breadcrumb" style="height: 45px !important; overflow: hidden!important; ">
                    <div class="row" >
                        <div class="col-12">
                              <nav><ol class="breadcrumb" style="padding-top: 0 !important">
                                <li class="breadcrumb-item active" aria-current="page"><a href="/php-intership-team/frontend/Tintuc/tintuc.php" class="item ">Tin tức</a></li>&nbsp;
                                <img src="/php-intership-team/img/hop-tac-quoc-te/breadcrumb.gif">&nbsp;
                                <li class="breadcrumb-item active" aria-current="page"><a href="/php-intership-team/frontend/Tintuc/hoatdongkh.php" class="item ">Hoạt động khoa học</a></li>
                              </ol></nav>
                            </div></div>
                </div><!----end thanh muc luc-------->
                <!--------start body tin tuc--------->
                <div class="world-latest-articles">
                <div class="row">
                    
                    
    <!-------start col-8-left-------------->                               
    <div class="col-12 col-lg-8">
        <div class="single-blog-content mb-50">
            <div id="dnn_ContentPane">
                <div class="DnnModule DnnModule-Tintc-Hinthtin DnnModule-10557"><a name="10557"></a><div id="dnn_ctr10557_ContentPane">
                    <!-- Start_Module_10557 -->
                    <div id="dnn_ctr10557_ModuleContent">
                        <div id="dnn_ctr10557_Main_ctl00_up">
                            <div id="list_related">
                            <ul></ul></div>
                            <div class="news-details">
                                <!-- Post Meta -->
                                <div class="title">
                                    <h1><?php echo  $row['title'] . "<br>"; ?></h1>
                                </div>
                                <div class="post-meta">
                                    <div>
                                        <a href="#" class="post-date"><?php 
                                        $time = strtotime($row['update_at']);
                                        echo  date("H:i d/m/Y",$time) . "<br>"; ?></a>
                                    </div>
                                    <div class='social'>
                            <div class="at-share-btn-elements">
                                <a href="javascript:void(0)" onclick="Share_Content('http://www.facebook.com/sharer.php?u=nd-thong-bao.php?id=<?php echo $id ?>')" role="button" tabindex="0" class="hvr-float transition" class="at-icon-wrapper at-share-btn at-svc-facebook"  style="background-color: rgb(59, 89, 152); border-radius: 6px;padding: 5px;margin-bottom: 5px;">
                                    <span class="at4-visually-hidden"></span>
                                    <span class="at-icon-wrapper" style="line-height: 20px; height: 20px; width: 20px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-facebook-1" class="at-icon at-icon-facebook" style="fill: rgb(255, 255, 255); width: 20px; height: 20px;">
                                            <title id="at-svg-facebook-1">Facebook</title>
                                            <g><path d="M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z" fill-rule="evenodd"></path></g>
                                        </svg>
                                    </span>
                                    <span class="at-label" style="font-size: 10.5px; line-height: 20px; height: 20px; color: rgb(255, 255, 255);">Facebook&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                </a>
                                <a href="javascript:void(0)" onclick="Share_Content('https://twitter.com/intent/tweet?text=<?php echo $row['title'] ?>&url=nd-thong-bao.php?id=<?php echo $id ?>&via=TWITTER-HANDLER')" role="button" tabindex="0" class="hvr-float transition" class="at-icon-wrapper at-share-btn at-svc-twitter" style="background-color: rgb(29, 161, 242); border-radius: 6px;padding: 5px;margin-bottom: 5px; ">
                                    <span class="at4-visually-hidden"></span>
                                    <span class="at-icon-wrapper" style="line-height: 20px; height: 20px; width: 20px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-twitter-2" class="at-icon at-icon-twitter" style="fill: rgb(255, 255, 255); width: 20px; height: 20px;"><title id="at-svg-twitter-2">Twitter</title>
                                            <g><path d="M27.996 10.116c-.81.36-1.68.602-2.592.71a4.526 4.526 0 0 0 1.984-2.496 9.037 9.037 0 0 1-2.866 1.095 4.513 4.513 0 0 0-7.69 4.116 12.81 12.81 0 0 1-9.3-4.715 4.49 4.49 0 0 0-.612 2.27 4.51 4.51 0 0 0 2.008 3.755 4.495 4.495 0 0 1-2.044-.564v.057a4.515 4.515 0 0 0 3.62 4.425 4.52 4.52 0 0 1-2.04.077 4.517 4.517 0 0 0 4.217 3.134 9.055 9.055 0 0 1-5.604 1.93A9.18 9.18 0 0 1 6 23.85a12.773 12.773 0 0 0 6.918 2.027c8.3 0 12.84-6.876 12.84-12.84 0-.195-.005-.39-.014-.583a9.172 9.172 0 0 0 2.252-2.336" fill-rule="evenodd"></path></g>
                                        </svg>
                                    </span>
                                    <span class="at-label" style="font-size: 10.5px; line-height: 20px; height: 20px; color: rgb(255, 255, 255);">Twitter&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                </a>
                                <a href="javascript:void(0)" onclick="Share_Content('http://pinterest.com/pin/create/button/?url=nd-thong-bao.php?id=<?php echo $id ?>&description=<?php echo $row['title'] ?>&media=<?php echo $row['avatar'] ?>')" role="button" tabindex="0" class="hvr-float transition" class="at-icon-wrapper at-share-btn at-svc-email" style="background-color: rgb(132, 132, 132); border-radius: 6px;padding: 5px;margin-bottom: 5px; ">
                                    <!-- <span class="at4-visually-hidden"></span>
                                    <span class="at-icon-wrapper" style="line-height: 20px; height: 20px; width: 20px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-email-3" class="at-icon at-icon-email" style="fill: rgb(255, 255, 255); width: 20px; height: 20px;">
                                            <title id="at-svg-email-3">Email</title>
                                            <g><g fill-rule="evenodd"></g>
                                            <path d="M27 22.757c0 1.24-.988 2.243-2.19 2.243H7.19C5.98 25 5 23.994 5 22.757V13.67c0-.556.39-.773.855-.496l8.78 5.238c.782.467 1.95.467 2.73 0l8.78-5.238c.472-.28.855-.063.855.495v9.087z"></path>
                                            <path d="M27 9.243C27 8.006 26.02 7 24.81 7H7.19C5.988 7 5 8.004 5 9.243v.465c0 .554.385 1.232.857 1.514l9.61 5.733c.267.16.8.16 1.067 0l9.61-5.733c.473-.283.856-.96.856-1.514v-.465z"></path></g>
                                        </svg>
                                    </span> -->
                                    <i class='fab fa-pinterest' style='font-size:15px'></i>
                                    <span class="at-label" style="font-size: 10.5px; line-height: 20px; height: 20px; color: rgb(255, 255, 255);">&nbsp;&nbsp;Pinterest&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                </a>
                                
                                <!-- <a role="button" tabindex="0" class="hvr-float transition" class="at-icon-wrapper at-share-btn at-svc-email" style="background-color: #c3c3c3; border-radius: 6px;margin-bottom: 5px; ">
                                    <span class='st_email_large' displayText='Email'></span>
                                    <span class="at-label" style="font-size: 10.5px; line-height: 20px; height: 20px;padding-top: 5px;padding-bottom: 23px;padding-right: 5px;float: right; color: rgb(255, 255, 255);">Email&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                </a> -->
                                <a href="javascript:void(0)" onclick="Share_Content('http://www.linkedin.com/shareArticle?mini=true&url=nd-thong-bao.php?id=<?php echo $id ?>&title=<?php echo $row['title'] ?>&source=nd-thong-bao.php?id=<?php echo $id ?>')" role="button" tabindex="0" class="hvr-float transition" class="at-icon-wrapper at-share-btn at-svc-linkedin" style="background-color: rgb(0, 119, 181); border-radius: 6px;padding: 5px;margin-bottom: 5px; ">
                                    <span class="at4-visually-hidden"></span>
                                    <span class="at-icon-wrapper" style="line-height: 20px; height: 20px; width: 20px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-linkedin-4" class="at-icon at-icon-linkedin" style="fill: rgb(255, 255, 255); width: 20px; height: 20px;">
                                            <title id="at-svg-linkedin-4">LinkedIn</title>
                                            <g><path d="M26 25.963h-4.185v-6.55c0-1.56-.027-3.57-2.175-3.57-2.18 0-2.51 1.7-2.51 3.46v6.66h-4.182V12.495h4.012v1.84h.058c.558-1.058 1.924-2.174 3.96-2.174 4.24 0 5.022 2.79 5.022 6.417v7.386zM8.23 10.655a2.426 2.426 0 0 1 0-4.855 2.427 2.427 0 0 1 0 4.855zm-2.098 1.84h4.19v13.468h-4.19V12.495z" fill-rule="evenodd"></path></g>
                                        </svg>
                                    </span>
                                    <span class="at-label" style="font-size: 10.5px; line-height: 20px; height: 20px; color: rgb(255, 255, 255);">LinkedIn&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                </a>
                                
                                <a href="javascript:void(0)" onclick="In_Content('In')" role="button" tabindex="0" class="hvr-float transition" class="at-icon-wrapper at-share-btn at-svc-print" style="background-color: rgb(115, 138, 141); border-radius: 6px;padding: 5px;margin-bottom: 5px; ">
                                    <span class="at4-visually-hidden "></span>

                                    <span class="at-icon-wrapper" style="line-height: 20px; height: 20px; width: 20px;">
                                       
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-print-5" class="at-icon at-icon-print" style="fill: rgb(255, 255, 255); width: 20px; height: 20px;">
                                            <title id="at-svg-print-5">Print</title>
                                            <g><path d="M24.67 10.62h-2.86V7.49H10.82v3.12H7.95c-.5 0-.9.4-.9.9v7.66h3.77v1.31L15 24.66h6.81v-5.44h3.77v-7.7c-.01-.5-.41-.9-.91-.9zM11.88 8.56h8.86v2.06h-8.86V8.56zm10.98 9.18h-1.05v-2.1h-1.06v7.96H16.4c-1.58 0-.82-3.74-.82-3.74s-3.65.89-3.69-.78v-3.43h-1.06v2.06H9.77v-3.58h13.09v3.61zm.75-4.91c-.4 0-.72-.32-.72-.72s.32-.72.72-.72c.4 0 .72.32.72.72s-.32.72-.72.72zm-4.12 2.96h-6.1v1.06h6.1v-1.06zm-6.11 3.15h6.1v-1.06h-6.1v1.06z"></path></g>
                                        </svg>
                                    </span>
                                    <span class="at-label" style="font-size: 10.5px; line-height: 20px; height: 20px; color: rgb(255, 255, 255);">In&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                </a>
                            </div>
                        </div>

                                    <div style='clear: both !important; float: none;'></div>
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <p>
                                        <strong><?php echo  $row['description'] ;?></strong>
                                    </p>
                                    <span id="dnn_ctr10930_newsviewer_ctl00_lbContent">
                                                <?php echo  $row['content'] ; ?>
                                            </span>
                                            <div class="post-tools" style="display: none">
                                                <div style="clear: both"></div>
                                            </div>
                                    <?php }}?>
                                    <ul class="post-tags">
                                        <li><strong>Tags:</strong></li>
                                    </ul>
                                </div>
                            </div>
                        <!-- Attach file -->
                        <!-- tag -->
                        </div>
                        <div id="dnn_ctr10557_Main_ctl00_UpdateProgress1" style="display:none;">
                            <div class="loading" id="loadizng">Loading&#8230;</div>
                        </div>
<script>
function Share_Content(strid){   
    var prtContent = document.getElementById(strid);
    var WinPrint = window.open(strid,'','letf=0,top=0,width=600,height=400');
    
}
</script>
<script>
function In_Content(strid){   
    var prtContent = document.getElementById(strid);
    var WinPrint = window.open('','','letf=0,top=0,width=800,height=800');
    WinPrint.document.write(prtContent.innerHTML);
    WinPrint.document.close();
    WinPrint.focus();
    WinPrint.print();
}
</script>
                    </div>
                    <!-- End_Module_10557 -->
                </div></div>
            </div><!-- Single Blog Post -->
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
                                        <li class=""><a href="/php-intership-team/frontend/Tintuc/tinmoinhat.php">Tin mới nhất</a></li>
                                        <li class=""><a href="/php-intership-team/frontend/Tintuc/sukien.php">Sự kiện</a></li>
                                        <li class=""><a href="/php-intership-team/frontend/Tintuc/thongbao.php">Thông báo</a></li>
                                        <li class=""><a href="/php-intership-team/frontend/Tintuc/tintucchung.php">Tin tức chung</a></li>
                                        <li class=""><a href="/php-intership-team/frontend/Tintuc/dangvadoan.php">Đảng và các Đoàn thể</a></li>
                                        <li class=""><a href="/php-intership-team/frontend/Tintuc/daotaots.php">Đào tạo - Tuyển sinh</a></li>
                                        <li class="active"><a href="/php-intership-team/frontend/Tintuc/hoatdongkh.php">Hoạt động khoa học</a></li>
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
        <!--*********End Body*******************--------->
        <!---start footer----->
        <?php include "../../footer.html" ?>
        <!----end footer------->