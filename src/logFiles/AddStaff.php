<?php 
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "database";

    //database connection
    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    $staff_site_id = $_POST['staff_site_id'];
    $staff_name = $_POST['staff_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($conn->connect_error){
    die('Connection Failed : ' .$conn->connect_error);
    }else{
        $row = NULL;
        $sql = "SELECT * FROM staff_details WHERE staff_site_id ='$staff_site_id'";
        $res = $conn->query($sql);
        if ($row = $res->fetch_assoc()) {
            if ($row['staff_site_id']==$staff_site_id){
                echo '<script>alert("Staff Site Id Already Taken..!!")</script>';
            }
        }
        else if($row == NULL){
            if ($staff_site_id != NULL){
                $stmt = $conn->prepare("INSERT INTO staff_details (staff_site_id,staff_name,email,password) VALUES(?, ?, ?, ?)");
                $stmt->bind_param("dsss",$staff_site_id,$staff_name,$email,$password);
                $stmt->execute();
                echo '<script>alert("DATA ENTERED SUCCESSFULLY....!")</script>';
                $stmt->close();
            }
            else{
                $stmt = $conn->prepare("INSERT INTO staff_details (staff_name,email,password) VALUES(?, ?, ?)");
                $stmt->bind_param("sss",$staff_name,$email,$password);
                $stmt->execute();
                echo '<script>alert("DATA ENTERED SUCCESSFULLY....!")</script>';
                $stmt->close();
        }
    }
    $conn->close();
}
        

?>