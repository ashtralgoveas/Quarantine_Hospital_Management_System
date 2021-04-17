<!DOCTYPE html>
<html>
  <head>
    <title>Logged In Staff</title>
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
        <a onclick="document.location='/src/logfiles/logged-in.html'" >Previous</a>
        </h2>
          <ul class="main-heading">
            <h1>
              <li class="hqs">Quarantine Survey</li>
            </h1>
          </ul>
          <center>
          <div>
            <button onclick="document.location='AddStaff.html'">Add Staff</button>
            <button onclick="document.location='RemoveStaff.php'">Remove Staff</button>
          </div>
        </center>
      </nav>
    </header>
    <br>
    <center>
          <form action="" method="post">
            <h1>Staff's Logged-In</h1>
            <br />
          </form>
      </center>
  </body>
</html>


<?php

  $conn = new mysqli("localhost", "root", "", "database");
  if ($conn->connect_error) {
      echo "connection Failed: " . $conn->connect_error;
  } else {
      $sql = "SELECT * FROM logged_in_staff AS l, staff_details AS s WHERE l.staff_site_id = s.staff_site_id";

      $res = mysqli_query($conn,$sql);
      echo '<table class="patientclass">';
      echo "<tr>


      <th>LOGGED-IN-ID</th>
      <th>STAFF-SITE-ID</th>
      <th>STAFF_NAME</th>
      <th>EMAIL</th>
      <th>PASSWORD</th>


      </tr>";

      while ($row = mysqli_fetch_array($res)) {
        echo "<tr>";


        echo "<td>" . $row['logged_in_id'] . "</td>";
        echo "<td>" . $row['staff_site_id'] . "</td>";
        echo "<td>" . $row['staff_name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['password'] . "</td>";

        
      echo "</tr>";

      }
      echo "</table>";
    }
?> 
