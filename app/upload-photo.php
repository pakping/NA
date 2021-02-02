<?php
include '../auth/Sessionpersist.php';
?>

require "db/connect.php";
if (isset($_POST['btn_upload'])) {
    $filetmp = $_FILES['file_img']['tmp_name'];
    $filename = $_FILES['file_img']['name'];
    $filetype = $_FILES['file_img']['type'];
    $filepath = 'img/' . $filename;
    $filetitle = $_POST['img_title'];

    move_uploaded_file($filetmp, $filepath);
    $query = "INSERT INTO tbl_photos (img_name, img_type, img_path, img_title)
                    VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "ssss", $filename, $filetype, $filepath, $filetitle);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: index.php");
    } else {
        echo "Something went wrong!";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <title>Hello, world!</title>
</head>

<body class="d-flex flex-column">

  <?php
  include('../components/navbaradmin.php');
  ?>
  <hr>
  <br>

  <div class="container">
    <div class="card border-0 shadow my-5">
      <div class="card-body p-5">
        <h1 class="font-weight-light"> อัพโหลดรูปภาพ</h1>




        <form action="" method="post" enctype="multipart/form-data">

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">เลือกรูปภาพ/วีดีโอ</label>
            <div class="col-sm-10">
              <input type="file" name="file_img-vdo" required>
            </div>


          </div>

          <div class="form-group row">
            <label for=" " class="col-sm-2 col-form-label">ชื่อรูปภาพ/วีดีโอ</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="namephoto" placeholder=" namephoto">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">ประเภทภาพ/วีดีโอ</label>
            <div class="col-sm-10">
              <select name="typephoto" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
            
          </div>
          <div class="form-group row">
            <div class="d-grid gap-2 col-6 mx-auto">
              <button type="submit" class="btn btn-primary">อัพโหลด</button>
            </div>
          </div>
        </form>
        <div style="height: 300px"></div>
      </div>
    </div>
  </div>



  <?php include '../components/footer.php' ?>



</body>

<<<<<<< HEAD

</html>
=======
</html>
>>>>>>> dc1ea18346a92843ecc10be8e9fe4b0bb218252c
