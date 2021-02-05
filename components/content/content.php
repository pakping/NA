<!-- Page Content -->
<section class="content-info section-bg">
  <div class="container">
    <div class="row">

      <!-- while แสดงรูปภาพ
================================================================================================= -->
      <?php
      require "../db/connect.php";
      $Squery = "SELECT * FROM tagmaster ORDER BY Tag DESC";
      if ($result = mysqli_query($con, $Squery)) {
        while ($img = mysqli_fetch_array($result)) {

      ?>
          <!-- END while แสดงรูปภาพ
================================================================================================= -->
            <!-- card แสดงรูปภาพ
 =================================================================================================-->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card card-1">
                <div class="boximg">
                  <img src="<?php echo $img['path']; ?>" class="card-img-top" alt="..." style="width: 100%;">
                </div>
                <div class="card-body text-center">
                  <h5 class="card-title">สินค้าประเภท <?php echo $img['Tag']; ?></h5>
                  <form action='item.php' method="POST">
                    <input type='hidden' name='directory' value=" <?php echo $img["Tag"] ?>" />
                    <button type="submit" class="btn btn-outline-primary btn-auto btn-block">More</button>
                  </form>
                </div>
              </div>
            </div>
            <!-- /.row -->
      <?php
          
        }
      }

      ?>
    </div>

    <!-- card แสดงรูปภาพ
 =================================================================================================-->
  </div>
  <!-- /.row -->

  </div>
  <!-- /.container -->
</section>