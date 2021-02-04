 <!-- Check Sessionpersist
===================================================================================================-->
 <?php
 $content = 'officer';
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
      
         .card-img-top {
             max-height: 20vh;
             /*not want to take all vertical space*/
             object-fit: contain;
             /*show all image, autosized, no cut, in available space*/
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

     <hr><br><br><br>

     <!-- *** Page Content
===================================================================================================-->
     <div class="container">

         <!-- navbreadcrumb
===================================================================================================-->
         <nav aria-label="breadcrumb">
             <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="../index.php">Home</a></li>

                 <li class="breadcrumb-item "><a href="Library.php">Library</a></li>

                 <li class="breadcrumb-item active" aria-current="page"> item</li>
             </ol>
         </nav>
         <!-- END navbreadcrumb
===================================================================================================-->


         <h1 class="my-4">Page Heading
             <small>Secondary Text</small>
         </h1>
         <div class="row">



             <!-- card showphoto
 ===================================================================================================-->
             <div class="container">
                 <div class="row g-2">

                     <!-- db code php conphoto
===================================================================================================-->
                     <?php
                        require "../db/connect.php";
                        $dir = $_POST['directory'];
                        $Squery = "SELECT * FROM $dir ORDER BY img_id DESC";
                        if ($result = mysqli_query($con, $Squery)) {
                            while ($img = mysqli_fetch_array($result)) {

                        ?>
                             <!-- END db code php conphoto
===================================================================================================-->

                             <!-- Team photo 
===================================================================================================-->
                             <div class="col-xl-3 col-md-6 mb-4">
                                 <div class="card border-0 shadow">

                                     <a href="<?php echo  $img['img_path']; ?>" data-lightbox="<?php echo $img['img_id']; ?>" data-title="<?php echo $img['img_title']; ?>">

                                         <img  src="<?php echo $img['img_path']; ?>" class="card-img-top" alt="..." >
                                     </a>

                                     <div class="card-body text-center">
                                         <h5 class="card-title"><?php echo $img['img_title']; ?></h5>

                                         <div class="card-text text-black-50"><?php echo "../", $img['img_name']; ?>
                                         </div>

                                         <a href="<?php echo $img['img_path'] ?>" download="<?php $img['img_title'] ?>">
                                             <button class="btn">download</button>
                                         </a>

                                         <form action='function/delete.php' method="POST">
                                             <input type='hidden' name='del' value=" <?php echo $img["img_id"] ?>" />
                                             <button class="btn" type='submit'>humgee</button>
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

         <!-- Pagination  
===================================================================================================-->
         <ul class="pagination justify-content-center">
             <li class="page-item">
                 <a class="page-link" href="#" aria-label="Previous">
                     <span aria-hidden="true">&laquo;</span>
                     <span class="sr-only">Previous</span>
                 </a>
             </li>
             <li class="page-item">
                 <a class="page-link" href="#">1</a>
             </li>
             <li class="page-item">
                 <a class="page-link" href="#">2</a>
             </li>
             <li class="page-item">
                 <a class="page-link" href="#">3</a>
             </li>
             <li class="page-item">
                 <a class="page-link" href="#" aria-label="Next">
                     <span aria-hidden="true">&raquo;</span>
                     <span class="sr-only">Next</span>
                 </a>
             </li>
         </ul>
         <!-- END Pagination  
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