<?php
$dir = $_POST['dir'];
if (!file_exists("../img/ " . $dir)){
    mkdir("../img/$dir"); //ถ้ายังไม่มีโฟลเดอร์ให้สร้างใหม่
    $query = "CREATE TABLE $dir (dirname varchar(255) PRIMARY KEY,path varchar(255),type varchar(255);";
}
else{
    '<script>alert("This Folder is already exist")
    window.location.href ="../app/library.php"</script>';
}

?>