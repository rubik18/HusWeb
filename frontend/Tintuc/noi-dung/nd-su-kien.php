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
        <title>....Data.....</title>
        <link rel="stylesheet" type="text/css" href="/php-intership-team/css/tictuc_tham.css">
        <link rel="stylesheet" type="text/css" href="/php-intership-team/css/canbo_tham.css">
        <!--************Start Body**************---------------->
        <div class="main-content-wrapper" id="In2">
            <div class="container">
                <div class="breakcrum">
                    <div class="row">
                        <div class="col-12">
                            <ol class="breadcrumb">
                                <li><a href="/php-intership-team/frontend/Tintuc/sukien.php" class="item">Sự kiện</a></li>

                            </ol>
                        </div>
                    </div>
                </div>
                <div class="world-latest-articles">
                    <div class="row">
                        
                        <div class="col-12 col-lg-12 pdr-0">
                            <div class="single-blog-content mb-50">
                                <div id="dnn_ContentPane"><div class="DnnModule DnnModule-Events-ShowIndex DnnModule-10913"><a name="10913"></a><div id="dnn_ctr10913_ContentPane"><!-- Start_Module_10913 -->
                                <div id="dnn_ctr10913_ModuleContent">
    

        <div class="row" style="margin: 0;">
            <div class="col-12 col-lg-3">
                <div class="bordershadown borderorange mb-15 pd-10">
                    <div class="bordershadown mb-15">
                        <div class="title">
                            <h5><i class="fa fa-circle"></i>Sự kiện sắp tới</h5> 
                        </div>
                        <div class="single-blog-post post-style-2 align-items-center wrap-event">
                            <div class="title-event">
                                <a id="dnn_ctr10913_Main_ctl00_Detail_hpltitle"></a>
                            </div>
                            <div class="date-time">
                                
                            </div>
                            <div class="dclock">
                                <div class="column days">
                                    <div class="timer" id="days"></div>
                                    <div class="text" style="margin-left: 30px">Ngày : </div>
                                </div>
                            </div>
                            <div class="clock">
                                <div class="column">
                                    <div class="timer" id="hours1111"></div>
                                    <div class="text">giờ</div>
                                </div>
                                <div class="timer">:</div>
                                <div class="column">
                                    <div class="timer" id="minutes1111"></div>
                                    <div class="text">phút</div>
                                </div>
                                <div class="timer">:</div>
                                <div class="column">
                                    <div class="timer" id="seconds1111"></div>
                                    <div class="text">giây</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div id="events_details">
                    <div class="news-details">
                        <div class="centreColumn bodyCopy">
                    <h3><?php echo  $row['title'] ; ?></h3>
                    <dl class="details">
                        
                        <?php echo  $row['description'] ; ?>
                    </dl>
                    <div class="addthis_inline_share_toolbox" data-url="" data-title="" style="clear: both; height: 30px">
                        <!--  -->
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
                                <a href="javascript:void(0)" onclick="In_Content('In2')" role="button" tabindex="0" class="hvr-float transition" class="at-icon-wrapper at-share-btn at-svc-print" style="background-color: rgb(115, 138, 141); border-radius: 6px;padding: 5px;margin-bottom: 5px; ">
                                    <span class="at4-visually-hidden "></span>

                                    <span class="at-icon-wrapper" style="line-height: 20px; height: 20px; width: 20px;">
                                       
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-print-5" class="at-icon at-icon-print" style="fill: rgb(255, 255, 255); width: 20px; height: 20px;">
                                            <title id="at-svg-print-5">Print</title>
                                            <g><path d="M24.67 10.62h-2.86V7.49H10.82v3.12H7.95c-.5 0-.9.4-.9.9v7.66h3.77v1.31L15 24.66h6.81v-5.44h3.77v-7.7c-.01-.5-.41-.9-.91-.9zM11.88 8.56h8.86v2.06h-8.86V8.56zm10.98 9.18h-1.05v-2.1h-1.06v7.96H16.4c-1.58 0-.82-3.74-.82-3.74s-3.65.89-3.69-.78v-3.43h-1.06v2.06H9.77v-3.58h13.09v3.61zm.75-4.91c-.4 0-.72-.32-.72-.72s.32-.72.72-.72c.4 0 .72.32.72.72s-.32.72-.72.72zm-4.12 2.96h-6.1v1.06h6.1v-1.06zm-6.11 3.15h6.1v-1.06h-6.1v1.06z"></path></g>
                                        </svg>
                                    </span>
                                    <span class="at-label" style="font-size: 10.5px; line-height: 20px; height: 20px; color: rgb(255, 255, 255);">In&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                </a>
                           <!--  -->
                        </div>
                        </div>
                    </div>
                        <hr>

                        <h3>Nội dung:</h3>
                        <?php echo  $row['content'] ; ?>

                        <h3>Liên hệ</h3>
                        <dl class="details">
                            <dt style="margin: 0;
                            padding: 0;
                            font-size: 14px;font-weight: bold;
                            float: left;">Họ và tên</dt>
                            <dd>:</dd>
                            <dt style="margin: 0;
                            padding: 0;
                            font-size: 14px;font-weight: bold;
                            float: left;">E-Mail</dt>
                            <dd>:</dd>
                            <dt style="margin: 0;
                            padding: 0;
                            font-size: 14px;font-weight: bold;
                            float: left;">Điện thoại</dt>
                            <dd>:</dd>
                            <dt style="margin: 0;
                            padding: 0;
                            font-size: 14px;font-weight: bold;
                            float: left;">Địa chỉ liên hệ</dt>
                            <dd style="display: block ;
                        margin: 15px 0 15px 100px ;
                        text-align: justify ;">:</dd>
                        </dl>           </div>
                    </div>
                </div>
            </div>
        <?php }} ?>
            <div class="col-12 col-lg-3">
                <div class="title">
                    <div class="block-title uppercase">
                        <h5><a href="#">Sự kiện tiêu biểu</a></h5>
                    </div>
                </div>
                <div class="bordershadown borderorange mb-15 pd-10">
                    <?php $sqli = "SELECT `new`.*,`category`.`name` FROM `new`, `category` WHERE new.id_category = category.id AND category.`name`='Sự kiện' AND new.deleted_at is NULL ORDER BY new.created_at DESC LIMIT 10 ";
                          $conn->set_charset("utf8");
                          $resulti = mysqli_query($conn, $sqli); 
                          if (!$resulti) {
                            die('error'. mysqli_error($conn));
                            }

                            if(mysqli_num_rows($resulti)>0 ){
                                $i = 0;
                                while($rowi = mysqli_fetch_assoc($resulti) ){  
                                $id = $rowi['id'];  
                           ?>
                    <div class="sukientieubieu">
                                <!-- Post Thumbnail -->
                                <link rel="stylesheet" type="text/css" href="/php-intership-team/css/font-awesome-n.css">
                                <div class="post-thumbnail">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="nd-su-kien.php?id=<?php echo $id ?>" class="headline">
                                        <h5> <?php echo $rowi['title']; ?></h5>
                                    </a>
                                    <div class="post-meta">
                                        <a href="nd-su-kien.php?id=<?php echo $id ?>" class="post-date" style="font-weight: 400!important">
                                           <?php 
                                                $time = strtotime($rowi['created_at']);
                                                echo  date("H:i",$time) ."-". date("d/m/Y",$time) ?> </a>
                                    </div>
                                </div>
                    </div>
                     <?php $i++; }} ?>   
                                   
                </div>
                <ul class="bannerrighttop">
                    <li style="display: block; padding-bottom: 10px;">
                        <a href='http://hus.vnu.edu.vn/su-kien/ngay-hoi-stem-2019-nguyen-to-bi-an-d22.html#.XzONvSj7TIU' target=_blank alt='Ngày hội STEM'><img class='img-responsive' src='/php-intership-team/img/tin-tuc/stemp.png' alt='Ngày hội STEM' width='260' height='110'></a>
                    </li>
                </ul>
            </div>
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
                </div><!-- End_Module_10913 --></div></div></div>
                                        <!-- Single Blog Post -->
                                    </div></div></div></div>
                    </div>
    </div>
        <!--*********End Body*******************--------->
        <!---start footer----->
        <?php include "../../footer.html" ?>
        <!----end footer------->
    <!-- </div>
</body>
</html> -->