<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "0955215375";
	$dbname = "wematch_data";
	$tablename = "wematch_ac";

	$conn = new mysqli($servername,$username,$password,$dbname);

	if($conn->connect_error){
    	die("Connection failed: ".$conn->connect_error);
	}

	$status=$_POST['status'];
	$user_ch=$_SESSION['username'];

	$sql = "UPDATE $tablename SET status_ac = '".$status."' WHERE user_ac = '".$_SESSION['username']."'";
	$sql1 = "select img_ac,user_ac,lo_ac,status_ac from $tablename WHERE NOT user_ac = '".$user_ch."'";

	$result = $conn ->query($sql1);
 	$output = [];

 	while( $temp_fetch = mysqli_fetch_assoc($result) ){
        array_push($output, $temp_fetch);
    }

    json_encode($output);

	if($result->num_rows>0){
		$count = mt_rand(0, sizeof($output)-1);

    	if ($conn->query($sql) == TRUE) {

    		$user_do = $output[$count]["user_ac"];
			$_SESSION["user_do"] = $user_do;
			$_SESSION["username_like"] = $user_do;

			$img_do = $output[$count]["img_ac"];
			$_SESSION["img_do"] = $img_do;

			$status_do = $output[$count]["status_ac"];
			$_SESSION["status_do"] = $status_do;

			$lo_do = $output[$count]["lo_ac"];
			$_SESSION["lo_do"] = $lo_do;
			
			// echo $user_do." ".$img_do;
			header('Location:matching.php');
		}else{
			echo "Error" .$conn->error;
		}
	}

	$conn ->close();

?>