<?php 
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "database";

$admin_email=$_POST['admin_email'];
$admin_password=$_POST['admin_password'];

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if($conn->connect_error){
	die("Failed to Connect: ".$conn->connect_error);
}else{
	$stmt= $conn->prepare("SELECT * FROM admin_details WHERE admin_email=?");
	$stmt ->bind_param("s",$admin_email);
	$stmt->execute();
	$stmt_result=$stmt->get_result();
	if($stmt_result->num_rows>0){
		$data=$stmt_result->fetch_assoc();
		if($data['admin_password']===$admin_password){
			header("location:logged_staff.php");
		}else{
			
			echo '<script>alert("Invalid Email-id or Password")</script>';
		}
	}else{
		echo '<script>alert("Invalid Email-id or Password")</script>';
	}
}
 

 ?>