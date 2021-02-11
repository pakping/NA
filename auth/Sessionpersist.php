<?php
session_start();
if (isset($_SESSION['Username'])) {
    if (isset($_SESSION['type'])){
        if ($_SESSION['type'] == 'admin') {
            if ($content != 'admin') {
                echo   '<script>alert("Access denied!")
                window.location.href ="../admin/admin-library.php"</script>';
            }
        } elseif ($_SESSION['type'] == 'user') {
            if ($content != 'everyone') {
                echo   '<script>alert("Access denied!")
                window.location.href ="../app/home.php"</script>';
            }
        }
    }
    elseif ($content = 'login'){
            
    }  
    else {
                echo '<script>alert("User type error")
            window.location.href ="../app/login.php"</script>';
        }
    
}else {
    echo '<script>alert("You are not logged in")
    window.location.href ="../app/login.php"</script>';
}
