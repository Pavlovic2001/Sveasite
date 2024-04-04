<?php
session_start();
$session    = session_id();
$time       = time();
$time_check = $time-60;     //antalet sekunder - 60 sec
$tbl_name   = "online_users";

$conn = new mysqli("localhost","oygjacku_online","Pavlovic3372","oygjacku_online");
// Check connection
if ($conn->connect_errno) {
  echo "Failed to connect to MySQL: " . $conn->connect_error;
  exit();
}


$sql    = "SELECT * FROM $tbl_name WHERE session='$session'";
$result = mysqli_query($conn, $sql);
$count  = mysqli_num_rows($result); 

//If count is 0 , then enter the values - insert into table name
if ($count == "0") { 
  $sql1    = "INSERT INTO $tbl_name(session, time)VALUES('$session', '$time')"; 
  $result1 = mysqli_query($conn, $sql1);
} 
//else update table name med values
else { 
  $sql2    = "UPDATE $tbl_name SET time='$time' WHERE session = '$session'"; 
  $result2 = mysqli_query($conn, $sql2); 
}

$sql3              = "SELECT * FROM $tbl_name";
$result3           = mysqli_query($conn, $sql3); 
$count_user_online = mysqli_num_rows($result3);

// efter 1 min, session blir deleted
$sql4    = "DELETE FROM $tbl_name WHERE time<$time_check"; 
$result4 = mysqli_query($conn, $sql4); 

mysqli_close($conn);
?>            
