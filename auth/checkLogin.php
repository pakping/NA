<?php
session_start();

require_once("../db/connect.php");
$strUsername = $_POST['uname'];
$strPassword = $_POST['psw'];

$strSQL = "SELECT * FROM user WHERE Username = '$strUsername' 
	and Password = '$strPassword' ";
$objQuery = mysqli_query($con, $strSQL);
$objResult = mysqli_fetch_array($objQuery);
if (!$objResult) {
	echo '<script> alert("This file is already exist") window.location.href ="../admin/admin-item.php"</script>';
	exit();
} else {
	if ($objResult['LoginStatus'] == '1') {
?>
<script>
alert(\"ผู้ใช้นี้กำลังใช้งานอยู่\");
window.location.assign("../app/login.php");
</script>
<?php
		exit();
	} else {
		//*** Update Status Login
		$sql = 'UPDATE User SET LoginStatus = "1" , LastUpdate = NOW() WHERE Username = $objResult["Username"]';
		$query = mysqli_query($con, $sql);
		//*** Session
		$_SESSION["Username"] = $objResult["Username"];
		if ($objResult["Access"] == "admin") {
			$_SESSION['type'] = 'admin';
			header("location:../admin/admin-index.php");
		} elseif ($objResult["Access"] == "officer") {
			$_SESSION['type'] = 'officer';
			header("location:../admin/admin-index.php");
		}
	}
}
mysqli_close($con);
