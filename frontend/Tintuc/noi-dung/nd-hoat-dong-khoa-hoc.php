
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
        <!----Js cho nut share------>
        <script type="text/javascript">var switchTo5x=true;</script>
        <script type="text/javascript" src="/php-intership-team/js/buttons.js"></script>
        <script type="text/javascript">
            stLight.options({publisher: "ur-d207247d-f4a3-e98e-1da2-57aaba9d6ddf"});</script><!-------->
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

                                            <a role="button" tabindex="0" class="hvr-float transition" class="at-icon-wrapper at-share-btn at-svc-facebook"  style="background-color: rgb(59, 89, 152); border-radius: 6px;margin-bottom: 5px; ">
                                                <span class='st_facebook_large' id="factha" displayText='Facebook'></span>
                                                <div class="at-label" style="font-size: 10.5px; line-height: 20px; height: 20px;padding-top: 5px;padding-bottom: 23px;padding-right: 5px;float: right; color: rgb(255, 255, 255);">Facebook&nbsp;&nbsp;&nbsp;&nbsp;</div>

                                            </a>
                                            <a role="button" tabindex="0" class="hvr-float transition" class="at-icon-wrapper at-share-btn at-svc-twitter" style="background-color: rgb(29, 161, 242); border-radius: 6px;margin-bottom: 5px; ">
                                                <span class='st_twitter_large' displayText='Tweet'></span>
                                                <span class="at-label" style="font-size: 10.5px; line-height: 20px; height: 20px;padding-top: 5px;padding-bottom: 23px;padding-right: 5px;float: right; color: rgb(255, 255, 255);">Twitter&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                            </a>
                                            <a role="button" tabindex="0" class="hvr-float transition" class="at-icon-wrapper at-share-btn at-svc-email" style="background-color: #c3c3c3; border-radius: 6px;margin-bottom: 5px; ">
                                                <span class='st_email_large' displayText='Email'></span>
                                                <span class="at-label" style="font-size: 10.5px; line-height: 20px; height: 20px;padding-top: 5px;padding-bottom: 23px;padding-right: 5px;float: right; color: rgb(255, 255, 255);">Email&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                            </a>
                                            <a role="button" tabindex="0" class="hvr-float transition" class="at-icon-wrapper at-share-btn at-svc-linkedin" style="background-color: rgb(0, 119, 181); border-radius: 6px;margin-bottom: 5px; ">
                                                <span class='st_linkedin_large' displayText='LinkedIn'></span>
                                                <span class="at-label" style="font-size: 10.5px; line-height: 20px; height: 20px;padding-top: 5px;padding-bottom: 23px;padding-right: 5px;float: right; color: rgb(255, 255, 255);">LinkedIn&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                            </a>
                                            <a href="javascript:void(0)" onclick="In_Content('In3')" role="button" tabindex="0" class="hvr-float transition" class="at-icon-wrapper at-share-btn at-svc-print" style="background-color: rgb(115, 138, 141); border-radius: 6px;padding: 5px;margin-bottom: 5px; ">
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