<?php

	$servername = "localhost";
	$username = "root";
	$password = "0955215375";
	$dbname = "wematch_data";
	$tablename = "wematch_ac";

	$conn = new mysqli($servername,$username,$password,$dbname);

	if($conn->connect_error){
    	die("Connection failed: ".$conn->connect_error);
	}

	$email_ac=$_POST['email_ac'];
    $tel_ac=$_POST['tel_ac'];
    $pass_ac=$_POST['pass_ac'];
    
    if ($_POST['pass_ac']!= $_POST['pass_ch'])
 	{
    echo '<script type="text/javascript">
          window.onload = function () { alert("Your password in not match!"); }
			</script>';}
	
	$sql = "INSERT INTO wematch_ac(email_ac,tel_ac,pass_ac,img_ac,user_ac,gender_ac,interest_ac,lo_ac,date_ac,status_ac) VALUES ('$email_ac','$tel_ac','$pass_ac','human.jpg','Guest','Gender','Interest','Location','1919-01-01','Hello!')";
	
	if ($conn->query($sql) == TRUE) {
    	   	header('location:../html/login.html');
    	}else{
    		echo "writePic Error";
    	}




/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
	/*$link = mysqli_connect("localhost", "jolo", "", "wematch_data");
 
// Check connection
	if($link === false){
    	die("ERROR: Could not connect. " . mysqli_connect_error());
	}
 
// Escape user inputs for security
 
if ($_POST['pass_ac']!= $_POST['pass_ch'])
 {
    echo '<script type="text/javascript">
          window.onload = function () { alert("Your password in not match!"); }
			</script>';

 }else{
 	$email_ac = mysqli_real_escape_string($link, $_REQUEST['email_ac']);
	$tel_ac = mysqli_real_escape_string($link, $_REQUEST['tel_ac']);
	$pass_ac = mysqli_real_escape_string($link, $_REQUEST['pass_ac']);
	$sql = "INSERT INTO wematch_ac(email_ac,tel_ac,pass_ac) VALUES ('$email_ac','$tel_ac','$pass_ac')";

	}

	if(mysqli_query($link,$sql)){
		header('location:../html/login.html');
	}else{
		echo "kuy";
    //header('location:../html/register.html');
}
 
// Close connection
mysqli_close($link);*/

?>