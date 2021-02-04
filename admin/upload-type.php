<?php
$content = 'officer';
include '../auth/Sessionpersist.php';
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">

  <META NAME="robots" CONTENT="noindex,onfollow">
  <?php
  include '../components/head/head.php';
  ?>
<link rel="stylesheet" href="../css/style-navbar.css">

  <title>New Tag</title>
</head>

<body class="d-flex flex-column">

  <?php
  include '../components/navbar/navbaradmin.php'
  ?>
  <hr>
  <br>

  <div class="container">
    <div class="card border-0 shadow my-5">
      <div class="card-body p-5">
        <h1 class="font-weight-light">สร้างประเภทสิ่งของ</h1>
        <br>
        <form action="../Function/Inserttag.php" method="post" enctype="multipart/form-data">

          <div class="form-group row">
            <label class="col-sm-2 col-form-label" class="form-label">เลือกรูปภาพ/วีดีโอ</label>
            <div class="col-sm-10">
              <input type="file" name="file_img" required>
            </div>


          </div>


          <div class="form-group row">
            <label for=" " class="col-sm-2 col-form-label">ชื่อรูปปก</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="newtitle" placeholder=" namephoto">
            </div>
          </div>

          <div class="form-group row">
            <label for=" " class="col-sm-2 col-form-label">ชื่อประเภท</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="dir" placeholder=" namephoto">
            </div>
          </div>


      </div>
      <div class="form-group row">
        <div class="d-grid gap-2 col-6 mx-auto">
          <button type="submit" class="btn btn-primary">สร้างประเภทสินค้า</button>
        </div>
      </div>
      </form>
      <div style="height: 200px"></div>
    </div>
  </div>
  </div>



  <?php include '../components/footer.php' ?>



</body>


</html>