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
    <link rel="stylesheet" href="./QuarantineStylesheet.css" />
    <title>Quarantine Details</title>
  </head>
  <body>
    <header>
      <nav class="li-ref">
        <h2>
        <a href="Patientlogin.html" >Previous</a>
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
            <h1>Search for Patient-Id</h1>
            <input type="text" placeholder="Enter Patient-Id" name="search" autofocus={true}/>
            <button type="submit" name="submit">Search</button>
            <br />
          </form>
      </center>
    </div>
 </body>
</html>




<?php

if (isset($_POST['submit'])) {
  $searchValue = $_POST['search'];
  $conn = new mysqli("localhost", "root", "", "database");
  if ($conn->connect_error) {
      echo "connection Failed: " . $conn->connect_error;
  } else {
      $sql = "SELECT * FROM quarantine_details WHERE patient_id ='$searchValue'";

      $res = $conn->query($sql);
      echo '<table class="patientclass">';
      echo "<tr>

      <th>PATIENT_ID</th>
      <th>PATIENT_NAME</th>
      <th>AGE</th>
      <th>START_DATE</th>
      <th>END_DATE</th>
      <th>ADDRESS</th>
      <th>PINCODE</th>
      <th>PATIENT_CONDITION</th>


      </tr>";

      while ($row = $res->fetch_assoc()) {
        echo "<tr>";

        echo "<td>" . $row['patient_id'] . "</td>";
        echo "<td>" . $row['patient_name'] . "</td>";
        echo "<td>" . $row['age'] . "</td>";
        echo "<td>" . $row['start_date'] . "</td>";
        echo "<td>" . $row['end_date'] . "</td>";
        echo "<td>" . $row['address'] . "</td>";
        echo "<td>" . $row['pincode'] . "</td>";
        echo "<td>" . $row['patient_condition'] . "</td>";

      echo "</tr>";

      }
      echo "</table>";
    }

}
?>