<?php
session_start();
require_once("../db/connect.php");
//*** Update Status
$sql = "UPDATE User SET LoginStatus = '0', LastUpdate = '0000-00-00 00:00:00' WHERE Username = '" . $_SESSION["Username"] . "' ";
$query = mysqli_query($con, $sql);
session_destroy();
echo   '<script>alert("Logout successfully")
        window.location.href ="../app/login.php"</script>';