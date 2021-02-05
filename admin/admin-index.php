<?php
$content = 'officer';
include '../auth/Sessionpersist.php';
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags 
  ===================================================================================================-->
  <title></title>
  <meta charset="utf-8">
  <META NAME="robots" CONTENT="noindex,onfollow">
  <!-- END Required meta tags 
  ===================================================================================================-->

  <?php
    include '../components/head/head.php'
    ?>
<link rel="stylesheet" href="../css/style-navbar.css">
</head>

<body>

  <!-- Navigation
  ===================================================================================================-->
  <?php
  include '../components/navbar/navbaradmin.php'
  ?>
  <!-- END Navigation
  ===================================================================================================-->

  <!-- header
  ===================================================================================================-->
  <?php
  include '../components/header.php'
  ?>
  <!-- END header
  ===================================================================================================-->

  <br>
  <!-- Page Content 
  ===================================================================================================-->
  <div class="container">

    <div class="card border-0 shadow my-5">

      <div class="card-body p-5">

        <section class="py-5">
          <div class="container">
            <h5 class="display-4">-- ช่องทางการติดต่อ --</h5>
            <p class="lead"> <a href="https://www.facebook.com/chititpat.Sripoot">faebook-pakping</a> <a href="https://www.facebook.com/jeerachon9/">facebook-G</a>
              <a href="https://www.facebook.com/profile.php?id=100002182427958">facebook-big</a>
            </p>
          </div>
        </section>
        
        <!-- end crad body -->
      </div>
      <!-- end card shadow  -->
    </div>
    <!-- end container -->
  </div>
 <!-- END Page Content 
  ===================================================================================================-->

   <!-- Content 
  ===================================================================================================-->
  <?php
  include '../components/content/content.php'
  ?>
   <!-- END Content 
  ===================================================================================================-->

  <!-- footer
  ===================================================================================================-->
<?php
  include '../components/footer.php'
  ?>
 <!--  END footer
  ===================================================================================================-->

</body>

</html>