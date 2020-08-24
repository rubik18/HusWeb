<?php 
	require 'connectMySQL.php';
	// $sql = "SELECT * FROM detai_duan";
  $connect->set_charset("utf8");
 //  $query = mysqli_query($connect, $sql) or die ("erorr!!"); 
 ?>

 <?php
 	if (isset($_GET['search'])) {
 		$search = "";
 		if ($_GET['date_from']) {
 			$search .= $search === '' ? 'approval_date >= '.$_GET['date_from'].'-01-01' : 'AND approval_date <= '.$_GET['date_from'].'-01-01';
 		}

 		if ($_GET['date_to']) {
 			$search .= $search === '' ? 'acceptance_date <= '.$_GET['date_to'].'-12-31' : ' AND acceptance_date <= '.$_GET['date_to'].'-12-31';
 		}

 		// if ($_GET['topic_name']) {
 		// 	$search .= $search === '' ? 'name LIKE "%'.$_GET['topic_name'].'%' : ' AND name LIKE "%'.$_GET['topic_name'].'%';
 		// }

 		// if ($_GET['topic_type']) {
 		// 	$search .= $search === '' ? 'type = '.$_GET['topic_type'] : '" AND type = "'.$_GET['topic_type'];
 		// }
 		// if ($_GET['topic_type']) {
 		// 	$search .= $search === '' ? 'type = '.$_GET['topic_type'] : '" ';
 		// }

 		$sqlSearch = 'SELECT * FROM detai_duan WHERE '.$search;
 		var_dump($sqlSearch);
 		$project = mysqli_query($connect,$sqlSearch) or die("k truy vấn được!");
 		// var_dump($project);
 		$num1 = mysqli_num_rows($project);
 		// var_dump($num1);

 		
 	}
 ?>

