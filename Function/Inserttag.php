<?php
require '../db/connect.php';
session_start();
$dir = $_POST ['dir']; //จาก Textbox ชื่อประเภท
$filetmp = $_FILES['file_img']['tmp_name']; //ไฟล์ที่อัพ
$filename = $_FILES['file_img']['name']; //ชื่อไฟล์จากไฟล์ที่อัพ
$filepath = '../cover/' . $filename; //ที่อยู่ปลายทางของไฟล์
$filetype = $_FILES['file_img']['type'];//ชนิดของไฟล์ที่อัพ
$filetitle = $_POST['newtitle'];//จาก Textbox ชื่อรูปปก
/* $path = '../img/'. $dir; */
if (!file_exists("../img/ " . $dir)){
    mkdir("../img/$dir"); //ถ้ายังไม่มีโฟลเดอร์ให้สร้างใหม่
}
if (isset($dir)){ //ตรวจค่าจาก Textbox ว่ามีอยู่จริงไหม
    $db = "CREATE TABLE $dir (img_id int AUTO_INCREMENT PRIMARY KEY,img_name varchar(255),img_type varchar(255),img_path varchar(255),img_title varchar(255));"; //สร้าง Table เพื่อเก็บชื่อไฟล์,ชนิด,สถานที่,และชื่อที่จะแสดง
    mysqli_query($con,$db); //query ใน mysql
    $db2 ="INSERT INTO tagmaster (Tag,path) value ('$dir','$filepath')"; //ป้อนประเภทลงใน Table tagmaster และเก็บ path ที่จะไปยังโฟลเดอร์
    mysqli_query($con,$db2);//query ใน mysql
    move_uploaded_file($filetmp,$filepath);//อัพไฟล์ลงในfolder
    echo '<script>alert("Update Complete!")
    window.location.href ="../app/library.php"</script>';  //แสดง alert box แล้วไปยังหน้า library หลังยืนยัน 
    /* header('location:../app/library.php'); */
}
?>