<title>Trường đại học Khoa Học Tự Nhiên</title>

    <!---start header----->
    <?php include "../header.html" ?>
    <!----end header------->

    <?php 
        require 'connectSQL.php';
        $conn->set_charset("utf8");
        $query = mysqli_query($conn,"select * from `new`,`category` 
            where category.id = new.id_category 
            ORDER BY RAND() LIMIT 3;");
     
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
                                    <h5><a href="">Tin tức</a></h5>
                                </div>  
                            </div>
                                <?php if(mysqli_num_rows($query) > 0){
                                    $i = 0 ;
                                    while($row = mysqli_fetch_assoc($query)){      
                                ?>
                                <div class="single-blog-post post-style-4 d-flex align-items-center">
                                    <div class="post-thumbnail">
                                        <a href="">
                                        <img src="<?php echo $row['avatar'];?>" alt="<?php echo substr($row['title'], 0, 100); ?>...">
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <a href="" class="headline">
                                            <h5><?php echo substr($row['title'], 0, 100); ?>...</h5>
                                        </a>
                                        <p><?php echo substr($row['description'], 0, 150); ?></p>
                                        <div class="post-meta">
                                            <p><a href="" class="post-date" style="color: grey">
                                                <?php 
                                                    $time = strtotime($row['created_at']);
                                                    echo  date("d/m/Y",$time); ?>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php
                                }}
                            ?>
                        </div>
                    </div>
                    
                    <div class="col-12 col-lg-4">
                        <div>
                            <div class="titlethongbao">
                                <h5><a href="">Thông báo</a></h5>
                            </div>
                            <div class="single-blog-post post-style-tb">
                                <div class="media">
                                    <div class="object">
                                        <span class="day">07</span>
                                        <span class="date">28/2020</span>
                                    </div>
                                    <div class="body">
                                        <h3><a href="">Tuyển sinh Khóa 1 chương trình liên kết quốc tế đào tạo Thạc sĩ Vật lý, chuyên ngành ...</a></h3>
                                    </div>
                                </div>
                                
                                <div class="media">
                                    <div class="object">
                                        <span class="day">07</span>
                                        <span class="date">27/2020</span>
                                    </div>
                                    <div class="body">
                                        <h3><a href="">Tuyển sinh thạc sĩ và tiến sĩ đợt 2 năm 2020...</a></h3>
                                    </div>
                                </div>
                                
                                <div class="media">
                                    <div class="object">
                                        <span class="day">07</span>
                                        <span class="date">27/2020</span>
                                    </div>
                                    <div class="body">
                                        <h3><a href="">Danh sách ứng viên nộp hồ sơ xét công nhận đạt tiêu chuẩn chức danh GS, PGS năm ...</a></h3>
                                    </div>
                                </div>
                                
                                <div class="media">
                                    <div class="object">
                                        <span class="day">07</span>
                                        <span class="date">24/2020</span>
                                    </div>
                                    <div class="body">
                                        <h3><a href="">Nhập học cho thí sinh trúng tuyển đào tạo tiến sĩ đợt 1 năm 2020...</a></h3>
                                    </div>
                                </div>
                                
                                <div class="media">
                                    <div class="object">
                                        <span class="day">07</span>
                                        <span class="date">24/2020</span>
                                    </div>
                                    <div class="body">
                                        <h3><a href="">Nhập học cho thí sinh trúng tuyển đào tạo thạc sĩ đợt 1 năm 2020...</a></h3>
                                    </div>
                                </div>
                                
                                <div class="media">
                                    <div class="object">
                                        <span class="day">07</span>
                                        <span class="date">24/2020</span>
                                    </div>
                                    <div class="body">
                                        <h3><a href="">Thông tin tóm tắt LATS của NCS Lê Quý Thưởng...</a></h3>
                                    </div>
                                </div>
                                
                                <div class="media">
                                    <div class="object">
                                        <span class="day">07</span>
                                        <span class="date">24/2020</span>
                                    </div>
                                    <div class="body">
                                        <h3><a href="">Thông tin LATS của NCS Trần Bảo Trâm...</a></h3>
                                    </div>
                                </div>
                                
                                <div class="media">
                                    <div class="object">
                                        <span class="day">07</span>
                                        <span class="date">22/2020</span>
                                    </div>
                                    <div class="body">
                                        <h3><a href="">Thông tin tóm tắt LATS của NCS Vũ Văn Tâm...</a></h3>
                                    </div>
                                </div>
                                
                                <div class="media">
                                    <div class="object">
                                        <span class="day">07</span>
                                        <span class="date">16/2020</span>
                                    </div>
                                    <div class="body">
                                        <h3><a href="">Chương trình Học bổng SNU President Fellowship - SPF...</a></h3>
                                    </div>
                                </div>
                                
                                <div class="media">
                                    <div class="object">
                                        <span class="day">07</span>
                                        <span class="date">16/2020</span>
                                    </div>
                                    <div class="body">
                                        <h3><a href="">Thông tin LATS của NCS Trần Thị Huế...</a></h3>
                                    </div>
                                </div>                                 
                            </div>
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
                                    <h5><a href="">Sự kiện</a></h5>
                                </div>
                            </div>
                            
                            <div class="sukiencontent">
                                <div class="row">
                                    <div class="col-12 col-lg-6 pdr-10">
                                        <div class="col-12 col-lg-12 mrb-20 pd-0">
                                            <img id="dnn_View_ltr1img" src="/php-intership-team/img/main/nhap-hoc-lop-10-thpt-chuyen-khtn-1521-0.jfif">
                                            <div class="caption">
                                                <h4><a style="text-decoration: none" href="">Lễ bế giảng và Trao bằng Cử nhân Khoa học hệ Đại học Chính quy năm 2020</a></h4>
                                                <p><i class="fa fa-clock-o"></i>29/07/2020</p>
                                                <p><i class="fa fa-map-marker"></i>Hội trường Ngụy Như Kon Tum, 19 Lê Thánh Tông, Hoàn Kiếm, Hà Nội</p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-12 pd-0">
                                            <div class="row">
                                                <div class="col-12 col-lg-6 pdr-10">
                                                    <img id="dnn_View_ltr3img" src="/php-intership-team/img/main/le-ky-ket-hop-tac-dao-tao-thac-si-khoa-hoc-du-lieu-1521-0.jpg">
                                                    <div class="caption2">
                                                        <h4><a style="text-decoration: none" href="">Lễ ký kết hợp tác đào tạo Thạc sĩ Khoa học Dữ liệu &amp; Tọa đàm Nhân lực chất lượng cao Khoa học Dữ liệu</a></h4>
                                                        <p><i class="fa fa-clock-o"></i> 18/07/2020</p>
                                                        <p><i class="fa fa-map-marker"></i>Phòng hội thảo tầng 10, Thư viện Tạ Quang Bửu, Trường Đại học Bách Khoa Hà Nội, (cổng đường Trần Đại Nghĩa), Số 1 Đại Cồ Việt, Hai Bà Trưng, Hà Nội</p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 pdr-0">
                                                    <img id="dnn_View_ltr4img" src="/php-intership-team/img/main/-1521-0.png">
                                                    <div class="caption2">
                                                        <h4><a style="text-decoration: none" href="">Hội thảo định hướng nghề nghiệp và ngày hội phỏng vấn việc làm</a></h4>
                                                        <p><i class="fa fa-clock-o"></i>14/07/2020</p>
                                                        <p><i class="fa fa-map-marker"></i>Tầng 7 nhà T5</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 pdl-10">
                                        <div class="col-12 col-lg-12 mrb-20 pd-0">
                                            <div class="row">
                                                <div class="col-12 col-lg-6 pdr-10">
                                                    <img id="dnn_View_ltr5img" src="/php-intership-team/img/main/20161208152955087095_THPT%20CHUY%c3%8aN%20KHOA%20H%e1%bb%8cC%20T%e1%bb%b0%20NHI%c3%8aN04.jpg">
                                                    <div class="caption2">
                                                        <h4><a style="text-decoration: none" href="">Thi tuyển THPT Chuyên Khoa học Tự nhiên</a></h4>
                                                        <p><i class="fa fa-clock-o"></i>12/07/2020</p>
                                                        <p><i class="fa fa-map-marker"></i>Trường Đại học Khoa học Tự nhiên, 334 Nguyễn Trãi, Thanh Xuân, Hà Nội</p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 pdr-0">
                                                    <img id="dnn_View_ltr6img" src="/php-intership-team/img/main/le-trao-quyet-dinh-bo-nhiem-2-pho-hieu-truong-1521-1.JFIF">
                                                    <div class="caption2">
                                                        <h4><a style="text-decoration: none" href="">Lễ trao Quyết định bổ nhiệm 2 Phó Hiệu trưởng</a></h4>
                                                        <p><i class="fa fa-clock-o"></i>02/07/2020</p>
                                                        <p><i class="fa fa-map-marker"></i>Phòng 418 nhà T1, Trường Đại học Khoa học Tự nhiên
                                                        334 Nguyễn Trãi, Thanh Xuân, Hà Nội</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-12 pd-0">
                                            <img id="dnn_View_ltr2img" src="/php-intership-team/img/main/hoi-nghi-cong-chuc-vien-chuc-nguoi-lao-dong-va-ton-1521-1.jpg">
                                            <div class="caption">
                                                <h4><a style="text-decoration: none" href="">Hội nghị Công chức, Viên chức, Người lao động và Tổng kết năm học 2019 - 2020</a></h4>
                                                <p>23/07/2020</p>
                                                <p>Giảng đường lớn tầng 7, nhà T5, Trường Đại học Khoa học Tự nhiên</p>
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
