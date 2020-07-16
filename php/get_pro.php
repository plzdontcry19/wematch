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

	$user_name=$_POST['username1'];
    $gender_ac=$_POST['gender'];
    $interest_ac=$_POST['interest'];
    $lo_ac=$_POST['location'];
    $date_ac=$_POST['age'];


	$sql = "UPDATE $tablename SET user_ac = '".$user_name."',gender_ac = '".$gender_ac."',interest_ac = '".$interest_ac."',lo_ac = '".$lo_ac."',date_ac = '".$date_ac."' WHERE email_ac= '".$_SESSION['username']."'";

	if ($conn->query($sql) == TRUE) {
		$name = $_POST["username1"];
		$_SESSION["username"]=  $name;
		header('Location:status.php');
	}else{
		header('Location:edit_profile.php?error=1');
		echo "Error" .$conn->error;
	}


 	

	$conn ->close();
	
?>