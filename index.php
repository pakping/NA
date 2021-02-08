<?php
session_start();
if (isset($_SESSION['type'])){
    if ($_SESSION['type'] == 'admin'){
        echo '<script>alert("admin")
    window.location.href ="admin/admin-index.php"</script>';
    }
    elseif ($_SESSION ['type'] == 'officer'){
        echo '<script>alert("officer")
    window.location.href ="admin/admin-index.php"</script>';
    }
    elseif ($_SESSION['type']=='guest'){
        echo '<script>alert("guest")
    window.location.href ="app/home.php"</script>';
    }
    else {
        echo '<script>alert("other")
    window.location.href ="app/home.php"</script>';
    }
}
else {
    echo '<script>alert("else")
    window.location.href ="app/home.php"</script>';
}
?>
