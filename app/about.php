<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags 
  ===================================================================================================-->
  <title>Hello, world!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta NAME="robots" CONTENT="noindex,onfollow">
  <!-- Required meta tags 
  ===================================================================================================-->

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- end Bootstrap CSS
  ===================================================================================================-->

  <!-- CSS
  ===================================================================================================-->
  <link rel="stylesheet" href="../css/style.css">
  <!--END CSS
  ===================================================================================================-->

</head>

<body class="d-flex flex-column">

  <!-- navbar
  ===================================================================================================-->
  <?php
  include('../components/navbar-2.php');
  ?>
  <!-- END navbar
  ===================================================================================================-->

  <hr>
  <br>

  <!-- Page Content
  ===================================================================================================-->
  <div class="container">

    <div class="card border-0 shadow my-5">

      <div class="card-body p-5">
      
        <h1 class="font-weight-light">Fixed Full Page Background Image</h1>
        <p class="lead">In this snippet, the background image is fixed to the body element. Content on the page will scroll, but the image will remain in a fixed position!</p>
        <p class="lead">Scroll down...</p>
        <div style="height: 700px"></div>
        <p class="lead mb-0">You've reached the end!</p>
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