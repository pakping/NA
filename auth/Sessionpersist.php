<?php
session_start();
if (isset($_SESSION)) {
    if (!isset($_SESSION['type'])){
        $_SESSION['type'] = "guest";
    }
    else{
        if ($_SESSION['type'] == 'admin') {
        }
        elseif ($_SESSION['type'] == 'officer') {
            if ($content == 'admin') {
                header("location:../app/homeadmin.php");
            }
        } 
        elseif ($_SESSION['type'] == 'guest') {
            if ($content != 'everyone'){
            header("location:../index.php");
            }
        }
    }

}
