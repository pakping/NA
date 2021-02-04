 <!-- Check Sessionpersist
===================================================================================================-->
 <?php
$content = 'everyone';
include '../auth/Sessionpersist.php';
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
        include '../components/head/head.php'
        ?>



     <!-- CSS
===================================================================================================-->

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
        include('../components/navbar/navbar-2.php');
        ?>
     <!-- END navbar 
===================================================================================================-->

     <br><br><br>

     <!-- *** Page Content
===================================================================================================-->
     <div class="container">

         <!-- navbreadcrumb
===================================================================================================-->

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
                        $dir = $_POST['directory'];
<<<<<<< HEAD
=======
                        $_SESSION['tag'] = $dir;
>>>>>>> 1d3adb5949620c6a71361667bdf6521bc7118900
                        $Squery = "SELECT * FROM $dir ORDER BY img_id DESC";
                        if ($result = mysqli_query($con, $Squery)) {
                            while ($img = mysqli_fetch_array($result)) {

                        ?>
                             <!-- END db code php conphoto
===================================================================================================-->

                             <!-- Team photo 
===================================================================================================-->
<<<<<<< HEAD
                             <div class="col-xl-3 col-md-6 mb-4">
                                 <div class="card border-0 shadow">

                                     <a href="<?php echo "../", $img['img_path']; ?>" data-lightbox="<?php echo $img['img_id']; ?>" data-title="<?php echo $img['img_title']; ?>">

                                         <img  src="<?php echo "../", $img['img_path']; ?>" class="card-img-top" alt="..." >
=======
                             <div class="col-xl-4 col-md-6 mb-4">
                                 <div class="card card card-1">
                                     <a href="<?php echo  $img['img_path']; ?>" data-lightbox="<?php echo $img['img_id']; ?>" data-title="<?php echo $img['img_title']; ?> " style="height: 200px; overflow: hidden;">
                                         <img src="<?php echo $img['img_path']; ?>" class="card-img-top" alt="..." style="width: 100%;">
>>>>>>> 1d3adb5949620c6a71361667bdf6521bc7118900
                                     </a>
                                     <div class="card-body">
                                         <h5 class="card-title"><?php echo $img['img_title']; ?></h5>
<<<<<<< HEAD

                                         <div class="card-text text-black-50"><?php echo "../", $img['img_name']; ?>
                                         </div>

                                         <a href="<?php echo "../", $img['img_path'] ?>" download="<?php $img['img_title'] ?>">
                                             <button class="btn">download</button>
                                         </a>

                                         <form action='function/delete.php' method="POST">
                                             <input type='hidden' name='del' value=" <?php echo $img["img_id"] ?>" />
                                             <button class="btn" type='submit'>humgee</button>
=======
                                         <p>รายละเดียด</p>
                                         <form action='../function/delete.php' method="POST">
                                             <button class="btn btn-success">download
                                                 <a href="<?php echo $img['img_path'] ?>" download="<?php $img['img_title'] ?>">
                                                 </a></button>
                                             <input type='hidden' name='del' value=" <?php echo $img["img_id"] ?>" />
                                             <button class="btn btn-danger" type='submit'>delete</button>
>>>>>>> 1d3adb5949620c6a71361667bdf6521bc7118900
                                         </form>
                                     </div>
                                 </div>
                             </div>
                             <!--END Team photo 
 ===================================================================================================-->

                     <?php
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


     <!-- footer 
===================================================================================================-->
     <?php
        include('../components/footer.php')
        ?>
     <!-- END footer 
===================================================================================================-->

 </body>

 </html>