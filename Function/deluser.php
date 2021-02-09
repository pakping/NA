<?php
session_start();
require '../db/connect.php';

$user = $_POST['user'];

$query = "Delete from user Where username = '$user'";
$result =mysqli_query($con,$query);
if ($result){
echo '<script>alert("User Earsed")
        window.location.href ="../admin/edit-user.php"</script>';
}


?>