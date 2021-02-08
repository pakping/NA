<?php
session_start();
require 'connect.php';
$name = $_POST['uname'];
$pass = $_POST['psw'];
$pass2 = $_POST['psw-repeat'];
$access = 'officer';

if ($pass == $pass2) {
    /* $uname =$_SESSION["Username"]; */
    $adddata = "INSERT INTO user (Username,Password,Access) VALUE ('$name','$pass','$access')";
    $result = mysqli_query($con, $adddata);
    if ($result) {
        echo "success";
        echo "<script>alert('สมัครสมาชิกเรียบร้อย')
            window.location.href='../admin/register.php';</script>";
    } else {
        echo "fail";
        echo "<script>alert('มีผู้ใช้นี้อยู่แล้ว');
            window.location.href='../admin/register.php';</script>";
    }
} else {
    echo "<script>alert('พาสเวิร์ดไม่ตรงกัน');
            window.location.href='../admin/register.php';</script>";
}
