<?php
session_start();
require '../db/connect.php';

$path =$_SESSION['path'];//path ค่าเริ่มต้นคือ ../img
$cdir = end($_SESSION['page']);//ชื่อ directory ปัจจุบัน ค่าเริ่มต้นคือ base
$id = $_POST['del'];//dirname ของภาพหรือโฟลเดอร์ที่กด
$type = $_POST['filetype'];
$idd = '"' . $id . '"';
//echo "idd is  " . $idd . '<br>';
$aaaaa = "SELECT * FROM `$cdir` WHERE dirname ='$id'";
//echo "query : " . $aaaaa . '<br>';
if ($result = mysqli_query($con, $aaaaa)) {
    while ($q = mysqli_fetch_array($result)) {
        $target = $q["path"] ;
        //echo $target;
        }
}
if ($type == 'file'){
    if (unlink($target)){
        $query2 = "DELETE From `$cdir` Where dirname ='$id'";
        mysqli_query($con,$query2);
        if (end($_SESSION['page']) == "base"){
            echo   '<script>alert("Delete Folder Successfully!")
            window.location.href ="../admin/admin-library.php"</script>'; 
        }
        else {
            echo   '<script>alert("Delete Folder Successfully!")
        window.location.href ="../admin/admin-item.php"</script>';
        }
}
}
elseif ($type == 'folder'){
    if (rmdir($target)){
        $query2 = "DELETE From `$cdir` Where dirname ='$id'";
        mysqli_query($con,$query2);
        $query3 = "DROP TABLE `$id`";
        mysqli_query($con,$query3);
        if (end($_SESSION['page']) == "base"){
            echo   '<script>alert("Delete Folder Successfully!")
            window.location.href ="../admin/admin-library.php"</script>'; 
        }
        else {
            echo   '<script>alert("Delete Folder Successfully!")
        window.location.href ="../admin/admin-item.php"</script>';
        }
    }
    else {
        echo '<script>alert("Fail please check folder contents")
        window.location.href ="../admin/admin-library.php"</script>';
    }
}
?>