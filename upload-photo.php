<?php

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

<!DOCTYPE html>
<html Lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Upload</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="photo-field">
                <input type="file" name="file_img" required>
            </div>
            <div class="title-field">
                <input type="text" name="img_title" placeholder="Image name" required>
            </div>
            <input type="submit" value="Upload Image" name="btn_upload" class="btn_upload">
        </form>
        <a href="index.php">กลับ </a>
    </div>

</body>

</html>