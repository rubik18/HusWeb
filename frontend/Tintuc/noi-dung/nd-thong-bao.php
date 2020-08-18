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
        <script type="text/javascript">var switchTo5x=true;</script>
        <script type="text/javascript" src="/php-intership-team/js/buttons.js"></script>
        <script type="text/javascript">stLight.options({publisher: "ur-d207247d-f4a3-e98e-1da2-57aaba9d6ddf"});</script>
        <!---------start header------------>
        <?php include "../../header.html" ?>
        <!---end header------->
        <title>....Data.....</title>
        <link rel="stylesheet" type="text/css" href="/php-intership-team/css/tictuc_tham.css">
        <link rel="stylesheet" type="text/css" href="/php-intership-team/css/canbo_tham.css">
        <!--************Start Body**************---------------->
	   <!---*******Start Body*************------->
        <div class="main-content-wrapper">
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
                                <a role="button" tabindex="0" class="hvr-float transition" class="at-icon-wrapper at-share-btn at-svc-print" style="background-color: rgb(115, 138, 141); border-radius: 6px;padding: 5px;margin-bottom: 5px; ">
                                    <span class="at4-visually-hidden"></span>
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
                    <div class="post-tools" style="display: none">
                        <a href="javascript:share_facebook()" class="btn btn-facebook white-color"><i class="fa fa-facebook"></i></a>
                        <a href="javascript:share_twitter()" class="btn btn-twitter white-color"><i class="fa fa-twitter"></i></a>
                        <a href="javascript:share_google()" class="btn btn-google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="btn white-bg"><i class="fa fa-print"></i></a>
                    </div>
                    <div class="cl white-bg" style="display: none">
                        <div class="comment-block">
                            <div id="dnn_ctr10933_newsviewer_ctl00_update">
                                    <div class="block-heading">
                                        <div class="pull-left">
                                            <a href="#divcomment" class="showcomment"><strong class="uppercase">Bình luận</strong></a>
                                        </div>
                                        <div class="cl"></div>
                                    </div>
                                    <div class="block-content mt-10 divcomment" name="divcomment">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="form-group">
                                                    <label class="control-label">Họ tên</label>
                                                    <input name="dnn$ctr10933$newsviewer$ctl00$txtName" type="text" id="dnn_ctr10933_newsviewer_ctl00_txtName" placeholder="Họ tên của bạn" class="form-control" data-error="Bạn chưa nhập họ tên" required="" />
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="form-group">
                                                    <label class="control-label">Email</label>
                                                    <input name="dnn$ctr10933$newsviewer$ctl00$txtEmail" type="text" id="dnn_ctr10933_newsviewer_ctl00_txtEmail" placeholder="Phản hồi khi cần thiết" class="form-control" data-error="Bạn chưa nhập email" required="" />
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Bình luận</label>
                                            <textarea name="dnn$ctr10933$newsviewer$ctl00$txtContent" id="dnn_ctr10933_newsviewer_ctl00_txtContent" data-minlength="10" placeholder="Cho chúng tôi biết ý kiến của bạn" rows="3" data-error="Bình luận cần có 10 ký tự trở lên" class="form-control comment" required="" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 74px;"></textarea>
                                            <div class="help-block with-errors"></div>
                                            <div id="dnn_ctr10933_newsviewer_ctl00_Panel1">
                                                <span><div class='g-recaptcha' data-sitekey='6LctrT8UAAAAAHOQyujQa-cqLXWyiYsKOmGHc-OJ'></div></span>
                                            </div>
                                            <div class="pull-left">
                                                <a onclick="return isFormValid();" id="dnn_ctr10933_newsviewer_ctl00_lbtUpdate" class="btn btn-xs font-14 btn-primary" href="javascript:__doPostBack(&#39;dnn$ctr10933$newsviewer$ctl00$lbtUpdate&#39;,&#39;&#39;)" style="color:White;">
                                                            <strong>&nbsp;&nbsp;Gửi bình luận&nbsp;&nbsp;
                                                            </strong>
                                                </a>
                                            </div>
                                            <div class="cl"></div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="block-comments pd-10">
                        </div>
                        <div class="clearfix pagination-wp">
                            <ul class="pagination pull-left">
                                <li><a><i class="fa fa-angle-double-left"></i></a></li>
                                
                            </ul>
                            <div class="cl"></div>
                        </div>
                    </div>
                    <div class="cl"></div>
                    </div>
                    <div id="dnn_ctr10933_newsviewer_ctl00_UpdateProgress1" style="display:none;">
                        <div class="loading" id="loadizng">Loading&#8230;</div>
                    </div>
        </div>
    <?php }} ?>
    </div>
    <div class="col-12 col-lg-3">
        <div class="titlethongbao" style="height: 29px; line-height: 29px; background: url(/php-intership-team/img/main/homethongbao.png) no-repeat left bottom #017dc5;margin-bottom: 10px;border-radius: 5px 5px 0px 0px;">
            <h5><a href="javascript:void(0);">Thông báo mới nhất</a></h5>
        </div>
        <!-- Single Blog Post -->
        <div class="single-blog-post post-style-tb">
            
                    <div class="media">
                        <div class="object" style="height: 40px;width: 40px;padding: 0px;color: #fff;font-weight: 700; float: left !important;background: url(http://hus.vnu.edu.vn/hus/img/blog-img/homethongbaoitem.png) left no-repeat;">
                            <span class="day">31</span>
                            <span class="date">07/2020</span>
                        </div>
                        <div class="body">
                            <h3><a href='http://hus.vnu.edu.vn/thong-bao/thong-bao-chung/huong-dan-chi-tiet-ve-thoi-gian-dia-diem-nhap-hoc-lop-10-nam-2020-66479.html'>
                                Hướng dẫn chi tiết về thời gian, địa điểm nhập học lớp 10 năm 2020</a></h3>
                        </div>
                    </div>
                
                    <div class="media">
                        <div class="object"style="height: 40px;width: 40px;padding: 0px;color: #fff;font-weight: 700; float: left !important;background: url(http://hus.vnu.edu.vn/hus/img/blog-img/homethongbaoitem.png) left no-repeat;">
                            <span class="day">28</span>
                            <span class="date">07/2020</span>
                        </div>
                        <div class="body">
                            <h3><a href='http://hus.vnu.edu.vn/thong-bao/thong-bao-chung/tuyen-sinh-khoa-1-chuong-trinh-lien-ket-quoc-te-dao-tao-thac-si-vat-ly-chuyen-nganh-cong-nghe-ban-dan-66470.html'>
                                Tuyển sinh Khóa 1 chương trình liên kết quốc tế đào tạo Thạc sĩ Vật lý, chuyên ngành “Công nghệ bán dẫn”</a></h3>
                        </div>
                    </div>
                
                    <div class="media">
                        <div class="object"style="height: 40px;width: 40px;padding: 0px;color: #fff;font-weight: 700; float: left !important;background: url(http://hus.vnu.edu.vn/hus/img/blog-img/homethongbaoitem.png) left no-repeat;">
                            <span class="day">27</span>
                            <span class="date">07/2020</span>
                        </div>
                        <div class="body">
                            <h3><a href='http://hus.vnu.edu.vn/thong-bao/thong-bao-chung/tuyen-sinh-thac-si-va-tien-si-dot-2-nam-2020-66467.html'>
                                Tuyển sinh thạc sĩ và tiến sĩ đợt 2 năm 2020</a></h3>
                        </div>
                    </div>
                
                    <div class="media">
                        <div class="object"style="height: 40px;width: 40px;padding: 0px;color: #fff;font-weight: 700; float: left !important;background: url(http://hus.vnu.edu.vn/hus/img/blog-img/homethongbaoitem.png) left no-repeat;">
                            <span class="day">27</span>
                            <span class="date">07/2020</span>
                        </div>
                        <div class="body">
                            <h3><a href='http://hus.vnu.edu.vn/thong-bao/thong-bao-chung/danh-sach-ung-vien-nop-ho-so-xet-cong-nhan-dat-tieu-chuan-chuc-danh-gs-pgs-nam-2020-66466.html'>
                                Danh sách ứng viên nộp hồ sơ xét công nhận đạt tiêu chuẩn chức danh GS, PGS năm 2020</a></h3>
                        </div>
                    </div>
                
                    <div class="media">
                        <div class="object"style="height: 40px;width: 40px;padding: 0px;color: #fff;font-weight: 700; float: left !important;background: url(http://hus.vnu.edu.vn/hus/img/blog-img/homethongbaoitem.png) left no-repeat;">
                            <span class="day">24</span>
                            <span class="date">07/2020</span>
                        </div>
                        <div class="body">
                            <h3><a href='http://hus.vnu.edu.vn/thong-bao/thong-bao-chung/nhap-hoc-cho-thi-sinh-trung-tuyen-dao-tao-tien-si-dot-1-nam-2020-66464.html'>
                                Nhập học cho thí sinh trúng tuyển đào tạo tiến sĩ đợt 1 năm 2020</a></h3>
                        </div>
                    </div>
                
        </div>
        
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