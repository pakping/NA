<?php
include 'auth/Sessionpersist.php';
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Hello, world!</title>
</head>

<body>

  <!-- Navigation -->
  <?php
  include('components/navbar.php');
  ?>
  <?php
  include 'components/header.php'
  ?>
  <br>
  <!-- Page Content -->
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
      </div>
    </div>
  </div>

  <?php
  include 'components/content.php'
  ?>

  <?php
  include('./components/footer.php')
  ?>
</body>

</html>