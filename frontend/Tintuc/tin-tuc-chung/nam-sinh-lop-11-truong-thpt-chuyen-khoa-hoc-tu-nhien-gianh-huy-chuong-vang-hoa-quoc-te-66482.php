<?php 
// kết nối
  require'../connectSQL.php';
// Chuỗi kết nối
  $sql = "SELECT * FROM `new` WHERE `id` = 92";
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
	<div class="main-content-wrapper">
        <div class="container">
            <div class="breakcrum">
                <div class="row">
                    <div class="col-12">
                        <ol class="breadcrumb">
                            <li><a href="../tintuc.php" class="item">Tin tức</a></li>&nbsp;<img alt="*" src="http://hus.vnu.edu.vn/images/breadcrumb.gif">&nbsp;<li><a href="http://hus.vnu.edu.vn/tin-tuc-su-kien/tin-tuc-chung.html" class="item">Tin tức chung</a></li>

                        </ol>
                    </div>
                </div>
            </div>
            <div class="world-latest-articles">
                <div class="row">
                    <div class="col-12 col-lg-12 pdr-0"><div class="single-blog-content mb-50"><div id="dnn_ContentPane"><div class="DnnModule DnnModule-Tintc-HUSHinthtrangtin DnnModule-10930"><a name="10930"></a><div id="dnn_ctr10930_ContentPane"><!-- Start_Module_10930 --><div id="dnn_ctr10930_ModuleContent">
                        <div class="row" style="padding: 0px; margin: 0px;">
                             <!---Start Col-lg-3 Tin gan day -->                           
                            <div class="col-12 col-lg-3" id="hai">
                                <div id="dnn_ctr10930_newsviewer_ctl00_paneOther">
                                
                                    <div id="box_other" class="news-lastest">
                                        <!-- Tin khac -->
                                        <div class="titletinkhac" style="height: 29px;background: url(http://hus.vnu.edu.vn/hus/img/blog-img/hometintuc.png) no-repeat left bottom #017dc5; color: #fff;float: left; padding: 0 30px;border-radius: 5px 5px 0px 0px;margin-bottom: 10px;">
                                            <h5>Tin gần đây</h5>
                                        </div>
                                        <!-- Single Blog Post -->
                                        
                                        <div class="single-blog-post post-style-tb">
                                            <!----tin 1---->
                                            <div class="media">
                                                <div class="object">
                                                    <img src="" alt="Trường  Đại học Khoa học Tự nhiên tổ chức tập huấn công tác coi thi kỳ thi tốt nghiệp THPT năm 2020">
                                                </div>
                                                <div class="body">
                                                    <h3>
                                                        <a href="http://hus.vnu.edu.vn/tin-tuc-su-kien/tin-tuc-chung/truong-dai-hoc-khoa-hoc-tu-nhien-to-chuc-tap-huan-cong-tac-coi-thi-ky-thi-tot-nghiep-thpt-nam-2020-66478.html">Trường  Đại học Khoa học Tự nhiên tổ chức tập huấn công tác coi thi kỳ thi tốt nghiệp THPT năm 2020</a></h3>
                                                </div>
                                            </div>
                                            <!----tin2 --->
                                            <div class="media">
                                                <div class="object">
                                                    <img src="" alt="CED và Công ty TNHH Điện lực AES-TKV Mông Dương mong muốn hợp tác sâu rộng với Trường Đại học Khoa học Tự nhiên">
                                                </div>
                                                <div class="body">
                                                    <h3>
                                                        <a href="http://hus.vnu.edu.vn/tin-tuc-su-kien/tin-tuc-chung/ced-va-cong-ty-tnhh-dien-luc-aes-tkv-mong-duong-mong-muon-hop-tac-sau-rong-voi-truong-dai-hoc-khoa-hoc-tu-nhien-65461.html">CED và Công ty TNHH Điện lực AES-TKV Mông Dương mong muốn hợp tác sâu rộng với Trường Đại học Khoa học Tự nhiên</a></h3>
                                                </div>
                                            </div>
                                            <!----tin3 ---->
                                            <div class="media">
                                                <div class="object">
                                                    <img src="" alt="Trường Đại học Khoa học Tự nhiên tổ chức Hội nghị công chức, viên chức, người lao động và Tổng kết năm học 2019-2020">
                                                </div>
                                                <div class="body">
                                                    <h3>
                                                        <a href="http://hus.vnu.edu.vn/tin-tuc-su-kien/tin-tuc-chung/truong-dai-hoc-khoa-hoc-tu-nhien-to-chuc-hoi-nghi-cong-chuc-vien-chuc-nguoi-lao-dong-va-tong-ket-nam-hoc-2019-2020-65460.html">Trường Đại học Khoa học Tự nhiên tổ chức Hội nghị công chức, viên chức, người lao động và Tổng kết năm học 2019-2020</a></h3>
                                                </div>
                                            </div>
                                            <!---tin 4 ---->
                                            <div class="media">
                                                <div class="object">
                                                    <img src="" alt="Lĩnh vực vật lý của ĐHQGHN trong nhóm 401 – 500 của bảng xếp hạng ARWU">
                                                </div>
                                                <div class="body">
                                                    <h3>
                                                        <a href="http://hus.vnu.edu.vn/tin-tuc-su-kien/tin-tuc-chung/linh-vuc-vat-ly-cua-dhqghn-trong-nhom-401-500-cua-bang-xep-hang-arwu-65454.html">Lĩnh vực vật lý của ĐHQGHN trong nhóm 401 – 500 của bảng xếp hạng ARWU</a></h3>
                                                </div>
                                            </div>
                                            <!---tin 5 ---->
                                            <div class="media">
                                                <div class="object">
                                                    <img src="" alt="Sinh viên HUS chưa tốt nghiệp đã được hai Tập đoàn công nghệ chào đón">
                                                </div>
                                                <div class="body">
                                                    <h3>
                                                        <a href="http://hus.vnu.edu.vn/tin-tuc-su-kien/tin-tuc-chung/sinh-vien-hus-chua-tot-nghiep-da-duoc-hai-tap-doan-cong-nghe-chao-don-65451.html">Sinh viên HUS chưa tốt nghiệp đã được hai Tập đoàn công nghệ chào đón</a></h3>
                                                </div>
                                            </div>
                                
                                            <div class="media">
                                                <div class="object">
                                                    <img src="./Nam sinh lớp 11 Trường THPT Chuyên Khoa học Tự nhiên giành huy chương vàng Hóa quốc tế_files/img_6117.jpg" alt="Olympic Sinh học Sinh viên toàn quốc năm 2021 sẽ được tổ chức tại trường Đại học Khoa học Tự nhiên - Đại học Quốc gia Hà Nội">
                                                </div>
                                                <div class="body">
                                                    <h3><a href="http://hus.vnu.edu.vn/tin-tuc-su-kien/tin-tuc-chung/olympic-sinh-hoc-sinh-vien-toan-quoc-nam-2021-se-duoc-to-chuc-tai-truong-dai-hoc-khoa-hoc-tu-nhien-dai-hoc-quoc-gia-ha-noi-65442.html">
                                                        Olympic Sinh học Sinh viên toàn quốc năm 2021 sẽ được tổ chức tại trường Đại học Khoa học Tự nhiên - Đại học Quốc gia Hà Nội</a></h3>
                                                </div>
                                            </div>
                                
                                            <div class="media">
                                                <div class="object">
                                                    <img src="./Nam sinh lớp 11 Trường THPT Chuyên Khoa học Tự nhiên giành huy chương vàng Hóa quốc tế_files/phuong-anh-nhan-giai.jpg" alt="Nữ sinh Trường Đại học Khoa học Tự nhiên nhận Phần thưởng “Nữ sinh viên tiêu biểu trong lĩnh vực Khoa học Công nghệ 2019”">
                                                </div>
                                                <div class="body">
                                                    <h3><a href="http://hus.vnu.edu.vn/tin-tuc-su-kien/tin-tuc-chung/nu-sinh-truong-dai-hoc-khoa-hoc-tu-nhien-nhan-phan-thuong-nu-sinh-vien-tieu-bieu-trong-linh-vuc-khoa-hoc-cong-nghe-2019-65436.html">
                                                        Nữ sinh Trường Đại học Khoa học Tự nhiên nhận Phần thưởng “Nữ sinh viên tiêu biểu trong lĩnh vực Khoa học Công nghệ 2019”</a></h3>
                                                </div>
                                            </div>
                                
                                            <div class="media">
                                                <div class="object">
                                                    <img src="./Nam sinh lớp 11 Trường THPT Chuyên Khoa học Tự nhiên giành huy chương vàng Hóa quốc tế_files/clb-xu-ly-ngon-ngu.png" alt="Đại hội thành lập Câu lạc bộ Xử lí Ngôn ngữ và Tiếng nói Tiếng Việt">
                                                </div>
                                                <div class="body">
                                                    <h3><a href="http://hus.vnu.edu.vn/tin-tuc-su-kien/tin-tuc-chung/dai-hoi-thanh-lap-cau-lac-bo-xu-li-ngon-ngu-va-tieng-noi-tieng-viet-65429.html">
                                                        Đại hội thành lập Câu lạc bộ Xử lí Ngôn ngữ và Tiếng nói Tiếng Việt</a></h3>
                                                </div>
                                            </div>
                                
                                            <div class="media">
                                                <div class="object">
                                                    <img src="./Nam sinh lớp 11 Trường THPT Chuyên Khoa học Tự nhiên giành huy chương vàng Hóa quốc tế_files/pgs-pho-duc-tai-tu-van-tuyen-sinh-tai-hai-phong.jpg" alt="Ngày hội tư vấn tuyển sinh - hướng nghiệp năm 2020 đồng hành, hỗ trợ thí sinh">
                                                </div>
                                                <div class="body">
                                                    <h3><a href="http://hus.vnu.edu.vn/tin-tuc-su-kien/tin-tuc-chung/ngay-hoi-tu-van-tuyen-sinh-huong-nghiep-nam-2020-dong-hanh-ho-tro-thi-sinh-65428.html">
                                                        Ngày hội tư vấn tuyển sinh - hướng nghiệp năm 2020 đồng hành, hỗ trợ thí sinh</a></h3>
                                                </div>
                                            </div>
                                
                                            <div class="media">
                                                <div class="object">
                                                    <img src="./Nam sinh lớp 11 Trường THPT Chuyên Khoa học Tự nhiên giành huy chương vàng Hóa quốc tế_files/anh-vnu-cover.jpg" alt="QS Top 50 Under 50 2021: Lần đầu tiên Đại học Quốc gia Hà Nội có mặt trong nhóm 101-150 đại học hàng đầu thế giới">
                                                </div>
                                                <div class="body">
                                                    <h3><a href="http://hus.vnu.edu.vn/tin-tuc-su-kien/tin-tuc-chung/qs-top-50-under-50-2021-lan-dau-tien-dai-hoc-quoc-gia-ha-noi-co-mat-trong-nhom-101-150-dai-hoc-hang-dau-the-gioi-65417.html">
                                                        QS Top 50 Under 50 2021: Lần đầu tiên Đại học Quốc gia Hà Nội có mặt trong nhóm 101-150 đại học hàng đầu thế giới</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Tin moi cap nhap -->
                                    </div>
                                
                                </div>
                            </div><!--- end Col-lg-3 -->
                            <div class="col-12 col-lg-6 pdr-0 pdl-0" id="mot">
                                <div class="news-details">
                                    <div id="dnn_ctr10930_newsviewer_ctl00_up">
                                        <div class="title">
                                            <h1>
                                            <?php echo  $row['title'] . "<br>"; ?>
                                            </h1>
                                        </div>
                                        <div class="post-meta">
                                            <div>
                                                    <a href="http://hus.vnu.edu.vn/tin-tuc-su-kien/tin-tuc-chung/nam-sinh-lop-11-truong-thpt-chuyen-khoa-hoc-tu-nhien-gianh-huy-chuong-vang-hoa-quoc-te-66482.html#" class="post-date">
                                                        <i class="fa fa-clock-o"></i>
                                                        <?php $time = strtotime($row['update_at']);
                                                            echo  date("h:i d/m/Y",$time) . "<br>"; ?>
													</a>
                                            </div>
                                            <!---List share---->
                                            <div class='social'>
                                                <div class="at-share-btn-elements">
                                                        <a role="button" tabindex="0" class="hvr-float transition" class="at-icon-wrapper at-share-btn at-svc-facebook"  style="background-color: rgb(59, 89, 152); border-radius: 6px;padding: 5px;margin-bottom: 5px; ">
                                                            <span class="at4-visually-hidden"></span>
                                                            <span class="at-icon-wrapper" style="line-height: 20px; height: 20px; width: 20px;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-facebook-1" class="at-icon at-icon-facebook" style="fill: rgb(255, 255, 255); width: 20px; height: 20px;">
                                                                    <title id="at-svg-facebook-1">Facebook</title>
                                                                    <g><path d="M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z" fill-rule="evenodd"></path></g>
                                                                </svg>
                                                            </span>
                                                            <span class="at-label" style="font-size: 10.5px; line-height: 20px; height: 20px; color: rgb(255, 255, 255);">Facebook&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                                        </a>
                                                        <a role="button" tabindex="0" class="hvr-float transition" class="at-icon-wrapper at-share-btn at-svc-twitter" style="background-color: rgb(29, 161, 242); border-radius: 6px;padding: 5px;margin-bottom: 5px; ">
                                                            <span class="at4-visually-hidden"></span>
                                                            <span class="at-icon-wrapper" style="line-height: 20px; height: 20px; width: 20px;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-twitter-2" class="at-icon at-icon-twitter" style="fill: rgb(255, 255, 255); width: 20px; height: 20px;"><title id="at-svg-twitter-2">Twitter</title>
                                                                    <g><path d="M27.996 10.116c-.81.36-1.68.602-2.592.71a4.526 4.526 0 0 0 1.984-2.496 9.037 9.037 0 0 1-2.866 1.095 4.513 4.513 0 0 0-7.69 4.116 12.81 12.81 0 0 1-9.3-4.715 4.49 4.49 0 0 0-.612 2.27 4.51 4.51 0 0 0 2.008 3.755 4.495 4.495 0 0 1-2.044-.564v.057a4.515 4.515 0 0 0 3.62 4.425 4.52 4.52 0 0 1-2.04.077 4.517 4.517 0 0 0 4.217 3.134 9.055 9.055 0 0 1-5.604 1.93A9.18 9.18 0 0 1 6 23.85a12.773 12.773 0 0 0 6.918 2.027c8.3 0 12.84-6.876 12.84-12.84 0-.195-.005-.39-.014-.583a9.172 9.172 0 0 0 2.252-2.336" fill-rule="evenodd"></path></g>
                                                                </svg>
                                                            </span>
                                                            <span class="at-label" style="font-size: 10.5px; line-height: 20px; height: 20px; color: rgb(255, 255, 255);">Twitter&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                                        </a>
                                                        <a role="button" tabindex="0" class="hvr-float transition" class="at-icon-wrapper at-share-btn at-svc-email" style="background-color: rgb(132, 132, 132); border-radius: 6px;padding: 5px;margin-bottom: 5px; ">
                                                            <span class="at4-visually-hidden"></span>
                                                            <span class="at-icon-wrapper" style="line-height: 20px; height: 20px; width: 20px;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-email-3" class="at-icon at-icon-email" style="fill: rgb(255, 255, 255); width: 20px; height: 20px;">
                                                                    <title id="at-svg-email-3">Email</title>
                                                                    <g><g fill-rule="evenodd"></g>
                                                                    <path d="M27 22.757c0 1.24-.988 2.243-2.19 2.243H7.19C5.98 25 5 23.994 5 22.757V13.67c0-.556.39-.773.855-.496l8.78 5.238c.782.467 1.95.467 2.73 0l8.78-5.238c.472-.28.855-.063.855.495v9.087z"></path>
                                                                    <path d="M27 9.243C27 8.006 26.02 7 24.81 7H7.19C5.988 7 5 8.004 5 9.243v.465c0 .554.385 1.232.857 1.514l9.61 5.733c.267.16.8.16 1.067 0l9.61-5.733c.473-.283.856-.96.856-1.514v-.465z"></path></g>
                                                                </svg>
                                                            </span>
                                                            <span class="at-label" style="font-size: 10.5px; line-height: 20px; height: 20px; color: rgb(255, 255, 255);">Email&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                                        </a>
                                                        <a role="button" tabindex="0" class="hvr-float transition" class="at-icon-wrapper at-share-btn at-svc-linkedin" style="background-color: rgb(0, 119, 181); border-radius: 6px;padding: 5px;margin-bottom: 5px; ">
                                                            <span class="at4-visually-hidden"></span>
                                                            <span class="at-icon-wrapper" style="line-height: 20px; height: 20px; width: 20px;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-linkedin-4" class="at-icon at-icon-linkedin" style="fill: rgb(255, 255, 255); width: 20px; height: 20px;">
                                                                    <title id="at-svg-linkedin-4">LinkedIn</title>
                                                                    <g><path d="M26 25.963h-4.185v-6.55c0-1.56-.027-3.57-2.175-3.57-2.18 0-2.51 1.7-2.51 3.46v6.66h-4.182V12.495h4.012v1.84h.058c.558-1.058 1.924-2.174 3.96-2.174 4.24 0 5.022 2.79 5.022 6.417v7.386zM8.23 10.655a2.426 2.426 0 0 1 0-4.855 2.427 2.427 0 0 1 0 4.855zm-2.098 1.84h4.19v13.468h-4.19V12.495z" fill-rule="evenodd"></path></g>
                                                                </svg>
                                                            </span>
                                                            <span class="at-label" style="font-size: 10.5px; line-height: 20px; height: 20px; color: rgb(255, 255, 255);">LinkedIn&nbsp;&nbsp;&nbsp;&nbsp;</span>
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
                                            </div><!---->
                                                
                                            <div style="clear: both !important; float: none;"></div>
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <p>
                                                <strong>
                                                	<?php echo  $row['description'] . "<br>";?>
                                                    </strong>
                                            </p>
                                            <span id="dnn_ctr10930_newsviewer_ctl00_lbContent">
                                            	<?php echo  $row['content'] . "<br>"; }}?>
                                            </span>
                                            <div class="post-tools" style="display: none">
                                                    
                                                <div style="clear: both"></div>
                                            </div>
                                            <ul class="post-tags">
                                                <li><strong>Tags:</strong></li>       
                                            </ul>
                                        </div>

                                        <div class="cl white-bg" style="display: none">
                                        <div class="comment-block">
                                                <div id="dnn_ctr10930_newsviewer_ctl00_update">
                                    
                                                    <div class="block-heading">
                                                        <div class="pull-left">
                                                            <a href="http://hus.vnu.edu.vn/tin-tuc-su-kien/tin-tuc-chung/nam-sinh-lop-11-truong-thpt-chuyen-khoa-hoc-tu-nhien-gianh-huy-chuong-vang-hoa-quoc-te-66482.html#divcomment" class="showcomment" style="display: inline;">
                                                                <strong class="uppercase">Bình luận</strong></a>
                                                        </div>
                                                        <div class="cl"></div>
                                                    </div>
                                                    <div class="block-content mt-10 divcomment"name="divcomment"style="display: none;">
                                                        <div class="row">
                                                                    <div class="col-xs-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Họ tên</label>
                                                                            <input name="dnn$ctr10930$newsviewer$ctl00$txtName" type="text" id="dnn_ctr10930_newsviewer_ctl00_txtName" placeholder="Họ tên của bạn" class="form-control" data-error="Bạn chưa nhập họ tên" required="">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Email</label>
                                                                            <input name="dnn$ctr10930$newsviewer$ctl00$txtEmail" type="text" id="dnn_ctr10930_newsviewer_ctl00_txtEmail" placeholder="Phản hồi khi cần thiết" class="form-control" data-error="Bạn chưa nhập email" required="">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div>
                                                                    </div>
                                                        </div>
                                                        <div class="form-group">
                                                                <label class="control-label">Bình luận</label>
                                                                <textarea name="dnn$ctr10930$newsviewer$ctl00$txtContent" id="dnn_ctr10930_newsviewer_ctl00_txtContent" data-minlength="10" placeholder="Cho chúng tôi biết ý kiến của bạn" rows="3" data-error="Bình luận cần có 10 ký tự trở lên" class="form-control comment" required="" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 74px;"></textarea>
                                                                <div class="help-block with-errors"></div>
                                                                <div id="dnn_ctr10930_newsviewer_ctl00_Panel1">
                                                                    <span>
                                                                        <div class="g-recaptcha" data-sitekey="6LctrT8UAAAAAHOQyujQa-cqLXWyiYsKOmGHc-OJ">
                                                                            <div style="width: 304px; height: 78px;">
                                                                                <div>
                                                                                    <iframe src="./Nam sinh lớp 11 Trường THPT Chuyên Khoa học Tự nhiên giành huy chương vàng Hóa quốc tế_files/anchor.html" width="304" height="78" role="presentation" name="a-5duynnpve6n3" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                                                                </div>
                                                                                <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                                                            </div>
                                                                            <iframe style="display: none;" src="./Nam sinh lớp 11 Trường THPT Chuyên Khoa học Tự nhiên giành huy chương vàng Hóa quốc tế_files/saved_resource.html"></iframe>
                                                                        </div>
                                                                    </span>
                                                                </div>
                                                                <div class="pull-left">
                                                                    <a onclick="return isFormValid();" id="dnn_ctr10930_newsviewer_ctl00_lbtUpdate" class="btn btn-xs font-14 btn-primary" href="javascript:__doPostBack(&#39;dnn$ctr10930$newsviewer$ctl00$lbtUpdate&#39;,&#39;&#39;)" style="color:White;">
                                                                        <strong>&nbsp;&nbsp;Gửi bình luận&nbsp;&nbsp;</strong>
                                                                    </a>
                                                                </div>
                                                                <div class="cl"></div>
                                                        </div>
                                                    </div>      
                                                </div>
                                        </div>
                                        <div class="block-comments pd-10"></div>
                                        <div class="clearfix pagination-wp">
                                            <ul class="pagination pull-left">
                                                <li><a><i class="fa fa-angle-double-left"></i></a></li>     
                                            </ul>
                                            <div class="cl"></div>
                                        </div>
                                        <div class="fb-wp mt-15">
                                            <div>
                                                <strong><i class="fa fa-facebook blue-color"></i>Bình luận trên Facebook</strong>
                                            </div>
                                            <script type="text/javascript">
                                                document.write("<div class='fb-comments' data-href='" + window.location.href + "' data-numposts='5' data-colorscheme='light' data-width='100%'></div>");
                                            </script>
                                            <div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop" data-href="http://hus.vnu.edu.vn/tin-tuc-su-kien/tin-tuc-chung/nam-sinh-lop-11-truong-thpt-chuyen-khoa-hoc-tu-nhien-gianh-huy-chuong-vang-hoa-quoc-te-66482.html" data-numposts="5" data-colorscheme="light" data-width="100%" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=1558554517524029&amp;color_scheme=light&amp;container_width=0&amp;height=100&amp;href=http%3A%2F%2Fhus.vnu.edu.vn%2Ftin-tuc-su-kien%2Ftin-tuc-chung%2Fnam-sinh-lop-11-truong-thpt-chuyen-khoa-hoc-tu-nhien-gianh-huy-chuong-vang-hoa-quoc-te-66482.html&amp;locale=vi_VN&amp;numposts=5&amp;sdk=joey&amp;version=v3.3&amp;width=" style="width: 100%;">
                                                    <span style="vertical-align: bottom; width: 100%; height: 0px;">
                                                        <iframe name="f1c07407649ae4" width="1000px" height="100px" data-testid="fb:comments Facebook Social Plugin" title="fb:comments Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="./Nam sinh lớp 11 Trường THPT Chuyên Khoa học Tự nhiên giành huy chương vàng Hóa quốc tế_files/comments.html" class="" style="border: none; visibility: visible; width: 100%; height: 0px;"></iframe>
                                                    </span>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="cl"></div>
                                    </div>
                                    <div id="dnn_ctr10930_newsviewer_ctl00_UpdateProgress1" style="display:none;" role="status" aria-hidden="true">
                                        <div class="loading" id="loadizng">Loading…</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3" id="ba">
                                <div id="dnn_ctr10930_newsviewer_ctl00_Panel2">
                                    <div id="box_tinhotcat" class="news-lastest">
                                        <!-- Tin noi bat -->
                                        <div class="titletinkhac" style="height: 29px;background: url(http://hus.vnu.edu.vn/hus/img/blog-img/hometintuc.png) no-repeat left bottom #017dc5; color: #fff;float: left; padding: 0 30px;border-radius: 5px 5px 0px 0px;margin-bottom: 10px;"><h5>Tin nổi bật</h5></div>
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-tb">
                                            
                                                    <div class="media">
                                                        <div class="object">
                                                            <img src="http://hus.vnu.edu.vn/DATA//IMAGES/2020/08/dhqg.jpg?width=60&height=60&mode=crop&anchor=middlecenter" alt="CÁC THẦY, CÔ CŨNG HỌC ONLINE">
                                                        </div>
                                                        <div class="body">
                                                            <h3><a href="http://hus.vnu.edu.vn/tin-tuc-su-kien/tin-tuc-chung/cac-thay-co-cung-hoc-online-62098.html">
                                                                CÁC THẦY, CÔ CŨNG HỌC ONLINE</a></h3>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="media">
                                                        <div class="object">
                                                            <img src="./Nam sinh lớp 11 Trường THPT Chuyên Khoa học Tự nhiên giành huy chương vàng Hóa quốc tế_files/c296_10.jpg" alt="Hiệu trưởng Trường THPT Chuyên KHTN khuyên học sinh định hình ước mơ và nỗ lực tự học">
                                                        </div>
                                                        <div class="body">
                                                            <h3><a href="http://hus.vnu.edu.vn/tin-tuc-su-kien/tin-tuc-chung/hieu-truong-truong-thpt-chuyen-khtn-khuyen-hoc-sinh-dinh-hinh-uoc-mo-va-no-luc-tu-hoc-59050.html">
                                                                Hiệu trưởng Trường THPT Chuyên KHTN khuyên học sinh định hình ước mơ và nỗ lực tự học</a></h3>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="media">
                                                        <div class="object">
                                                            <img src="./Nam sinh lớp 11 Trường THPT Chuyên Khoa học Tự nhiên giành huy chương vàng Hóa quốc tế_files/dat-1556502240426.jpg" alt="“Chuyện đỗ đạt” của Đạt: Học bổng tiến sĩ toàn phần 8,4 tỷ đồng từ Mỹ">
                                                        </div>
                                                        <div class="body">
                                                            <h3><a href="http://hus.vnu.edu.vn/tin-tuc-su-kien/tin-tuc-chung/-chuyen-do-dat-cua-dat-hoc-bong-tien-si-toan-phan-8-4-ty-dong-tu-my-59025.html">
                                                                “Chuyện đỗ đạt” của Đạt: Học bổng tiến sĩ toàn phần 8,4 tỷ đồng từ Mỹ</a></h3>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="media">
                                                        <div class="object">
                                                            <img src="./Nam sinh lớp 11 Trường THPT Chuyên Khoa học Tự nhiên giành huy chương vàng Hóa quốc tế_files/nhaphoc1.jpg" alt="Trường Đại học Khoa học Tự nhiên đón tân sinh viên nhập học, trao học bổng cho Thủ khoa và Á khoa đầu vào">
                                                        </div>
                                                        <div class="body">
                                                            <h3><a href="http://hus.vnu.edu.vn/tin-tuc-su-kien/tin-tuc-chung/truong-dai-hoc-khoa-hoc-tu-nhien-don-tan-sinh-vien-nhap-hoc-trao-hoc-bong-cho-thu-khoa-va-a-khoa-dau-vao-59000.html">
                                                                Trường Đại học Khoa học Tự nhiên đón tân sinh viên nhập học, trao học bổng cho Thủ khoa và Á khoa đầu vào</a></h3>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="media">
                                                        <div class="object">
                                                            <img src="./Nam sinh lớp 11 Trường THPT Chuyên Khoa học Tự nhiên giành huy chương vàng Hóa quốc tế_files/hdyes_1 (3).jpg" alt="Khởi động giải thưởng thường niên Honda Y-E-S cho sinh viên Trường Đại học Khoa học Tự nhiên">
                                                        </div>
                                                        <div class="body">
                                                            <h3><a href="http://hus.vnu.edu.vn/tin-tuc-su-kien/tin-tuc-chung/khoi-dong-giai-thuong-thuong-nien-honda-y-e-s-cho-sinh-vien-truong-dai-hoc-khoa-hoc-tu-nhien-58842.html">
                                                                Khởi động giải thưởng thường niên Honda Y-E-S cho sinh viên Trường Đại học Khoa học Tự nhiên</a></h3>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="media">
                                                        <div class="object">
                                                            <img src="./Nam sinh lớp 11 Trường THPT Chuyên Khoa học Tự nhiên giành huy chương vàng Hóa quốc tế_files/1_27.JPG" alt="Kỷ niệm 20 năm thành lập Trung tâm Khoa học Vật liệu: Trân trọng lịch sử - Truyền lửa đam mê cho hiện tại và tương lai">
                                                        </div>
                                                        <div class="body">
                                                            <h3><a href="http://hus.vnu.edu.vn/tin-tuc-su-kien/tin-tuc-chung/ky-niem-20-nam-thanh-lap-trung-tam-khoa-hoc-vat-lieu-tran-trong-lich-su-truyen-lua-dam-me-cho-hien-tai-va-tuong-lai-58705.html">
                                                                Kỷ niệm 20 năm thành lập Trung tâm Khoa học Vật liệu: Trân trọng lịch sử - Truyền lửa đam mê cho hiện tại và tương lai</a></h3>
                                                        </div>
                                                    </div>
                                        </div>
                                        <!-- End Tin noi bat -->
                                    </div>
                                </div>
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
                    </div><!-- End_Module_10930 -->
                    </div></div></div></div></div>
                </div>
            </div>
        </div>
    </div>
        <!--*********End Body*******************--------->
        <!---start footer----->
        <?php include "../../footer.html" ?>
        <!----end footer------->