<?php 
// kết nối đến MySQl
	$db = array(
		// 'server' => 'php-intern.cxo36tfgnhhp.ap-southeast-1.rds.amazonaws.com',
		// 'username' => 'root',
		// 'password' => '12345678',
		// 'dbname' => 'adminHUS'
        'server' => '127.0.0.1',
        'username' => 'root',
        'password' => '',
        'dbname' => 'adminHUS'
	);
	$connect =mysqli_connect( $db['server'],$db['username'], $db['password'] , $db['dbname']);
	if (!$connect) {
		die('fail connect'). mysqli_connect_error($connect);
	}

	//truy vấn search:
     // mysqli_select_db($connect,"adminhus") or die ("Could not find database!");
     //        // $output= "";
     //        if(isset($_GET['topic']) && !empty($_GET['topic'])){
     //            $search=$_GET['topic'];
     //            // if($search != ""){
     //                $select="SELECT * FROM detai_duan WHERE  name LIKE '%$search%' ";
     //                // var_dump($select);die;
     //                // $queries=mysqli_query($connect,$select) or die("Could not search!");
     //                // $result=mysqli_num_rows($queries);
     //                // var_dump($result);die;
     //            }else{
     //                $select="SELECT * FROM detai_duan";
     //                $result=mysqli_query($connect, $select) or die("truy van sai!");
                // }


                    // if($result>0){
                        //Ket qua tim kiem = 0
                    //     $output="<span>Please enter your keyword '$search'</span>";
                    // }else{
                    // //     //Ket qua tim kiem > 0
                    //      $output="<span>All result with keyword '$search' : $result </span>";
                         // var_dump(mysqli_fetch_array($query));die;
                         // while ($row1=mysqli_fetch_assoc($queries)) {
                            //Khai bao bien va gan gia tri, cac truong duoc lay tu database
                        //     $id_project=$row['id_project'];
                        //     $name=$row['name'];
                        //     $lead_researcher=$row['lead_researcher'];
                        //     $workplace=$row['workplace'];
                        //     $type=$row['type'];
                        //     $approval_date=$row['approval_date'];
                        //     $acceptance_date=$row['acceptance_date'];
                        //     $result=$row['result'];

                        // $output ="<div>$id_project<br>$name<br>$lead_researcher<br>$workplace<br>$type<br>$approval_date<br>$acceptance_date<br>$result<br><br> </div>";
                         	

                         

                        

            //             }
                       
            //         }
            //     }
            // }
		?>


