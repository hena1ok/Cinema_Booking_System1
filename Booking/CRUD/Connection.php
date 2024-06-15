<?php
$serverName = 'localhost';
$userName = 'root';
$dbName = 'cinema_booking';
$password = '';

$getConnection = mysqli_connect($serverName,$userName,$password,$dbName);

if($getConnection){
  
}else{
  echo "Connection Error".mysqli_connect_error();
}
