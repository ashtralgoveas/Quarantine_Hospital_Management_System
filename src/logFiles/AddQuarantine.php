<?php 
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "database";

    //database connection
    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    $patient_id = $_POST['patient_id'];
    $patient_name = $_POST['patient_name'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $address = $_POST['address'];
    $pincode = $_POST['pincode'];
    $condition = $_POST['patient_condition'];
    $age = $_POST['age'];

    if($conn->connect_error){
    die('Connection Failed : ' .$conn->connect_error);
    }else{
    if ($end_date != NULL){
        $stmt = $conn->prepare("INSERT INTO quarantine_details (patient_id,patient_name,start_date,end_date,address,pincode,patient_condition,age) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("dssssssd",$patient_id,$patient_name,$start_date,$end_date,$address,$pincode,$condition,$age);
    }
    else{
        $stmt = $conn->prepare("INSERT INTO quarantine_details (patient_id,patient_name,start_date,address,pincode,patient_condition,age) VALUES(?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("dsssssd",$patient_id,$patient_name,$start_date,$address,$pincode,$condition,$age);
    }
    $stmt->execute();
    echo '<script>alert("DATA ENTERED SUCCESSFULLY....!")</script>';
    $stmt->close();
    $conn->close();
    }

?>
