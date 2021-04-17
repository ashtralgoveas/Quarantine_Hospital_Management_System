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
    <title>Remove Staff</title>
  </head>
  <body>
    <header>
      <nav class="li-ref">
        <h2>
        <a onclick="document.location='/src/logFiles/logged_staff.php'" >Previous</a>
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
          <form action="" method="post">
            <h1>Remove Staff</h1>
            <input type="text" placeholder="Enter Staff-Email" name="staff_email" autofocus={true}/>
            <button type="submit" name="submit">Confirm</button>
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
  $searchValue = $_POST['staff_email'];
  $conn = new mysqli("localhost", "root", "", "database");
  if($conn->connect_error){
    die("Failed to Connect: ".$conn->connect_error);
  }else{
    $sql = "SELECT * FROM staff_details WHERE email ='$searchValue'";

    $res = $conn->query($sql);
    if (($res->num_rows)>0){
      $qry = "DELETE FROM staff_details WHERE email ='$searchValue'";
      $conn->query($qry);
      echo '<script>alert("Removed Staff")</script>';
    }else{
        
      echo '<script>alert("Invalid Staff-Email")</script>';
    }
  }
}
 

 ?> 