<title>Đề tài dự án CNKH</title>
<!-- start header -->
<?php include "../header.html" ?>
<!-- end header -->
<link rel="stylesheet" type="text/css" href="/php-intership-team/css/style-nhung.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="main-content-wrapper">
    <div class="container">
        <!-- thanh gioi thieu -->
        <div class="breakcrum mb-30">
            <div class="row">
                <div class="col-12">
                    <ol class="breadcrumb">
                        <a href="/php-intership-team/frontend/khoa-hoc-cong-nghe/khoa-hoc-cong-nghe.php" class="item">Khoa học - Công nghệ</a>
                        &nbsp;
                        <img alt="*" src="\php-intership-team\img\img-nhung/breadcrumb.gif">
                        &nbsp;
                        <a href="/php-intership-team/frontend/khoa-hoc-cong-nghe/de-tai-du-an-CNKH.php" class="item">Đề tài, dự án NCKH</a>
                        
                    </ol>
                </div>
            </div>
        </div>
        <!-- end thanh giới thiệu-->
        <!-- start nội dung-->
        <div class="world-latest-articles">
            <div class="row">
                <!-- start nội dung-Đề tài dự án CNKH-->
                <div class="col-12 col-lg-12">
                    <div class="single-blog-content mb-50">
                        <div>
                            <div class="DnnModule ">
                                <a name="10672"></a>
                                <link href="" rel="stylesheet">
                                <div class="post-container">
                                	<h1 class="post-title"><span class="Head">Đề tài, dự án NCKH</span></h1>
                                	<div class="post-content">
                                		<div>
											<div class="docralam">
												<div class="box box-info">
													<div class="form-horizontal">
														<form action="de-tai-du-an-CNKH-search.php" method="get">
															<div class="row">
																<div class="col-md-3">
																	<label class="col-md-12">Năm công bố</label>
																	<div class="col-md-6tim">
									                                    <select  name="date_from"  class="form-control">
																			<option value="">Từ</option>
																			<option value="2000">2000</option>
																			<option value="2001">2001</option>
																			<option value="2002">2002</option>
																			<option value="2003">2003</option>
																			<option value="2004">2004</option>
																			<option value="2005">2005</option>
																			<option value="2006">2006</option>
																			<option value="2007">2007</option>
																			<option value="2008">2008</option>
																			<option value="2009">2009</option>
																			<option value="2010">2010</option>
																			<option value="2011">2011</option>
																			<option value="2012">2012</option>
																			<option value="2013">2013</option>
																			<option value="2014">2014</option>
																			<option value="2015">2015</option>
																			<option value="2016">2016</option>
																			<option value="2017">2017</option>
																			<option value="2018">2018</option>
																			<option value="2019">2019</option>
																			<option value="2020">2020</option>
																		</select>
																	</div>
																	<div class="col-md-6tim">
									                                    <select name="date_to"  class="form-control">
																			<option value="">Đến</option>
																			<option value="2000">2000</option>
																			<option value="2001">2001</option>
																			<option value="2002">2002</option>
																			<option value="2003">2003</option>
																			<option value="2004">2004</option>
																			<option value="2005">2005</option>
																			<option value="2006">2006</option>
																			<option value="2007">2007</option>
																			<option value="2008">2008</option>
																			<option value="2009">2009</option>
																			<option value="2010">2010</option>
																			<option value="2011">2011</option>
																			<option value="2012">2012</option>
																			<option value="2013">2013</option>
																			<option value="2014">2014</option>
																			<option value="2015">2015</option>
																			<option value="2016">2016</option>
																			<option value="2017">2017</option>
																			<option value="2018">2018</option>
																			<option value="2019">2019</option>
																			<option value="2020">2020</option>
																		</select>
                        											</div>
								                                </div>
								                                <div class="col-md-4">
								                                	<label>Tên đề tài</label>
								                                		<input  type="text" name="topic_name" class="form-control" placeholder="Tên đề tài" value="<?php if(isset($_GET['topic_name'])) {echo($_GET['topic_name']);} ?>" />
								                                </div>
								                                <div class="col-md-3">
								                                	<label>Cấp độ</label>
								                                	<select name="topic_type" class="form-control">
																		<option value="">Tất cả</option>
																		<option value="Nhà nước">Nhà nước</option>
																		<option value="NAFOSTED">NAFOSTED</option>
																		<option value="ĐH Quốc Gia HN">ĐH Quốc Gia HN</option>
																		<option value="Hợp tác Bộ, Ngành, Địa phương">Hợp tác Bộ, Ngành, Địa phương</option>
																		<option value="Cơ sở">Cơ sở</option>
																		<option value="Hợp đồng dịch vụ khoa học và chuyển giao công nghệ">Hợp đồng dịch vụ khoa học và chuyển giao công nghệ</option>
																		<option value="Sản phẩm ứng dụng">Sản phẩm ứng dụng</option>
																		<option value="Cấp Bộ">Cấp Bộ</option>
																		<option value="Quỹ ARC">Quỹ ARC</option>
																		<option value="Tỉnh">Tỉnh</option>
																		<option value="Nghị đinh thư">Nghị đinh thư</option>
																		<option value="Dự án hợp tác QT">Dự án hợp tác QT</option>
																		<option value="Hợp đồng CQ ngoài">Hợp đồng CQ ngoài</option>
																	</select>						
								                                </div>
								                                <div class="col-md-2">
								                                	<label>&nbsp;</label>	
								                                		<input type="submit" name="search" value="Tìm kiếm" class="btn btn-info pull-right timkiemdtda" style="font-weight: bold;"/>
								                                </div>
															</div>
														</form>
													</div>
												</div>
												</div>
												<table width="100%" style="padding: 10px 0px 5px 0px;">
													<tbody>
														<tr>
															<td valign="bottom">
																<table style="background-color: #d2d2d2; height: 20px; line-height: 20px;" width="100%">
																	<tbody>
																		<tr>
																			<td valign="middle">Tổng số có: 
														                        <span style="color: maroon ;font-weight:bold;">1921</span> Bản ghi
											                                </td>
															                <td align="right">Hiển thị
														                        <select name="dnn$ctr11036$Main$ctl00$ddlPageSize" onchange="javascript:setTimeout('__doPostBack(\'dnn$ctr11036$Main$ctl00$ddlPageSize\',\'\')', 0)" >
																					<option value="10">10</option>
																					<option value="20">20</option>
																					<option value="30">30</option>
																				</select> số lượng / trang
											                                </td>
																		</tr>
																	</tbody>
																</table>
															</td>
														</tr>
														<tr>
															<td>
																<table class="table table-bordered table-striped" cellspacing="0" rules="all" style="width:100%;border-collapse:collapse;">
																	<tbody>
																		<tr align="center" style="color:White;background-color:#007DC5;font-size:11px;font-weight:bold;">
																			<td>Mã số đề tài</td><td>Tên đề tài</td><td>Chủ nhiệm đề tài</td><td>Tên đơn vị</td><td>Loại đề tài</td><td>Ngày Phê duyệt</td><td>Ngày nghiệm thu</td><td>Kết quả</td>
																		</tr>

																	<?php 
																	if(isset($_GET['search'])){
																		$s= addslashes($_GET['topic_name']);
																		if(empty($s)){
																			$query = mysqli_query($connect,"SELECT * from detai_duan;");
																			if (mysqli_num_rows($query)>0) {
									                                                
								                                                    while ($row = mysqli_fetch_assoc($query)) {      
										                                ?>
																		<tr class="TRgrid">
																			<td style="width:70px;"><?php echo $row['id_project']; 
																			?></td>
																			<td style="width:300px;"><?php echo $row['name'];  ?></td>
																			<td style="width:150px;"> <?php echo $row['lead_researcher'];  ?></td>
																			<td style="width:100px;"><?php echo $row['workplace'];  ?></td>
																			<td style="width:120px;"><?php echo $row['type'];  ?></td>
																			<td align="center" style="width:100px;"><?php echo $row['approval_date'];  ?></td>
																			<td align="center" style="width:100px;"><?php echo $row['acceptance_date'];  ?></td>
																			<td align="center" style="width:100px;"><?php echo $row['result'];  ?></td>
																		</tr>
																		<?php 
																					}
									                                            } 
									                                        } 
									                                     else{
																		?>
																		
																		<?php 
																		
																			if (isset($_GET['search'])){
									                                            $topic = $_GET['topic_name'];
									                                            $type = $_GET['topic_type'];
									                                            $date_from = $_GET['date_from'];
									                                            $date_to = $_GET['date_to'];
									                                            if ($topic !="" || $type !="" || $date_from !="" || $date_to !="") {
									                                            	                      
									                                            	$select="SELECT * FROM detai_duan WHERE `name` LIKE '%$topic%' AND `type` LIKE'%$type%' OR `approval_date` (between (`approval_date` LIKE '%$date_from%') and (`acceptance_date` LIKE '%$date_to%') )" or die("Không tìm thấy");
									                                            	// var_dump($select);die;
									                                            	$project = mysqli_query($connect,$select) or die("k truy vấn được!");
									                                            	// var_dump($project); 
									                                                $num1 = mysqli_num_rows($project);
									                                                // var_dump($num1);
									                                                if ($num1 > 0){ 
								                                                    while ($row1 = mysqli_fetch_array($project)) {

																		
										                                ?>
										                                
																		<tr class="TRgrid">
																			<td style="width:70px;"><?php echo $row1['id_project']; 
																			?></td>
																			<td style="width:300px;"><?php echo $row1['name'];  ?></td>
																			<td style="width:150px;"> <?php echo $row1['lead_researcher'];  ?></td>
																			<td style="width:100px;"><?php echo $row1['workplace'];  ?></td>
																			<td style="width:120px;"><?php echo $row1['type'];  ?></td>
																			<td align="center" style="width:100px;"><?php echo $row1['approval_date'];  ?></td>
																			<td align="center" style="width:100px;"><?php echo $row1['acceptance_date'];  ?></td>
																			<td align="center" style="width:100px;"><?php echo $row1['result'];  ?></td>
																		</tr>
																		
																	<?php        
							                                                    	}
							                                                   	}
							                                                   	else {
								                                                    echo "Không tìm thấy kết quả!";
								                                                	}
							                                                	} 
						                                            	 	}
						                                            	}
							                                            
									                                        
									                                    }
									                                ?> 
																		
																	</tbody>
																</table>
															</td>
														</tr>
														<tr>
															<td>                        
																<div class="list-page">

																    <ul class="pagination pagination-split">
																         <li></li>
																         <li><a class="active"  href="">1</a></li>
																         <li><a  href=" ">2</a></li>
																         <li><a  href="">3</a></li>
																         <li><a  href=" ">4</a></li>
																         <li><a  href=" ">5</a></li>
																         <li><a  class="inactive" href="">Tiếp</a></li>
																    </ul>
																    <li><a class="inactive" href="de-tai-du-an-CNKH.php?page=<?php echo $page-1;?>" style="padding-top: 10px!important"><i class="fa fa-angle-double-left"></i></a></li>
									                                <li><a href="de-tai-du-an-CNKH.php">1</a></li>
									                                <?php for ($x = 2; $x <= 3 && $x<=$count; $x++) {
								                                      if( $x==$page ){ ?>
								                                      	<li><a class="active" href="de-tai-du-an-CNKH.php?page=<?php echo $x ?>"><?php echo $x; ?></a></li>

									                                <?php } elseif($x!=$page){ ?>
									                                <li><a  href="de-tai-du-an-CNKH.php?page=<?php echo $x ?>"><?php echo $x; ?></a></li>
									                                <?php }} ?>
									                                <?php } ?>
									                                <!-- ////// -->
									                                <?php
										                            $list = ceil($count/10);
										                            for($j=2 ; $j<=$list ; $j++){
										                                $k = ($j-1)*10+1;
										                                if($page>=$k && $page<$k+10 && $page<$count){ ?>
										                                    <li><a class="inactive" href="de-tai-du-an-CNKH.php?page=<?php echo $page-1;?>" style="padding-top: 10px!important"><i class="fa fa-angle-double-left"></i></a></li>
										                                <?php for ($x = $k; $x <$k+10 && $x<=$count; $x++) {
										                                        if( $x==$page ){
										                                ?>
										                                <li><a class="active" href="de-tai-du-an-CNKH.php?page=<?php echo $x ?>"><?php echo $x; ?></a></li>

										                                <?php   }else if($x!=$page){ ?>
										                                <li><a href="de-tai-du-an-CNKH.php?page=<?php echo $x ?>"><?php echo $x; ?></a></li>
										                            <?php }} ?>
									                                <li><a  class="inactive" href="de-tai-du-an-CNKH.php?page=<?php echo $page+1;?>" style="padding-top: 10px !important"><i class="fa fa-angle-double-right"></i></a></li>
									                                <?php }} ?>
									                                <?php  if($page == $count && $count>2){?>
								                                    <li><a class="inactive" href="de-tai-du-an-CNKH.php?page=<?php echo $page-1 ?>" style="padding-top: 10px!important"><i class="fa fa-angle-double-left"></i></a></li>
								                                    <li><a id="dnn_ctr10929_newsviewer_ctl00_vbPaging_btnPg1"  href="de-tai-du-an-CNKH.php?page=<?php echo $page-2 ?>"><?php echo $page-2 ?></a></li>
								                                    <li>
								                                    <a id="dnn_ctr10929_newsviewer_ctl00_vbPaging_btnPg1"  href="de-tai-du-an-CNKH.php?page=<?php echo $page-1 ?>"><?php echo $page-1 ?></a></li>
								                                    <li>
								                                    <a id="dnn_ctr10929_newsviewer_ctl00_vbPaging_btnPg1" class="active"  href="de-tai-du-an-CNKH.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>
								                                   <?php }?>
																</div>
																<?php
									                                    for ($i = 1; $i <= $total_page; $i++){
									                                    	if ($i == $current_page){
									                                ?>
															        <li><a class="active"  href="de-tai-du-an-CNKH.php?page=1">1</a></li>
															    	<?php }  else{?>

															        <li><a  href="de-tai-du-an-CNKH.php?page=<?php echo $i ?>"><?php echo $i; ?></a></li>
															    	<?php } }?>
															    	<?php if ($current_page < $total_page && $total_page > 1){ ?>
															        <li><a  class="inactive" href="de-tai-du-an-CNKH.php?page=<?php echo ($current_page+1) ?>">Tiếp</a></li>
															         
															     	<?php } 
									            //                     	
									                                ?>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
                                		</div>
                                	</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end nội dung - Đề tài dự án CNKH-->
               
            </div>
        </div>
        <!-- end nội dung -->

    </div>
</div>
<!--start footer -->
<?php include "../footer.html" ?>
<!-- end footer -->