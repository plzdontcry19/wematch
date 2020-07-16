<?php
	session_start();
//complete this file
	$name = $_POST["username"];
	$pass = $_POST["password"];
	$_SESSION["username"]=  $name;
	$username = "root";
	$servername = "localhost";
	$password = "0955215375";
	$dbname = "wematch_data";
	$tablename = "wematch_ac";

	$conn = new mysqli($servername,$username,$password,$dbname);

	if($conn->connect_error){
    	die("Connection failed: ".$conn->connect_error);
	}

	$sql = "select email_ac,pass_ac,tel_ac,img_ac from $tablename";
 	$result = $conn ->query($sql);
 	$output = [];

 	while( $temp_fetch = mysqli_fetch_assoc($result) ){
        array_push($output, $temp_fetch);
    }

    json_encode($output);
    //echo json_encode($output);

    if($result->num_rows>0){
    	for ($i=0; $i < sizeof($output); $i++) { 
    		if ( $name == $output[$i]["email_ac"] || $name == $output[$i]["tel_ac"]) {
    			if ($pass == $output[$i]["pass_ac"]) {
    			    $img = $output[$i]["img_ac"];
    			    $_SESSION["img"] = $img;
    				header('Location: edit_profile.php');
    			}else{
    				header('Location: ../html/login.html?error=1');
    			}
    		}
    	}
    }
	
?>