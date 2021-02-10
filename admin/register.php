<?php
$content = "admin";
require "../auth/Sessionpersist.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <title>เพิ่มสมาชิก</title>
  <meta charset="utf-8">
  <META NAME="robots" CONTENT="noindex,onfollow">
 <link rel="icon" href="../img/logo.png" type="image/gif" sizes="16x16">
  <?php
  include '../components/head/head.php'
  ?>
  <link rel="stylesheet" href="../css/style-navbar.css">
</head>

<body>
  <?php
  include '../components/navbar/navbaradmin.php'
  ?>
  <div class="container">
    <br>
    <form action="../db/dbregister.php" method="post">
      <div class="main-1">
        <div class="shadow-lg p-3">
          <h1>ลงทะเบียน</h1>
          <p>กรอกข้อมูลเพื่อสร้างบัญชีใหม่</p>
          <hr>
          <table style=" width:100%">
            <tr>
              <td>
                <div class="mb-3">
                  <label for="Uname" class="form-label"><b>ชื่อผู้ใช้</b></label>
                  <input type="text" class="form-control" placeholder="ระบุชื่อผู้ใช้" name="uname" id="uname" required>
                </div>
                <div class="mb-3">
                  <label for="psw" class="form-label"><b>รหัสผ่าน</b></label>
                  <input type="password" class="form-control" placeholder="ระบุรหัสผ่าน" name="psw" id="psw" required>
                </div>
                <div class="mb-3">
                  <label for="psw-repeat" class="form-label"><b>รหัสผ่านอีกครั้ง</b></label>
                  <input type="password" class="form-control" placeholder="ระบุรหัสผ่านอีกครั้ง" name="psw-repeat" id="psw-repeat" required>
                </div>
              </td>
              <td>
              </td>
            </tr>
          </table>
          <button type="submit" class="btn btn-primary">สมัคร</button>
        </div>
      </div>
    </form>
  </div>
</body>

</html>