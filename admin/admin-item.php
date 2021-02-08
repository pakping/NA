 <!-- Check Sessionpersist
===================================================================================================-->
 <?php
    $content = 'officer';
    include '../auth/Sessionpersist.php';
    $_SESSION['ppath'] = $_SESSION['path'];
    if (isset($_POST['path'])) {
            $path = $_POST['path'];
            $_SESSION['path'] = $path;
        } else {
            $path  =  $_SESSION['path'];
        }

        if (isset($_POST['directory'])) {
            $dir = $_POST['directory'];
            $_SESSION['dir'] = $dir;
        } else {
            $dir = $_SESSION['dir'];
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
     <!-- Required meta tags 
===================================================================================================-->

     <?php
        include '../components/head/head.php';
        ?>



     <!-- CSS
===================================================================================================-->
     <link rel="stylesheet" href="../css/style-navbar.css">
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
        include '../components/navbar/navbaradmin.php';
        
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
                <li class="breadcrumb-item"><a href="<?php $_SESSION['ppath'];?>"><?php echo $_SESSION['path']; ?></a></li>

                <!-- <li class="breadcrumb-item active" aria-current="page"> Library</li> -->
            </ol>
        </nav>
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

                    $Squery = "SELECT * FROM $dir ORDER BY dirname DESC";
                    if ($result = mysqli_query($con, $Squery)) {
                        while ($img = mysqli_fetch_array($result)) {
                            if ($img['type'] == 'folder') {
                    ?>
                             <div class="col-xl-4 col-md-6 mb-4">
                                 <div class="card card-1">
                                     <div class="boximg">
                                         <img src="../cover/2020-12-26.png" class="card-img-top" alt="" style="width: 100%;">
                                     </div>
                                     <div class="card-body text-center">
                                         <h5 class="card-title"><?php echo $img['dirname']; ?></h5>
                                         <form action='admin-item.php' method="POST">
                                             <input type='hidden' name='path' value="<?php echo $img["path"]; ?>" />
                                             <input type='hidden' name='directory' value="<?php echo $img["dirname"]; ?>" />
                                             <input type='hidden' name='filetype' value="<?php echo $img["type"]; ?>" />
                                             <button type="submit" class="btn btn-outline-primary btn-auto btn-block">More</button>
                                         </form>
                                     </div>
                                 </div>
                             </div>
                         <?php
                            } elseif ($img['type'] == 'file') {
                            ?>
                             <div class="col-xl-4 col-md-6 mb-4">
                                 <div class="card card-1">
                                     <a href="<?php echo  $img['path']; ?>" data-lightbox="<?php echo $img['dirname']; ?>" data-title="<?php echo $img['dirname']; ?> " style="height: 200px; overflow: hidden;">
                                         <img src="<?php echo $img['path']; ?>" class="card-img-top" alt="..." style="width: 100%;">
                                     </a>
                                     <div class="card-body">
                                         <h5 class="card-title"><?php echo $img['dirname']; ?></h5>
                                         <p>รายละเอียด</p>
                                         <form action='../function/delete.php' method="POST">
                                             <input type='hidden' name='del' value="<?php echo $img["dirname"] ?>" />
                                             <input type='hidden' name='filetype' value="<?php echo $img["type"]; ?>" />
                                             <button class="btn btn-danger" type='submit'>delete</button>
                                         </form>
                                         <button class="btn btn-success">download
                                             <a href="<?php echo $img['path'] ?>" download="<?php $img['dirname'] ?>"></a>
                                         </button>
                                     </div>
                                 </div>
                             </div>
                             <!--END Team photo 
 ===================================================================================================-->
                 <?php
                            }
                        }
                        //button add file and folder 
                    }
                    include '../function/addfolder.php';
                    include ('../Function/additem.php');
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