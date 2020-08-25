<?php 
	require 'connectMySQL.php';
	// $sql = "SELECT * FROM detai_duan";
  $connect->set_charset("utf8");
 //  $query = mysqli_query($connect, $sql) or die ("erorr!!"); 
  	$query_type= mysqli_query($connect, "SELECT `name_type` from `type_topic_project`") or die("chịu! không thấy!"); 
 ?>
 <?php
    $sqllist = "SELECT COUNT(*) from `topic_project`, `type_topic_project` WHERE topic_project.id_type= type_topic_project.id and topic_project.id_type in (1,2,3,4,5)";
    $query=mysqli_query($connect, $sqllist) or die("connected error!!");
    // var_dump($resultlist);
    $number= mysqli_num_rows($query);
    $row_page=mysqli_fetch_assoc($query);
    // var_dump($row_page);
    $total_record=$row_page['COUNT(*)'];
    // var_dump($total_record); die;
    $current_page=isset($_GET['page']) ? $_GET['page'] : 1;
     // var_dump($current_page);
    while($row_limit=mysqli_fetch_assoc(mysqli_query($connect, "SELECT `size` from page_size"))){
    $limit = $row_limit['size'];}
    // var_dump($limit);
    $total_page=ceil($total_record/$limit);
    // var_dump($total_page);
    if($current_page > $total_page){
    	$current_page = $total_page;
    }else if($current_page < 1){
    	$current_page =1;
    }
    $start = ($current_page - 1) * $limit;
    // var_dump($start);



