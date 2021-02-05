<?php
session_start();
require '../db/connect.php';

$path =$_SESSION['path'];//path ค่าเริ่มต้นคือ ../img
$cdir = $_SESSION['dir'];//ชื่อ directory ปัจจุบัน ค่าเริ่มต้นคือ base
$id = $_POST['del'];//dirname ของภาพหรือโฟลเดอร์ที่กด

$aaaaa = "SELECT * FROM $cdir WHERE dirname = '$id' ";
if ($result = mysqli_query($con, $aaaaa)) {
    while ($q = mysqli_fetch_array($result)) {
        $target = $q["path"] ;
        echo $target;
        }
}
unlink($target);
$query2 = "DELETE From $cdir Where dirname ='$id'";
mysqli_query($con,$query2);
$query3 = "DROP TABLE $id";
mysqli_query($con,$query3);
echo '<script>alert("Update Complete!")
window.location.href ="../admin/admin-library.php"</script>';
?>