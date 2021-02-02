<?php
$servername = "localhost"; 
$username = "root"; 
$password = "";
$database = "photogallery";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connectio
if (!$conn){
    die("Connection failed" . mysqli_connect_error());
}
?>