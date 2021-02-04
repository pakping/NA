<?php
require '../db/connect.php';
$dir = $_POST ['dir'];
$filetmp = $_FILES['file_img']['tmp_name'];
$filename = $_FILES['file_img']['name'];
$filepath = '../img/' . $dir . '/' . $filename;
$filetype = $_FILES['file_img']['type'];
$filetitle = $_POST['newtitle'];
/* $path = '../img/'. $dir; */
if (isset($dir)){
    mkdir("../img/$dir");
    $db = "CREATE TABLE $dir (img_id int AUTO_INCREMENT PRIMARY KEY,img_name varchar(255),img_type varchar(255),img_path varchar(255),img_title varchar(255));";
    mysqli_query($con,$db);
    $db2 ="INSERT INTO tagmaster (Tag,path) value ('$dir','$filepath')";
    mysqli_query($con,$db2);
    $query = "INSERT INTO $dir (img_name, img_type,img_path, img_title)
                VALUES ('$filename', '$filetype', '$filepath', '$filetitle')";
    mysqli_query($con,$query);
    move_uploaded_file($filetmp, $filepath);
    header('location:../app/library.php');

}
?>