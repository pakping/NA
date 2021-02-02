<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "photogallery";

$con = mysqli_connect($host, $username, $password, $db_name);
mysqli_set_charset($con, "utf8"); //เชื่อมต่อกับฐานข้อมูล
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
//*** Reject user not online
/* $intRejectTime = 20; // Minute
$sql = "UPDATE user SET LoginStatus = '0', LastUpdate = '0000-00-00 00:00:00'  WHERE 1 AND DATE_ADD(LastUpdate, INTERVAL $intRejectTime MINUTE) <= NOW() ";
<<<<<<< HEAD
$query = mysqli_query($con, $sql); */
=======
$query = mysqli_query($con, $sql); */
>>>>>>> 65cf62bba29d99d62ed50cd3ab1b9db9f76f6cbd
