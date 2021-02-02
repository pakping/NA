<?php
/* include "db/connect.php"; 
if(isset($_GET['img_id'])){

$id = $_GET['img_id'];
$stat - $db->prepare("select * from tbl_photos where img_id = '$id' ");
$stat->bindParam(1, $id); $stat->execute();
$data = $stat->fetch();


$file = 'media/'.$data['filename'];
if (file_exists($file)) {
    echo 'humgee';
    header('Content-Description:'.$data['description']);
    header('Content-Type:'.$data['type']);
    header('Content-Disposition:'.$data['disposition'].';filename="'.basename($file).'"');
    header('Expires:'.$data['expires']);
    header('Cache-Control:'.$data['cache']);
    header('Pragma:'.$data['pragma']);
    header('Content-Length:'.filesize($file));
    readfile($file);
    exit();
}
} */
//https://stackoverflow.com/questions/52199513/downloading-from-website-directory-with-php