<!DOCTYPE html>
<html>
<head>
  <title>Available Jobs</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
  <h1>Available Jobs</h1>

  <form action="list_available_jobs.php" method="post">
    <div class="form-group">
      <label for="location">Location</label>
      <input type="text" name="location" id="location" class="form-control">
    </div>
    <div class="form-group">
      <label for="speciality">Speciality</label>
      <input type="text" name="speciality" id="speciality" class="form-control">
      
    </div>
    <button type="submit" class="btn btn-primary">Search</button>
  </form>

  <div class="results">
  <?php

include 'available_jobs.php';

// Get the location and speciality
if (isset($_POST['location'])) {
  $location = $_POST['location'];
} else {
  $location = '';
}

if (isset($_POST['speciality'])) {
  $speciality = $_POST['speciality'];
} else {
  $speciality = '';
}

// Get the available jobs
$availableJobs = listAvailableJobs($location, $speciality);

if ($availableJobs) {
    // There are available jobs
    foreach ($availableJobs as $job) {
      echo "<p>
        <strong>Location:</strong> {$job['location']}<br>
        <strong>Speciality:</strong> {$job['speciality']}<br>
        <strong>Hourly Rate:</strong> {$job['hourly_rate']}<br>
        <strong>Time:</strong> {$job['time']}
      </p>";
    }
  
    // Remove the 'time' key from the array
    unset($availableJobs['time']);
  } else {
    // There are no available jobs
    echo "No available jobs found.";
  }

?>

<h2>Nurses to Contact</h2>

<?php
include 'list_nurse_to_contact.php';
// Get the nurses
$nurses = listNursesToContact($location, $speciality);

if ($nurses) {
  // There are nurses
  foreach ($nurses as $nurse) {
    echo "<p>
      <strong>Name:</strong> {$nurse['name']}<br>
      <strong>Contact Number:</strong> {$nurse['contact_number']}<br>
      <strong>License:</strong> {$nurse['license_status']}
    </p>";
  }
} else {
  // There are no nurses
  echo "No nurses found.";
}

?>

  </div>
</div>

<script src="script.js"></script>
</body>
</html>
