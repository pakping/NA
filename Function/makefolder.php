<?php
session_start();
require "../db/connect.php";
$path ="";
    foreach ($_SESSION['path'] as $item) {
        $path = $path . $item;
}
$cdir = end($_SESSION['page']);//ชื่อ directory ปัจจุบัน ค่าเริ่มต้นคือ base
$dir = $_POST['dir'];//ชื่อโฟลเดอร์ที่ต้องการ
$a = '/';
$newpath = $path . $dir;
if (!file_exists($newpath)){
    mkdir($newpath); //ถ้ายังไม่มีโฟลเดอร์ให้สร้างใหม่
    $query = "CREATE TABLE `$dir` (dirname varchar(255) PRIMARY KEY,path varchar(255),type varchar(255))";
    mysqli_query($con,$query);
    $newpath = $newpath . '/';
    $query2 = "INSERT INTO `$cdir` (dirname,path,type) value('$dir','$newpath','folder')";
    mysqli_query($con,$query2);
    if ($path == '../img/'){
    echo '<script>alert("Update Complete!")
    window.location.href ="../admin/admin-library.php"</script>';
    }
    else{
    echo '<script>alert("Update Complete!")
    window.location.href ="../admin/admin-item.php"</script>';
    }

}
else{
    echo '<script>alert("This Folder is already exist")
    window.location.href ="../admin/admin-library.php"</script>';
}

?>