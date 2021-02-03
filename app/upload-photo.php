<?php
require "../db/connect.php";
if (isset($_POST['btn_upload'])) {
  $filetmp = $_FILES['file_img']['tmp_name'];
  $filename = $_FILES['file_img']['name'];
  $filetype = $_FILES['file_img']['type'];
  $tag = $_POST['inputtag'];
  $filepath = '../img/'.$tag . '/' . $filename;
  $filetitle = $_POST['img_title'];
  
   
    $query = "INSERT INTO $tag (img_name, img_type,img_path, img_title)
                      VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $query);
    if ($stmt == true){
      mysqli_stmt_bind_param($stmt, "ssss", $filename, $filetype, $filepath, $filetitle);
      move_uploaded_file($filetmp, $filepath);
    if (mysqli_stmt_execute($stmt)) {
      header("Location: ");
    } else {
      echo "Something went wrong!";
  }}else{
    "<script>alert('ไม่มีประเภทดังกล่าว โปรดเลือกใหม่')<script>";
  }

  
}


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
    /* include '../components/head/head.php' */
    ?>

    
</head>

<body>
  <!-- Navigation
  ===================================================================================================-->
  <?php
  /* include '../components/navbar/navbaradmin.php' */
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

        <form action="" method="post" enctype="multipart/form-data">

          <div class="form-group row">
            <label for=" " class="col-sm-2 col-form-label" >เลือกภาพ/วีดีโอ</label>
            <div class="col-sm-10">
              <div class="photo-field">
                <input class="form-control"  type="file" name="file_img" required>
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
            <label for=" " class="col-sm-2 col-form-label">เพิ่มเข้าประเภทสินค้า</label>
            <div class="col-sm-10">
              <input class="form-control" list="datalistOptions" id="exampleDataList" name="inputtag" placeholder="Type to search...">
              <datalist id="datalistOptions">
                <option value="San Francisco">

              </datalist>
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