if(!isset($_GET['search'])){
	
	if(empty($topic) && empty($type) && empty($date_from) && empty($date_to)){
		$query = mysqli_query($connect,"SELECT * from `topic_project`, `type_topic_project` WHERE topic_project.id_type= type_topic_project.id and topic_project.id_type in (1,2,3,4,5)  LIMIT $start, $limit; " );
		$number= mysqli_num_rows($query); 
		// var_dump($query);
		// if (mysqli_num_rows($query)>0) {
  //   //         while ($row = mysqli_fetch_assoc($query)) {
  //   //         // var_dump($row);die;   
    			
		// 		// }
  //           } 
        } 
     else{
	?>
	
	<?php
	    if(isset($_GET['search'])){   
	    $topic= $_GET['topic_name'];
		$type = $_GET['topic_type'];
        $date_from = $_GET['date_from'];
        $date_to = $_GET['date_to'];
        }
	}
    
} else{
	 if(isset($_GET['search'])){   
	    $topic= $_GET['topic_name'];
		$type = $_GET['topic_type'];
        $date_from = $_GET['date_from'];
        $date_to = $_GET['date_to'];
        if ($topic !="" || $type !="" || $date_from !="" || $date_to !="") {
        	$select="SELECT * FROM `topic_project`, `type_topic_project` WHERE type_topic_project.id= topic_project.id_type and topic_project.id_type in (1,2,3,4,5)  and `name` LIKE '%$topic%' AND `name_type` LIKE'%$type%' AND `approval_date` between '$date_from-01-01' and '$date_to-12-31' LIMIT $start, $limit; " or die("Không tìm thấy");
        	
        	// var_dump($select);die;
        	$query = mysqli_query($connect,$select) or die("k truy vấn được!");
        	$number= mysqli_num_rows($query);
        	// var_dump($project); 
            
		// if (mysqli_num_rows($query) > 0){ 
  //          // while ($row = mysqli_fetch_assoc($query)) {

           
  //          //  	}
  //          	}
           	// else {
            //     echo "Không tìm thấy kết quả!";
            // 	}
        	}
        }
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
														<form action="de-tai-du-an-CNKH.php" method="get">
															<div class="row">
																<div class="col-md-3">
																	<label class="col-md-12">Năm công bố</label>
																	<div class="col-md-6tim">
									                                    <select  name="date_from"  class="form-control">
																			<option value="1000">Từ</option>
																			<option <?php if (isset($_GET['date_from']) && $_GET['date_from'] == '2000') echo "selected=\"selected\" "; ?> value="2000">2000</option>
																			<option <?php if (isset($_GET['date_from']) && $_GET['date_from'] == '2001') echo "selected=\"selected\" "; ?> value="2001">2001</option>
																			<option <?php if (isset($_GET['date_from']) && $_GET['date_from'] == '2002') echo "selected=\"selected\" "; ?> value="2002">2002</option>
																			<option <?php if (isset($_GET['date_from']) && $_GET['date_from'] == '2003') echo "selected=\"selected\" "; ?> value="2003">2003</option>
																			<option <?php if (isset($_GET['date_from']) && $_GET['date_from'] == '2004') echo "selected=\"selected\" "; ?> value="2004">2004</option>
																			<option <?php if (isset($_GET['date_from']) && $_GET['date_from'] == '2005') echo "selected=\"selected\" "; ?> value="2005">2005</option>
																			<option <?php if (isset($_GET['date_from']) && $_GET['date_from'] == '2006') echo "selected=\"selected\" "; ?> value="2006">2006</option>
																			<option <?php if (isset($_GET['date_from']) && $_GET['date_from'] == '2007') echo "selected=\"selected\" "; ?> value="2007">2007</option>
																			<option <?php if (isset($_GET['date_from']) && $_GET['date_from'] == '2008') echo "selected=\"selected\" "; ?> value="2008">2008</option>
																			<option <?php if (isset($_GET['date_from']) && $_GET['date_from'] == '2009') echo "selected=\"selected\" "; ?> value="2009">2009</option>
																			<option <?php if (isset($_GET['date_from']) && $_GET['date_from'] == '2010') echo "selected=\"selected\" "; ?> value="2010">2010</option>
																			<option <?php if (isset($_GET['date_from']) && $_GET['date_from'] == '2011') echo "selected=\"selected\" "; ?> value="2011">2011</option>
																			<option <?php if (isset($_GET['date_from']) && $_GET['date_from'] == '2012') echo "selected=\"selected\" "; ?> value="2012">2012</option>
																			<option <?php if (isset($_GET['date_from']) && $_GET['date_from'] == '2013') echo "selected=\"selected\" "; ?> value="2013">2013</option>
																			<option <?php if (isset($_GET['date_from']) && $_GET['date_from'] == '2014') echo "selected=\"selected\" "; ?> value="2014">2014</option>
																			<option <?php if (isset($_GET['date_from']) && $_GET['date_from'] == '2015') echo "selected=\"selected\" "; ?> value="2015">2015</option>
																			<option <?php if (isset($_GET['date_from']) && $_GET['date_from'] == '2016') echo "selected=\"selected\" "; ?> value="2016">2016</option>
																			<option <?php if (isset($_GET['date_from']) && $_GET['date_from'] == '2017') echo "selected=\"selected\" "; ?> value="2017">2017</option>
																			<option <?php if (isset($_GET['date_from']) && $_GET['date_from'] == '2018') echo "selected=\"selected\" "; ?> value="2018">2018</option>
																			<option <?php if (isset($_GET['date_from']) && $_GET['date_from'] == '2019') echo "selected=\"selected\" "; ?> value="2019">2019</option>
																			<option <?php if (isset($_GET['date_from']) && $_GET['date_from'] == '2020') echo "selected=\"selected\" "; ?> value="2020">2020</option>
																		</select>
																	</div>
																	<div class="col-md-6tim">
									                                    <select name="date_to"  class="form-control">
																			<option value="3000">Đến</option>
																			<option <?php if (isset($_GET['date_to']) && $_GET['date_to'] == '2000') echo "selected=\"selected\" "; ?> value="2000">2000</option>
																			<option <?php if (isset($_GET['date_to']) && $_GET['date_to'] == '2001') echo "selected=\"selected\" "; ?> value="2001">2001</option>
																			<option <?php if (isset($_GET['date_to']) && $_GET['date_to'] == '2002') echo "selected=\"selected\" "; ?> value="2002">2002</option>
																			<option <?php if (isset($_GET['date_to']) && $_GET['date_to'] == '2003') echo "selected=\"selected\" "; ?> value="2003">2003</option>
																			<option <?php if (isset($_GET['date_to']) && $_GET['date_to'] == '2004') echo "selected=\"selected\" "; ?> value="2004">2004</option>
																			<option <?php if (isset($_GET['date_to']) && $_GET['date_to'] == '2005') echo "selected=\"selected\" "; ?> value="2005">2005</option>
																			<option <?php if (isset($_GET['date_to']) && $_GET['date_to'] == '2006') echo "selected=\"selected\" "; ?> value="2006">2006</option>
																			<option <?php if (isset($_GET['date_to']) && $_GET['date_to'] == '2007') echo "selected=\"selected\" "; ?> value="2007">2007</option>
																			<option <?php if (isset($_GET['date_to']) && $_GET['date_to'] == '2008') echo "selected=\"selected\" "; ?> value="2008">2008</option>
																			<option <?php if (isset($_GET['date_to']) && $_GET['date_to'] == '2009') echo "selected=\"selected\" "; ?> value="2009">2009</option>
																			<option <?php if (isset($_GET['date_to']) && $_GET['date_to'] == '2010') echo "selected=\"selected\" "; ?> value="2010">2010</option>
																			<option <?php if (isset($_GET['date_to']) && $_GET['date_to'] == '2011') echo "selected=\"selected\" "; ?> value="2011">2011</option>
																			<option <?php if (isset($_GET['date_to']) && $_GET['date_to'] == '2012') echo "selected=\"selected\" "; ?> value="2012">2012</option>
																			<option <?php if (isset($_GET['date_to']) && $_GET['date_to'] == '2013') echo "selected=\"selected\" "; ?> value="2013">2013</option>
																			<option <?php if (isset($_GET['date_to']) && $_GET['date_to'] == '2014') echo "selected=\"selected\" "; ?> value="2014">2014</option>
																			<option <?php if (isset($_GET['date_to']) && $_GET['date_to'] == '2015') echo "selected=\"selected\" "; ?> value="2015">2015</option>
																			<option <?php if (isset($_GET['date_to']) && $_GET['date_to'] == '2016') echo "selected=\"selected\" "; ?> value="2016">2016</option>
																			<option <?php if (isset($_GET['date_to']) && $_GET['date_to'] == '2017') echo "selected=\"selected\" "; ?> value="2017">2017</option>
																			<option <?php if (isset($_GET['date_to']) && $_GET['date_to'] == '2018') echo "selected=\"selected\" "; ?> value="2018">2018</option>
																			<option <?php if (isset($_GET['date_to']) && $_GET['date_to'] == '2019') echo "selected=\"selected\" "; ?> value="2019">2019</option>
																			<option <?php if (isset($_GET['date_to']) && $_GET['date_to'] == '2020') echo "selected=\"selected\" "; ?> value="2020">2020</option>
																		</select>
                        											</div>
								                                </div>
								                                <div class="col-md-4">
								                                	<label>Tên đề tài</label>
								                                		<input type="text" name="topic_name" class="form-control" placeholder="Tên đề tài" value="<?php if(isset($_GET['topic_name'])) {echo($_GET['topic_name']);} ?>" />
								                                </div>
								                                <div class="col-md-3">
								                                	<label>Cấp độ</label>
								                                	<select name="topic_type" class="form-control">
																		<option value="">Tất cả</option>
																		<?php 
																		if (mysqli_num_rows($query_type)>0) {
																		while ($row_type = mysqli_fetch_assoc($query_type)) {
																            // var_dump($row);die;   
																    	?>
																		<option <?php if(isset($_GET['topic_type']) && $_GET['topic_type'] == $row_type['name_type']) echo "selected=\"selected\" "; ?> value="<?php echo $row_type['name_type']; ?>"><?php echo $row_type['name_type']; ?></option>
																		<?php 
																			}
																		}
																		?>
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
																<form action="de-tai-du-an-CNKH.php" method="get">
																<table style="background-color: #d2d2d2; height: 20px; line-height: 20px;" width="100%">
																	<tbody>
																		<tr>
																			<td valign="middle">Tổng số có: 
														                        <span style="color: maroon ;font-weight:bold;"><?php echo $number; ?></span> Bản ghi
											                                </td>
															                <td align="right">Hiển thị
														                        <select name="page_size">
																					<option value="<?php echo $limit; ?>"><?php echo $limit; ?></option>
																					
																				</select> số lượng / trang
											                                </td>
																		</tr>
																	</tbody>
																</table>
																</form>
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
																	if (mysqli_num_rows($query)>0) {
																	while ($row = mysqli_fetch_assoc($query)) {
															            // var_dump($row);die;   
															    	?>
																	
																		<tr class="TRgrid">
																			<td style="width:70px;"><?php echo $row['id_project']; 
																			?></td>
																			<td style="width:300px;"><?php echo $row['name'];  ?></td>
																			<td style="width:150px;"> <?php echo $row['lead_researcher'];  ?></td>
																			<td style="width:100px;"><?php echo $row['workplace'];  ?></td>
																			<td style="width:120px;"><?php echo $row['name_type'];  ?></td>
																			<td align="center" style="width:100px;"><?php echo $row['approval_date'];  ?></td>
																			<td align="center" style="width:100px;"><?php echo $row['acceptance_date'];  ?></td>
																			<td align="center" style="width:100px;"><?php echo $row['result'];  ?></td>
																		</tr>
																	<?php 
																	}
																	} 
																	 else {
														                echo "Không tìm thấy kết quả!";
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
															    	<!-- 
															        <li><a class="active"  href="de-tai-du-an-CNKH.php?page=1">1</a></li>
															        <li><a  href="de-tai-du-an-CNKH.php?page=2">2</a></li>
															        <li><a  href="de-tai-du-an-CNKH.php?page=3">3</a></li>
															        <li><a  href="de-tai-du-an-CNKH.php?page=4">4</a></li>
															        <li><a  href="de-tai-du-an-CNKH.php?page=5">5</a></li>
															        <li><a  class="inactive" href="">Tiếp</a></li>
															          -->
															     	<?php
									                                    for ($i = 1; $i <= $total_page; $i++){
									                                    	if ($i == $current_page){
									                                ?>
															        <li><a class="active"  href="de-tai-du-an-CNKH.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
															    	<?php }  else{?>
															    	<!-- <li><a  href="de-tai-du-an-CNKH.php?page=2">2</a></li>
															        <li><a  href="de-tai-du-an-CNKH.php?page=3">3</a></li>
															        <li><a  href="de-tai-du-an-CNKH.php?page=4">4</a></li>
															        <li><a  href="de-tai-du-an-CNKH.php?page=5">5</a></li> -->
															        <li><a  href="de-tai-du-an-CNKH.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>

															    	<?php } }?>
															    	<?php if ($current_page < $total_page && $total_page > 1){ ?>
															        <li><a  class="inactive" href="de-tai-du-an-CNKH.php?page=<?php echo ($current_page+1) ?>">Tiếp</a></li>
															         
															     	<?php } 
									                            	
									                                ?>
									                               

															    </ul>
																    
																</div>
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