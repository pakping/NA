<?php
$dir = $_POST['dir'];
if (!file_exists("../img/ " . $dir)){
    mkdir("../img/$dir"); //ถ้ายังไม่มีโฟลเดอร์ให้สร้างใหม่
}
else{
    '<script>alert("This Folder is already exist")
    window.location.href ="../app/library.php"</script>';
}
?>