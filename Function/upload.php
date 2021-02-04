<?php
session_start();
require "../db/connect.php";
$filetmp = $_FILES['file_img']['tmp_name'];
$filename = $_FILES['file_img']['name'];
$filetype = $_FILES['file_img']['type'];
$tag = $_POST['inputtag'];
$filepath = '../img/'.$tag . '/' . $filename;
$filetitle = $_POST['img_title'];
$select ="SELECT * FROM tagmaster Where Tag = '$tag'";
$result = mysqli_query($con,$select);
if (mysqli_num_rows($result)==1){
$query = "INSERT INTO $tag (img_name, img_type,img_path, img_title)
            VALUES (?, ?, ?, ?)";
$stmt = mysqli_prepare($con, $query);
if ($stmt == true){
    mysqli_stmt_bind_param($stmt, "ssss", $filename, $filetype, $filepath, $filetitle);
    move_uploaded_file($filetmp, $filepath);
    if (mysqli_stmt_execute($stmt)) {
        echo '<script>alert("Update Complete!")
        window.location.href ="../app/library.php"</script>';  //แสดง alert box แล้วไปยังหน้า library หลังยืนยัน 
    } else {
        echo '<script>alert("fail!")
        window.location.href ="../app/upload-photo.php"</script>';
    }}
    else{
      echo '<script>alert("not go!")
       window.location.href ="../app/upload-photo.php"</script>';
    }
}
else{
    '<script>alert("Tag not exist")
    window.location.href ="../app/upload-photo.php"</script>';
  }
?>