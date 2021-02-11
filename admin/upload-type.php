<?php
$content = 'admin';
include '../auth/Sessionpersist.php';
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <META NAME="robots" CONTENT="noindex,onfollow">
  <link rel="icon" href="../img/logo.png" type="image/gif" sizes="16x16">  
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
  <br><br style="height: 500px">
  <div class="container">
    <div class="card border-0 shadow p-3">
      <div class="card-body">
        <h1 class="font-weight-light">สร้างโฟลเดอร์ใหม่</h1>
        <br>
        <form action="../Function/makefolder.php" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-sm-8">
              <!-- <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="newtitle" placeholder=" namephoto" required>
                <label for="floatingInput">ชื่อปก</label>
              </div> -->
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="dir" placeholder=" namephoto" required>
                <label for="floatingInput">ชื่อ</label>
              </div>
              <!-- <div class="input-group mb-3">
                <input type="file" name="file_img" class="form-control" id="inputGroupFile02" required>
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
              </div> -->
              <button class="btn btn-primary">สร้างโฟลเดอร์ใหม่</button>
            </div>
            <div class="col-sm-4">
              <div class="ratio ratio-16x9">
                <iframe src="" title="YouTube video" allowfullscreen></iframe>
              </div>
            </div>
          </div>



          <!-- <div class="form-group row">
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


          <div class="form-group row">
            <div class="d-grid gap-2 col-6 mx-auto">
              <button type="submit" class="btn btn-primary">สร้างประเภทสินค้า</button>
            </div>
          </div> -->
        </form>

      </div>
    </div>
  </div>

  <div style="height: 300px"></div>

  <?php include '../components/footer.php' ?>



</body>


</html>