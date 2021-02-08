<?php
session_start();
if (isset($_SESSION)) {
    if (!isset($_SESSION['type'])){
        $_SESSION['type'] = "guest";
    }
    else{
        if ($_SESSION['type'] == 'admin') {
            if($content == 'everyone'){
                echo   '<script>alert("Access denied!")
                window.location.href ="../admin/admin-library.php"</script>';
            }
        }
        elseif ($_SESSION['type'] == 'officer') {
            if ($content == 'admin') {
                echo   '<script>alert("Access denied!")
                window.location.href ="../admin/admin-library.php"</script>';
            }
        } 
        elseif ($_SESSION['type'] == 'guest') {
            if ($content != 'everyone'){
                echo   '<script>alert("Access denied!")
                window.location.href ="../admin/admin-library.php"</script>';
            }
        }
    }

}
