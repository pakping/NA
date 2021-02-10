<?php
$content = 'everyone';
include '../auth/Sessionpersist.php';
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags 
  ===================================================================================================-->
  <title>เกียวกับเรา</title>
  <meta charset="utf-8">
  <meta NAME="robots" CONTENT="noindex,onfollow">
 <link rel="icon" href="../img/logo.png" type="image/gif" sizes="16x16">
  <!-- Required meta tags 
  ===================================================================================================-->

  <?php
    include '../components/head/head.php'
    ?>
    <link rel="stylesheet" href="../css/style-navbar.css">

</head>

<body class="d-flex flex-column">

  <!-- navbar
  ===================================================================================================-->
  <?php
  include('../components/navbar/navbar.php');
  ?>
  <!-- END navbar
  ===================================================================================================-->
  <br>
  <!-- Page Content
  ===================================================================================================-->
  <div class="container">

    <div class="card border-0 shadow my-5">

     
          <!-- Image Showcase -->
    <section class="showcase"> 
      <div class="container-fluid p-0">
        <div class="row g-0">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('../css/img/showcase-1.jpg');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>Full Responsive Design</h2>
            <p class="lead mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo est rerum, et magnam animi accusamus atque explicabo facilis! Minus, perferendis.</p>
          </div>
        </div>

        <div class="row g-0">
          <div class="col-lg-6 text-white showcase-img" style="background-image: url('../css/img/showcase-2.jpg');"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h2>Updated for Bootstrap</h2>
            <p class="lead mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque odit consequuntur provident exercitationem laboriosam facere, sed aliquid facilis minima. Nulla accusantium odit a est ipsam.</p>
          </div>
        </div>

        <div class="row g-0">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('../css/img/showcase-3.jpg');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>Easy to use &amp; Customize</h2>
            <p class="lead mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt, ad tenetur itaque molestiae facilis libero at maxime optio saepe perferendis ipsum, laboriosam pariatur facere consectetur sit consequatur, cumque voluptate amet.</p>
          </div>
        </div>
      </div>
    </section>
       
      
        <!-- cadrd body -->
      </div>
      <!-- card shadow -->
    </div>
    <!-- container -->
  </div>
  <!-- end Page Content
  ===================================================================================================-->


  <!-- footer
  ===================================================================================================-->
  <?php include '../components/footer.php' ?>
  <!-- END footer
  ===================================================================================================-->

</body>


</html>