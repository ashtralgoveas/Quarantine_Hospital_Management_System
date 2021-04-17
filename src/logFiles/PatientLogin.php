<?php 
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "database";

$email=$_POST['email'];
$password=$_POST['password'];

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if($conn->connect_error){
	die("Failed to Connect: ".$conn->connect_error);
}else{
	$stmt= $conn->prepare("SELECT * FROM user_details WHERE email=?");
	$stmt ->bind_param("s",$email);
	$stmt->execute();
	$stmt_result=$stmt->get_result();
	if($stmt_result->num_rows>0){
		$data=$stmt_result->fetch_assoc();
		if($data['password']===$password){
			header("location:QuarantineDetails.php");
		}else{
			
			echo '<script>alert("Invalid Email-id or Password")</script>';
		}
	}else{
		echo '<script>alert("Invalid Email-id or Password")</script>';
	}
}
 

 ?>