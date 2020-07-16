<?php
    session_start();
    
    function writePic($img){
        $servername = "localhost";
		$username = "root";
		$password = "0955215375";
		$dbname = "wematch_data";
		$tablename = "wematch_ac";

		echo "img ". $img;
		//Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		//Check conconnection
		if (($conn->connect_error)) {
			die("Connection failed: " . $conn->connect_error);
		}

		echo "Connected successfully <br>";
    	$sql = "UPDATE $tablename SET img_ac ='".$img."' WHERE email_ac = '".$_SESSION['username']."'";

    	if ($conn->query($sql) === TRUE) {
    	   	echo "writePic successfully";
    	}
    	else{
    	echo "writePic Error";
    	}
    }

    function uploadPic(){
    	$target_dir = "../pic/pic_user/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		echo $target_file;
		if ($check !== false) {
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;

			if (file_exists($target_file)) {
				echo "Sorry, file already exists";
				$uploadOk = 0;
			}
			if ($_FILES["fileToUpload"]["size"] > 50000000) {
				echo "Sorry, your file is too large";
				$uploadOk = 0;
			}
		}
		else{
			echo "File is not an image";
			$uploadOk = 0;
		}
		//Check if $uploadOk is set to 0 by an
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded";
			//if everything is ok, try to load file
		}else{
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				echo "The file " . basename($_FILES["fileToUpload"]["name"]). "has been uploaded.";
				writePic(basename($_FILES["fileToUpload"]["name"]));
				$_SESSION['img'] = basename($_FILES["fileToUpload"]["name"]);

			}else{
				echo "Sorry, there was an error uploading your file.";
			}
		}
    }

    uploadPic();
    //$_SESSION['img'] = $img;
    header("Location:edit_profile.php");
	exit;
?>