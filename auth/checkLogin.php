<?php
session_start();

require_once("../DB/connect.php");

$strUsername = $_POST['uname'];
$strPassword = $_POST['psw'];

$strSQL = "SELECT * FROM User WHERE Username = '" . $strUsername . "' 
	and Password = '" . $strPassword . "'";
$objQuery = mysqli_query($con, $strSQL);
$objResult = mysqli_fetch_array($objQuery);
if (!$objResult) {
	echo "Username and Password Incorrect!";
	header("location:../app/home.php");
	exit();
} else {
	if ($objResult["LoginStatus"] == "1") {
		echo "'" . $strUsername . "' Exists login!";
		exit();
	} else {
		//*** Update Status Login
		$sql = "UPDATE User SET LoginStatus = '1' , LastUpdate = NOW() WHERE Username = '" . $objResult["Username"] . "' ";
		$query = mysqli_query($con, $sql);
		//*** Session
		$_SESSION["Username"] = $objResult["Username"];
		if ($objResult["Access"] == "admin") {
			$_SESSION['type'] = 'admin';
			header("location:../app/library.php");
		} elseif ($objResult["Access"] == "officer") {
			$_SESSION['type'] = 'officer';
			header("location:../admin/admin-index.php");
		}
	}
}
mysqli_close($con);
