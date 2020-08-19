        <?php 
// kết nối
    if( isset($_GET['id']) ){
        $id = $_GET['id'];
    }else {
        $id = 91;
    }
  require'../connectSQL.php';
// Chuỗi kết nối
  $sql = "SELECT * FROM `new` WHERE `id` = $id AND new.deleted_at is NULL" ;
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
	   <!---*******Start Body*************------->
        <div class="main-content-wrapper" id="In">
        <div class="container">
            <div class="breakcrum">
                <div class="row">
                    <div class="col-12">
                        <ol class="breadcrumb">
                            <li><a href="/php-intership-team/frontend/Tintuc/thongbao.php" class="item">Thông báo</a></li>

                        </ol>
                    </div>
                </div>
            </div>
            <div class="world-latest-articles">
                <div class="row">
                    
                    <div class="col-12 col-lg-12 pdr-0">
                        <div class="single-blog-content mb-50">
                            <div id="dnn_ContentPane"><div class="DnnModule DnnModule-Tintc-HUSHinthtinThngbo DnnModule-10933"><a name="10933"></a><div id="dnn_ctr10933_ContentPane"><!-- Start_Module_10933 --><div id="dnn_ctr10933_ModuleContent">
    
            <div class="row" style="padding: 0px; margin: 0px;">
                <div class="col-12 col-lg-3">
                    <div class="titlethongbao" style="height: 29px; line-height: 29px; background: url(/php-intership-team/img/main/homethongbao.png) no-repeat left bottom #017dc5;margin-bottom: 10px;border-radius: 5px 5px 0px 0px;">

                        <h5><a href="">Thông báo liên quan</a></h5>
                    </div>
                    <!-- Single Blog Post -->
                    <div class="single-blog-post post-style-tb">  
                    </div>
                </div>
                <div class="col-12 col-lg-6  pdr-0  pdl-0">
                    <div class="news-details">
                        <div id="dnn_ctr10933_newsviewer_ctl00_up">
                            <div class="title">
                                <h1>
                                <?php echo  $row['title'] ;  ?></h1>
                            </div>
                    <div class="post-meta">
                        <div>
                            <a href="#" class="post-date">
                                <i class="fa fa-clock-o"></i> <?php $time = strtotime($row['created_at']);
                                                            echo  date("H:i d/m/Y",$time) ; ?></a>
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
                    
                    <div class="post-content">
                        <p>
                            <strong>
                                </strong>
                        </p>
                        <span id="dnn_ctr10933_newsviewer_ctl00_lbContent"><p style="text-align: center;"><iframe height="700px" src="kq_gs_pgs_2020.pdf" width="100%"></iframe></p>


                        <p style='text-align:right; font-family: FontAwesome !important'><i style='font-family: FontAwesome !important' class='fa fa-pencil' aria-hidden='true'></i> <strong></strong></p></span>
                        
                        <ul class="post-tags">
                            <li><strong>Tags:</strong></li>
                            
                        </ul>
                    </div>
                    
                    
                    <div class="cl"></div>
                    </div>
                    <div id="dnn_ctr10933_newsviewer_ctl00_UpdateProgress1" style="display:none;">
                        <div class="loading" id="loadizng">Loading&#8230;</div>
                    </div>
        </div>
    <?php $i++;}} ?>
    </div>
    <div class="col-12 col-lg-3">
        <div class="titlethongbao" style="height: 29px; line-height: 29px; background: url(/php-intership-team/img/main/homethongbao.png) no-repeat left bottom #017dc5;margin-bottom: 10px;border-radius: 5px 5px 0px 0px;">
            <h5><a href="javascript:void(0);">Thông báo mới nhất</a></h5>
        </div>
        <!-- Single Blog Post -->
        <div class="single-blog-post post-style-tb">
            <?php $sqli = "SELECT `new`.*,`category`.`name` FROM `new`, `category` WHERE new.id_category = category.id AND category.`name`='Thông báo' AND new.deleted_at is NULL ORDER BY new.created_at DESC LIMIT 5 ";
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
                    <div class="media">
                        <div class="object" style="height: 40px;width: 40px;padding: 0px;color: #fff;font-weight: 700; float: left !important;background: url(/php-intership-team/img/main/homethongbaoitem.png) left no-repeat;">
                            <span class="day"><?php 
                        $time = strtotime($rowi['created_at']);
                        echo  date(" d",$time) ; ?></span>
                            <span class="date"><?php 
                        $time = strtotime($rowi['created_at']);
                        echo  date(" m/Y",$time) ; ?></span>
                        </div>
                        <div class="body">
                            <a href='nd-thong-bao.php?id=<?php echo $id ?>' style="font-size: 12px; font-weight: 500; font-family: 'Roboto', sans-serif; ">
                              <h4 > <?php echo $rowi['title']; ?></a></h4>
                        </div>
                    </div>
                <?php $i++; }} ?>        </div>
        
<ul class="bannerrighttop">
    
            <li style="display: block; padding-bottom: 10px;">
                <a href='#' target=_blank alt='Lịch công tác'><img class='img-responsive' src='/php-intership-team/img/tin-tuc/lichcongtac2.png' alt='Lịch công tác' width='260' height='110'></a>
            </li>
        
            <li style="display: block; padding-bottom: 10px;">
                <a href='#' target=_blank alt='Lịch học - Lịch thi'><img class='img-responsive' src='/php-intership-team/img/tin-tuc/lichhoc.png' alt='Lịch học - Lịch thi' width='260' height='110'></a>
            </li>
        
            <li style="display: block; padding-bottom: 10px;">
                <a href='#' target=_blank alt='Học bổng - Việc làm'><img class='img-responsive' src='/php-intership-team/img/tin-tuc/hocbong.png' alt='Học bổng - Việc làm' width='260' height='110'></a>
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


<style>
    .divcomment {
        padding: 20px;
        margin-top: 10px;
    }

    .showcomment {
        display: none;
    }

</style>


</div><!-- End_Module_10933 --></div>
</div></div>
                            <!-- Single Blog Post -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!--*********End Body*******************--------->
        <!---start footer----->
        <?php include "../../footer.html" ?>
        <!----end footer------->