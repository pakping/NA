<?php
$content = 'everyone';
include '../auth/Sessionpersist.php';
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags 
  ===================================================================================================-->
  <title>Hello, world!</title>
  <meta charset="utf-8">
  <meta NAME="robots" CONTENT="noindex,onfollow">
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

      <div class="card-body p-5">
      
        <h1 class="font-weight-light"></h1>
        <p class="lead"></p>
        <p class="lead"></p>
        <div style="height: 700px"></div>
        <p class="lead mb-0"></p>
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