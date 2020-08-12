<title>Tìm kiếm</title>
<link rel="stylesheet" type="text/css" href="/php-intership-team/css/module.css">
<link rel="stylesheet" type="text/css" href="/php-intership-team/css/bootstrap-v4.0.css">

    <!---start header----->
    <?php include "../header.html" ?>
    <!----end header------->

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
                            <div id="dnn_ContentPane">
                                <div class="DnnModule DnnModule-Tintc-Tmkim DnnModule-2934"><a name="2934"></a>
                                    <div id="dnn_ctr2934_ContentPane">
                                        <div id="dnn_ctr2934_ModuleContent">    
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
                                            <div id="dnn_ctr2934_Main_ctl00_plSearch" class="resultsearch" onkeydown="return __dnn_KeyDown('13', 'javascript:__doPostBack(%27dnn$ctr2934$Main$ctl00$btnSearch%27,%27%27)', event);">
                                                <div class="row">
                                                    <div class="col-12 col-md-12">
                                                        <div style="width: 85%; float: left;">
                                                            <input name="dnn$ctr2934$Main$ctl00$txtSearch" type="text" id="dnn_ctr2934_Main_ctl00_txtSearch" style="border-color:#ECECEC;border-width:1px;border-style:Solid;font-size:17px;height:35px;width:100%;">
                                                        </div>
                                                        <div style="padding-left: 5px; float: left; width: 70px; margin-top: 3px;">
                                                            <input type="submit" name="dnn$ctr2934$Main$ctl00$btnSearch" value="Tìm kiếm" id="dnn_ctr2934_Main_ctl00_btnSearch" class="button_Search" style="background-color:yellow;border-color:darkred;border-width:1px;border-style:solid;font-weight:bold;height:30px;width:80px;">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12">
                                                        <ul class="ketquasearch">
                                                            <li><a id="dnn_ctr2934_Main_ctl00_hplgooogle" href="/php-intership-team/frontend/main/tim-kiem/g.php?q=">Kết quả từ Google</a></li>
                                                            <li class="active"><a href="javascript:void(0)">Kết quả từ Website</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-12 col-md-12">
                                                        <div style="margin-top: 5px; float: left; display: none;">
                                                            <div style="width: 260px !important; float: left;">
                                                                <select name="dnn$ctr2934$Main$ctl00$ddlCategory" onchange="javascript:setTimeout('__doPostBack(\'dnn$ctr2934$Main$ctl00$ddlCategory\',\'\')', 0)" id="dnn_ctr2934_Main_ctl00_ddlCategory" class="chosen-select" style="height:28px;width:240px;">

                                                                </select>
                                                            </div>
                                                            <div style="width: 120px !important; float: left;">
                                                                <div style="width: 100px !important;">
                                                                    <input name="dnn$ctr2934$Main$ctl00$txtDateFrom" type="text" id="dnn_ctr2934_Main_ctl00_txtDateFrom" class="date" placeholder="Từ ngày" style="height:28px;width:96px;">
                                                                </div>
                                                            </div>
                                                            <div style="width: 120px !important; float: left;">
                                                                <div style="width: 100px !important;">
                                                                    <input name="dnn$ctr2934$Main$ctl00$txtDateTo" type="text" id="dnn_ctr2934_Main_ctl00_txtDateTo" class="date" placeholder="Đến ngày" style="height:28px;width:96px;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="list_news" style="margin-top: 10px; padding-top: 10px; border-top: dashed 1px #ccc;">
                                                            <div class="list-news">
                                                                <div class="list-article">
                                                                    <ul class="list-item">
                                                                        
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix pagination-wp">
                                                                <ul class="pagination pull-left">
                                                                    <li><a><i class="fa fa-angle-double-left"></i></a>
                                                                    </li>
                                                                        <div>
                                                                            <ul class="pagination pagination-split">
                                                                                <li>
                                                                                    </li>
                                                                                <li>
                                                                                    </li>
                                                                                <li>
                                                                                    </li>
                                                                                <li>
                                                                                    </li>
                                                                                <li>
                                                                                    </li>
                                                                                <li>
                                                                                    </li>
                                                                                <li>
                                                                                    <a id="dnn_ctr2934_Main_ctl00_vbPaging_btncuoi" class="inactive pagelast" href="/php-intership-team/frontend/main/tim-kiem.php?page=0">Trang cuối</a></li>
                                                                                <li>
                                                                                    </li>
                                                                            </ul>
                                                                        </div>
                                                                </ul>
                                                                <div class="cl"></div>
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
                </div>
            </div>
        </div>
    </div>

    <!---start footer----->
    <?php include "../footer.html" ?>
    <!----end footer------->