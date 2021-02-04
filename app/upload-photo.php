<?php
include '../auth/Sessionpersist.php';
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags 
  ===================================================================================================-->
  <title></title>
  <meta charset="utf-8">
  <META NAME="robots" CONTENT="noindex,onfollow">
  <!-- END Required meta tags 
  ===================================================================================================-->

  <?php
  include '../components/head/head.php'
  ?>


</head>

<body>
  <!-- Navigation
  ===================================================================================================-->
  <?php
  include '../components/navbar/navbaradmin.php';
  ?>

  <br>
  <!-- END Navigation
  ===================================================================================================-->
  <br style="height: 500px">
  <hr>
  <div class="container">
    <div class="card border-0 shadow my-5">
      <div class="card-body p-5">
        <h1 class="font-weight-light"></h1>

        <form action="../Function/upload.php" method="post" enctype="multipart/form-data">

          <div class="form-group row">
            <label for=" " class="col-sm-2 col-form-label">เลือกภาพ/วีดีโอ</label>
            <div class="col-sm-10">
              <div class="photo-field">
                <input class="form-control" type="file" name="file_img" required>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for=" " class="col-sm-2 col-form-label">ชื่อ</label>
            <div class="col-sm-10">
              <div class="title-field">
                <input type="text" name="img_title" placeholder="Image name" required>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for=" " class="col-sm-2 col-form-label">ชื่อ</label>
            <select name="room" class="form-select" aria-label="Default select example" required>
              <option selected value="">โปรดเลือก...</option>
              <?php require '../db/connect.php';
              $Squery = "SELECT * FROM tagmaster ORDER BY Tag DESC";
              if ($result = mysqli_query($con, $Squery)) {
                $i = 1;
                while ($tag = mysqli_fetch_array($result)) {
              ?>
                  <option value="<?php echo $tag['Tag']; ?>"><?php echo $i . ':' . $tag['Tag']; ?></option>
              <?php
                  $i = $i + 1;
                }
              }
              ?>
            </select>
          </div>
      </div>

      <br>
      <div class="form-group row">
        <label for=" " class="col-sm-2 col-form-label">เพิ่มเข้าประเภทสินค้า</label>
        <div class="col-sm-10">
          <input type="submit" value="Upload Image" name="btn_upload" class="btn btn-primary">
        </div>
      </div>
      </form>

    </div>
    <div style="height: 200px"></div>

  </div>
  </div>
  </div>

  <?php include '../components/footer.php' ?>

</body>

</html>