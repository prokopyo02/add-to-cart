<?php

function listNursesToContact($location, $speciality) {
    // Connect to the MySQL database
    $conn = mysqli_connect("localhost", "root", "", "hospital");
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
  
    // Get the nurses
    $sql = "SELECT * FROM nurses WHERE location = '$location' AND speciality = '$speciality' AND license_status = 'valid'";
    $result = mysqli_query($conn, $sql);
  
    // Check if the query is successful
    if ($result) {
      // Get the number of rows
      $num_rows = mysqli_num_rows($result);
  
      // If there are nurses
      if ($num_rows > 0) {
        // Create an array to store the nurses
        $nurses = [];
  
        // Loop through the results
        while ($row = mysqli_fetch_assoc($result)) {
          // Add the nurse to the array
          $nurses[] = $row;
        }
  
        // Return the nurses
        return $nurses;
      } else {
        // There are no nurses
        return [];
      }
    } else {
      // The query failed
      die("Query failed: " . mysqli_error($conn));
    }
  
    // Close the connection to the MySQL database
    mysqli_close($conn);
  }

?>