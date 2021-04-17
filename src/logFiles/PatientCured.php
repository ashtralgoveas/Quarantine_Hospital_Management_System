
<!DOCTYPE html>
<html>
  <head>
    <title>Patient Login</title>
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="Patient.css" />
  </head>
  <body>
    <header>
      <nav class="li-ref">
        <h2>
        <a href="/src/logFiles/StaffViewPage.html" >Previous</a>
        </h2>
          <ul class="main-heading">
            <h1>
              <li class="hqs">Quarantine Survey</li>
            </h1>
          </ul>
      </nav>
    </header>
    <form action="" method="POST">
      <center>
          <h2 class="title">List of Patients Cured</h2>
      </center>
    </form>
  </body>
<html>


<?php

if (isset($_POST['patient-cured'])) {

  $conn = new mysqli("localhost", "root", "", "database");
  if ($conn->connect_error) {
      echo "connection Failed: " . $conn->connect_error;
  } else {
      $sql = "SELECT * FROM quarantine_details WHERE patient_condition = 'Cured'";

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