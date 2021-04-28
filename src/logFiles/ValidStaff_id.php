<!DOCTYPE html>
<html lang="en">
  <head> 
    <head>
		<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
        href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap"
        rel="stylesheet"
        />
    <link rel="stylesheet" href="ValidStaff_id.css" />
    <title>Staff Site Id</title>
  </head>
  <body>
    <header>
      <nav class="li-ref">
        <h2>
        <a onclick="document.location='/src/logfiles/StaffViewPage.html'" >Previous</a>
        </h2>
          <ul class="main-heading">
            <h1>
              <li class="hqs">Quarantine Survey</li>
            </h1>
          </ul>
      </nav>
    </header>
    <div class="search">
      <center>
          <form action="ValidStaff_id.php" method="post">
            <h1>Enter Staff ID</h1>
            <input type="text" placeholder="Enter Staff-Site-Id" name="staff_site_id" autofocus={true}/>
            <button type="submit" name="submit">Search</button>
            <br />
          </form>
      </center>
    </div>
 </body>
</html>


<?php 
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "database";

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);
if (isset($_POST['submit'])) {
  $searchValue = $_POST['staff_site_id'];
  $conn = new mysqli("localhost", "root", "", "database");
  if($conn->connect_error){
    die("Failed to Connect: ".$conn->connect_error);
  }else{
    $sql = "SELECT * FROM staff_details WHERE staff_site_id != 'NULL' AND staff_site_id='$searchValue'";

    $res = $conn->query($sql);
      if (($res->num_rows)>0){
        $stmt = $conn->prepare("INSERT INTO logged_in_staff (staff_site_id) VALUES ('$searchValue')");
        $stmt->execute();
        $stmt->close();
        header("location:Add_Patients.html");
      }else{
        
        echo '<script>alert("Invalid Staff-Id")</script>';
      }
  }
}
 

 ?> 
