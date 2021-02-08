<?php
session_start();
if (isset($_SESSION['type'])){
    if ($_SESSION['type'] == 'admin'){
        echo '<script>
    window.location.href ="admin/admin-index.php"</script>';
    }
    elseif ($_SESSION ['type'] == 'officer'){
        echo '<script>
    window.location.href ="admin/admin-index.php"</script>';
    }
    elseif ($_SESSION['type']=='guest'){
        echo '<script>
    window.location.href ="app/home.php"</script>';
    }
    else {
        echo '<script>
    window.location.href ="app/home.php"</script>';
    }
}
else {
    echo '<script>
    window.location.href ="app/home.php"</script>';
}
?>
