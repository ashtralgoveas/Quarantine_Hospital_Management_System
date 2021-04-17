<?php 
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "database";

//database connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

  $name = $_POST['full_name'];
  $email = $_POST['email'];
  $phone_no = $_POST['phone_no'];
  $password = $_POST['password'];
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];

if($conn->connect_error){
  die('Connection Failed : ' .$conn->connect_error);
}else{
   $stmt = $conn->prepare("INSERT INTO user_details (full_name,email,phone_no,password,dob,gender) VALUES( ?, ?, ?, ?, ?, ?)");
   $stmt->bind_param("ssssss",$name,$email,$phone_no,$password,$dob,$gender);
   $stmt->execute();
   echo '<script>alert("DATA ENTERED SUCCESSFULLY....!")</script>';
   $stmt->close();
   $conn->close();
}

?>
