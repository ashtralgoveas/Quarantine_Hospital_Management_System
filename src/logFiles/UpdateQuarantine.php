<?php 
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "database";

    //database connection
    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    $patient_id = $_POST['patient_id'];
    $end_date = $_POST['end_date'];
    $condition = $_POST['patient_condition'];

    if($conn->connect_error){
    die('Connection Failed : ' .$conn->connect_error);
    }
        $sql = ("UPDATE quarantine_details SET end_date='$end_date', patient_condition='$condition' WHERE patient_id=$patient_id");
        if ($conn->query($sql) === TRUE) {
            echo '<script>alert("DATA UPDATED SUCCESSFULLY....!")</script>';
          } else {
            echo '<script>alert("Error updating record: " . $conn->error)</script>';
          }
    $conn->close();

?>
