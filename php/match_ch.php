<?php
	session_start();
	$servername = "localhost";
	$dbusername = "root";
	$password = "0955215375";
	$dbname = "wematch_data";
	$tablename = "wematch_ac";
	$tablename2 = "wematch_like";

	$conn = new mysqli($servername,$dbusername,$password,$dbname);

	if($conn->connect_error){
    	die("Connection failed: ".$conn->connect_error);
	}

	$user_do_like = $_SESSION['username'];
	$username_like = $_SESSION['username_like'];

	$sql2 = "select img_ac,user_ac,lo_ac,status_ac from $tablename WHERE NOT user_ac = '".$_SESSION['username']."' and status = 0 ";
	$sql3 = "select user_do_like,user_like from $tablename2";
	$sql5 = "select count(user_do_like) as count from $tablename2 WHERE user_do_like='".$user_do_like."' AND user_like='".$username_like."' ";
	$sql6 = "select count(user_do_like) as count from $tablename2 WHERE user_do_like='".$username_like."' AND user_like='".$user_do_like."' ";
	$sql4 = "INSERT INTO wematch_like (user_do_like,user_like) VALUES ('$user_do_like','$username_like')";
	$sql7  = ""
	// $_SESSION["sql"] ="select img_ac,user_ac,lo_ac,status_ac from $tablename WHERE NOT user_ac = '".$_SESSION['username']."'";
	$result2 = $conn ->query($sql2);
	$output2 = [];
	// unset ($_SESSION["count"]);
	// unset ($_SESSION["sql"]);
	// $e=1;
	// $_SESSION["count"] = $e;
	// $a= $username_like;
	// if($_SESSION["count"]==1){
	// }


	

	// for($i=1;$i<count($_SESSION["eiei"]);$i++){
		
	// 	$_SESSION["sql"] .= "and not user_ac = '".$_SESSION["eiei"][$i]."'";	
	// }

	// $h = "and not user_ac = '".$username_like."'";
	// $sql2.=$h;
	// $y = "and not user_ac = '".$username_like."'";
	// $count =$_SESSION["c"];
	// $a[] = $username_like;

	// for($i=0;$i<$count;$i++){

	// 	$sql2 .= "and not user_ac = '".$a[$i]."'";
	//  	echo $sql2;
		
	
	// $sql2.=$y;

	  // foreach ($a as $key => $value) {
	  // 	$sql2.= "and not user_ac = '".$a[$key]."'";
	  // 	echo $sql2;

	  // }
	// echo $sql2;

	while( $temp_fetch2 = mysqli_fetch_assoc($result2) ){
        array_push($output2, $temp_fetch2);
	}json_encode($output2);

	$result3 = $conn ->query($sql3);
 	$output3 = [];

 	while( $temp_fetch3 = mysqli_fetch_assoc($result3) ){
        array_push($output3, $temp_fetch3);
	}json_encode($output3);

 	$output4 = [];
	
	if (isset($_POST["like"])) {
		// $_SESSION["a"] =[];
		// $_SESSION["a"] = $username_like;
		print_r($_SESSION["a"]) ;
		$count5 = $conn->query($sql5);
 		$output5 = [];
 		while( $temp_fetch5 = mysqli_fetch_assoc($count5) ){
        	array_push($output5, $temp_fetch5);
		}json_encode($output5);
		$kl = $output5[0]["count"];

		$count6 = $conn->query($sql6);
 		$output6 = [];
 		while( $temp_fetch6 = mysqli_fetch_assoc($count6) ){
        	array_push($output6, $temp_fetch6);
		}json_encode($output6);
		$tl = $output6[0]["count"];
		$result4 = $conn->query($sql4);

		// if ($kl > 0 && $tl > 0) {
		// 	// echo "match";
		// }else{
		// 	// echo "not_like";
		// }
				/*$result4 = $conn ->query($sql4);*/
			//}
		//}*/

		/*if($user_do_like != $output4[]["user_do_like"]){		
			if($$conn->query($sql4) == TRUE){

			}
		}*/
		/*for ($i=0; $i < $output3-1 ; $i++) { 
				
			}
 		}*/

 		$count2 = mt_rand(0, sizeof($output2)-1);
 		$username_like = $output2[$count2]["user_ac"];
 		$img_like = $output2[$count2]["img_ac"];
 		$status_like = $output2[$count2]["status_ac"];
 		$lo_like = $output2[$count2]["lo_ac"];

		$username_like = $output2[$count2]["user_ac"];
		$_SESSION["username_like"] = $username_like;

		$img_like = $output2[$count2]["img_ac"];
		$_SESSION["img_like"] = $img_like;

		$status_like = $output2[$count2]["status_ac"];
		$_SESSION["status_like"] = $status_like;

		$lo_like = $output2[$count2]["lo_ac"];
		$_SESSION["lo_like"] = $lo_like;

 	}else if (isset($_POST["not_like"])) {

 		$count2 = mt_rand(0, sizeof($output2)-1);
 		$username_like = $output2[$count2]["user_ac"];
 		$img_like = $output2[$count2]["img_ac"];
 		$status_like = $output2[$count2]["status_ac"];
 		$lo_like = $output2[$count2]["lo_ac"];

 		$username_like = $output2[$count2]["user_ac"];
		$_SESSION["username_like"] = $username_like;

		$img_like = $output2[$count2]["img_ac"];
		$_SESSION["img_like"] = $img_like;

		$status_like = $output2[$count2]["status_ac"];
		$_SESSION["status_like"] = $status_like;

		$lo_like = $output2[$count2]["lo_ac"];
		$_SESSION["lo_like"] = $lo_like;
 	}
 	if (isset($_POST["logout"])){
 		session_destroy();
 		header('Location:../html/login.html');

 	}


 	header('Location:matching.php');
	$conn ->close();
	
?>