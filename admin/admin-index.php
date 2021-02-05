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
  <header class="text-white text-center">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">Build the best landing page for your business or project with bootstrap 5!</h1>
          </div>

          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form action="">
              <div class="row d-flex">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  
                </div>
                <div class="col-12 col-md-3">
                 
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </header>
 
 
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