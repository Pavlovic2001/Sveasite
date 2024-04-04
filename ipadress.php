<?php 

$tbl_name   = "ip_users";

$conn = new mysqli("localhost","oygjacku_online","Pavlovic3372","oygjacku_online");
// Check connection
if ($conn->connect_errno) {
  echo "Failed to connect to MySQL: " . $conn->connect_error;
  exit();
}

function visitorIP() {  
    //Check if visitor is from shared network 
      if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $vIP = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //Check if visitor is using a proxy 
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){  
                $vIP = $_SERVER['HTTP_X_FORWARDED_FOR'];  
      }  
    //check for the remote address of visitor.  
    else{  
              $vIP = $_SERVER['REMOTE_ADDR'];  
      }  
      return $vIP;  
    }  
    $vIP = visitorIP();


// adding visitors
$visitor_ip = $vIP;

// checking unique visitors
// $visitor_ip = "185:76:65:511";

//select value från table
$query    = "SELECT * FROM $tbl_name WHERE ip ='$visitor_ip'";
$result = mysqli_query($conn, $query); 

if(!$result)
{
    die("fail". $query);
}
$total_visitors = mysqli_num_rows($result);

//om unique vistor, insert value into table
if($total_visitors < 1)
{
    $query = "INSERT INTO $tbl_name(ip)VALUES('$visitor_ip')";
    $result = mysqli_query($conn, $query); 
}

//väljer från table och deklarerar den variablen till total_visitors
$query    = "SELECT * FROM $tbl_name";
$result = mysqli_query($conn, $query); 
$total_visitors = mysqli_num_rows($result);

?>