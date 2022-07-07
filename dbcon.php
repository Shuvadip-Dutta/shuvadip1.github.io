<?php 

// Development connection
// $server="localhost";
// $username="root";
// $password="";
// $db="mybbs";
// Remote connection
$server="remotemysql.com";
$username="id16986306_anujsingh";
$password="@EDCX^6IYuB+_frN";
$db="id16986306_mybbs";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
  
}

else
die("connection to this database failed due to " .mysqli_connect_error());


?>
