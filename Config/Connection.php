<?php
$serverName = 'localhost';
$userName = 'root';
$dbName = 'cinema_booking';
$password = '';
$getConnection = mysqli_connect($serverName,$userName,$password,$dbName);
if (mysqli_connect_errno()) {
    echo 'Error! ' . mysqli_connect_error();
}