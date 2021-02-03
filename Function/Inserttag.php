<?php
require '../db/connect.php';
$dir = $_POST ['dir'];
$filetmp = $_FILES['file_img']['tmp_name'];
$filepath = '../img/' . $dir;
$tagimgname = "title";

if (isset($dir)){
    mkdir("../img/$dir");
    $db = "CREATE TABLE $dir (img_id int AUTO_INCREMENT PRIMARY KEY,img_name varchar(255),img_type varchar(255),img_path varchar(255),img_title varchar(255),tag varchar(255));";
    mysqli_query($con,$db);
    $db2 ="INSERT INTO tagmaster (Tag,path) value ('$dir','$filepath')";
    mysqli_query($con,$db2);
    move_uploaded_file($filetmp, $filepath . $tagimgname);
    header('location:../app/library.php');
}
?>