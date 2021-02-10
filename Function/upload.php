<?php
session_start();

require "../db/connect.php";
$path =$_SESSION['path'];//path ค่าเริ่มต้นคือ ../img
$cdir = end($_SESSION['page']);//ชื่อ directory ปัจจุบัน ค่าเริ่มต้นคือ base

$title = $_POST['newtitle'];
$filetmp = $_FILES['file_img']['tmp_name'];
$filename = $_FILES['file_img']['name'];
$filepath = $path . $filename;
$select ="SELECT * FROM $cdir Where dirname = '$filename'";
$result = mysqli_query($con,$select);
echo $cdir;
if (mysqli_num_rows($result)==0){
    $query = "INSERT INTO $cdir (dirname,path,type) VALUE ('$title','$filepath','file')";
    mysqli_query($con,$query);
    move_uploaded_file($filetmp, $filepath);
    echo '<script>alert("Upload complete!")
        window.location.href ="../admin/admin-item.php"</script>';
}
elseif (mysqli_num_rows($result)==1){
    echo '<script>alert("This file is already exist")
    window.location.href ="../admin/admin-item.php"</script>';
}
?>