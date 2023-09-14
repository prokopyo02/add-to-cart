<?php

/**
 * List the available jobs based on nurses' information.
 *
 * @param string $location
 * @param string $speciality
 * @return array
 */
function listAvailableJobs($location, $speciality) {
  // Connect to the MySQL database
  $conn = mysqli_connect("localhost", "root", "", "hospital");
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Get the available jobs
  $sql = "SELECT * FROM available_jobs WHERE location = '$location' AND speciality = '$speciality'";
  $result = mysqli_query($conn, $sql);

  // Check if the query is successful
  if ($result) {
    // Get the number of rows
    $num_rows = mysqli_num_rows($result);

    // If there are available jobs
    if ($num_rows > 0) {
      // Create an array to store the available jobs
      $availableJobs = [];

      // Loop through the results
      while ($row = mysqli_fetch_assoc($result)) {
        // Add the job to the array
        $availableJobs[] = $row;
      }

      // Return the available jobs
      return $availableJobs;
    } else {
      // There are no available jobs
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