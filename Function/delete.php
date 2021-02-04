<?php
require '../db/connect.php';
session_start();
$tag = $_SESSION['tag'];
$id = $_POST['del'];
$query1 = "SELECT * From $tag where img_id = '$id'";
$result = mysqli_query($con,$query1);
$fetch = mysqli_fetch_assoc($result);
echo print_r($fetch['img_path']);
unlink($fetch['img_path']);
$query2 = "DELETE From $tag Where img_id ='$id'";
mysqli_query($con,$query2);
echo '<script>alert("Update Complete!")
window.location.href ="../app/library.php"</script>';
?>