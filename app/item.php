 <!-- Check Sessionpersist
===================================================================================================-->
 <?php
    $content = 'everyone';
    include '../auth/Sessionpersist.php';
    $_SESSION['ppath'] = $_SESSION['path'];
    if (isset($_POST['path'])) {
        $path = $_POST['path'];
        $_SESSION['path'] = $path;
    } else {
        $path  =  $_SESSION['path'];
    }
    if (isset($_POST['directory2'])) {
        array_pop($_SESSION['page']);
        $x = end($_SESSION['page']);
        $dir = end($_SESSION['page']);
        if (end($_SESSION['page']) == 'base') {
            header('location:../app/library.php');
        } else {
            header('location:../app/item.php');
        }
    } elseif (isset($_POST['directory'])) {
        if (end($_SESSION['page']) !== $_POST['directory']) {
            array_push($_SESSION['page'], $_POST['directory']);
        }
        $dir = end($_SESSION['page']);
    } else {
        $dir = end($_SESSION['page']);
    }
    ?>

 <!-- END Check Sessionpersist
===================================================================================================-->

 <!doctype html>
 <html lang="en">

 <head>
     <!-- Required meta tags 
===================================================================================================-->
     <title>สินค้า</title>
     <meta charset="utf-8">
     <META NAME="robots" CONTENT="noindex,onfollow">
     <link rel="icon" href="../img/logo.png" type="image/gif" sizes="16x16">
     <!-- Required meta tags 
===================================================================================================-->

     <?php
        include '../components/head/head.php';
        ?>



     <!-- CSS
===================================================================================================-->
     <link rel="stylesheet" href="../css/style-navbar.css">
     <link href="../dist/css/lightbox.min.css" rel="stylesheet">
     <style>
         .card-1 {
             box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
             transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
         }

         .card-1:hover {
             box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
         }
     </style>
     <!-- END CSS 
===================================================================================================-->

 </head>

 <body>

     <!-- navbar
===================================================================================================-->
     <?php
        include '../components/navbar/navbar.php';
        ?>
     <!-- END navbar 
===================================================================================================-->

     <br><br><br>

     <!-- *** Page Content
===================================================================================================-->
     <div class="container">

         <!-- navbreadcrumb
===================================================================================================-->
         <nav aria-label="breadcrumb">
             <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="../admin/admin-index.php">Home</a></li>

                 <li class="breadcrumb-item active" aria-current="page">
                     <?php
                        foreach ($_SESSION['page'] as $item) {
                            echo  $item . " /";
                        }
                        ?>
                 </li>
             </ol>

             <form action="" method='post'>
                 <button type='btn' class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                         <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
                     </svg>Back</button>
                 <input type='hidden' name='directory2' value='<?php end($_SESSION['page']) ?>'>

             </form>
             <!-- <li class="breadcrumb-item active" aria-current="page"> Library</li> -->

         </nav><br>
         <!-- END navbreadcrumb
===================================================================================================-->

         <!-- card showphoto
 ===================================================================================================-->
         <div class="container">
             <div class="row ">

                 <!-- db code php conphoto
===================================================================================================-->
                 <?php
                    require "../db/connect.php";

                    $Squery = "SELECT * FROM $dir ORDER BY type,dirname";
                    if ($result = mysqli_query($con, $Squery)) {
                        while ($img = mysqli_fetch_array($result)) {
                            if ($img['type'] == 'folder') {
                    ?>
                             <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                 <div class="card card-1">
                                     <div class="card-body text-center">
                                         <h5 class="card-title"><?php echo $img['dirname']; ?></h5>
                                         <form action='item.php' method="POST">
                                             <input type='hidden' name='path' value="<?php echo $img["path"]; ?>" />
                                             <input type='hidden' name='directory' value=" <?php echo $img["dirname"]; ?>" />
                                             <button type="submit" class="btn" style="width: 100%; height: 287px;">
                                                 <ion-icon name="folder-open-outline" size="large"></ion-icon><br> More
                                             </button>
                                         </form>
                                     </div>
                                 </div>
                             </div>

                         <?php
                            } elseif ($img['type'] == 'file') {
                            ?>
                             <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                 <div class="card card-1">
                                     <a href="<?php echo  $img['path']; ?>" data-lightbox="<?php echo $img['dirname']; ?>" data-title="<?php echo $img['dirname']; ?> " style="height: 200px; overflow: hidden;">
                                         <object data="<?php echo $img['path']; ?>" class="card-img-top" width= "100%" height="100%"> </object>
                                     </a>
                                     <div class="card-body">
                                         <h5 class="card-title"><?php echo $img['dirname']; ?></h5>
                                         <p>รายละเอียด</p>
                                         <div class="row align-item-start">
                                             <div class="col">

                                             </div>
                                             <div class="col">
                                                 <a href="<?php echo $img['path'] ?>" download="<?php $img['dirname'] ?>">
                                                     <button class="btn btn-outline-success" style="width: 100%;">
                                                         <ion-icon name="save-outline" size="large"></ion-icon>
                                                     </button>
                                                 </a>
                                             </div>
                                         </div>
                                         </form>

                                     </div>
                                 </div>
                             </div>
                             <!--END Team photo 
 ===================================================================================================-->

                 <?php
                            }
                        }
                    }
                    ?>

             </div>
             <!-- /.row -->
         </div>
         <!-- /.container -->

     </div>
     <!--END card showphoto
===================================================================================================-->



     </div>
     <!-- container -->

     <!--***END Page Content
===================================================================================================-->
     <div style="height: 700px"></div>

     <!-- footer 
===================================================================================================-->
     <?php
        include('../components/footer.php')
        ?>
     <!-- END footer 
===================================================================================================-->

 </body>

 </html>