<?php
$host = "localhost";
$username = "root";//root1
$password = "";//Nam1214!!
$db_name = "photogallery";

$con = mysqli_connect($host, $username, $password, $db_name);
mysqli_set_charset($con,"utf8"); //เชื่อมต่อกับฐานข้อมูล
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
//*** Reject user not online
/* $intRejectTime = 20; // Minute
$sql = "UPDATE user SET LoginStatus = '0', LastUpdate = '0000-00-00 00:00:00'  WHERE 1 AND DATE_ADD(LastUpdate, INTERVAL $intRejectTime MINUTE) <= NOW() ";
$query = mysqli_query($con, $sql); */
