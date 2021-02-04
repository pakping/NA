<?php
session_start();
if (isset($_SESSION)) {
    if ($_SESSION['type'] == 'admin') {
    }
    //if user login we will check session and display user content
    elseif ($_SESSION['type'] == 'officer') {
        if ($content == 'admin') {
            header("location:../app/homeadmin.php");
        }
    } elseif ($_SESSION['type'] == 'guest') {
        if ($content == 'admin' || $content == 'officer'){
        header("location:../index.php");}
    }

}
