<?php
// Connect to server and select database.
$con   = new mysqli("localhost","oygjacku_online","Pavlovic3372","oygjacku_online");
// Check connection
if ($conn->connect_errno) {
  echo "Failed to connect to MySQL: " . $conn->connect_error;
  exit();
}

//väljer values från visitor_counter table
$sql     = "SELECT * FROM visitor_counter";
$result  = mysqli_query($con, $sql);
$row     = mysqli_fetch_array($result);
$counter = $row['counts'];

// sätter counter = 1, om vi har ingen counts value
if (empty($counter)) {
  $counter = 1;
  $sql1    = "INSERT INTO visitor_counter(counts) VALUES('$counter')";
  $result1 = mysqli_query($con, $sql1);
}

// Incrementing counts value
$plus_counter = $counter+1;
$sql2         = "update visitor_counter set counts='$plus_counter'";
$result2      = mysqli_query($con, $sql2);

mysqli_close($con);
?>