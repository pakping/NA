<?php
session_start();
require '../db/connect.php';

$path =$_SESSION['path'];//path ค่าเริ่มต้นคือ ../img
$cdir = $_SESSION['dir'];//ชื่อ directory ปัจจุบัน ค่าเริ่มต้นคือ base
$id = $_POST['del'];//dirname ของภาพหรือโฟลเดอร์ที่กด
$type = $_POST['filetype'];
echo "type is " . $type ;
$aaaaa = "SELECT * FROM $cdir WHERE dirname = '$id' ";
if ($result = mysqli_query($con, $aaaaa)) {
    while ($q = mysqli_fetch_array($result)) {
        $target = $q["path"] ;
        echo $target;
        }
}
if ($type == 'file'){
    if (unlink($target)){
        $query2 = "DELETE From $cdir Where dirname ='$id'";
        mysqli_query($con,$query2);
        echo '<script>alert("Delete File Successfully!")
        window.location.href ="../admin/admin-library.php"</script>';
    }
    else {
        echo   '<script>alert("Fail to delete file (file might be in use in another program)")
        window.location.href ="../admin/admin-library.php"</script>';
    }
}
elseif ($type == 'folder'){
    if (rmdir($target)){
        $query2 = "DELETE From $cdir Where dirname ='$id'";
        mysqli_query($con,$query2);
        $query3 = "DROP TABLE $id";
        mysqli_query($con,$query3);
        echo   '<script>alert("Delete Folder Successfully!")
        window.location.href ="../admin/admin-library.php"</script>';
    }
    else {
        echo '<script>alert("Fail to delete please delete all file in folder first")
        window.location.href ="../admin/admin-library.php"</script>';
    }
}
?>