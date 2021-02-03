<!-- Page Content -->
<div class="container">
  <div class="row">
    
<!-- while แสดงรูปภาพ
================================================================================================= -->
<?php
             require "./db/connect.php";
             $Squery = "SELECT * FROM tagmaster ORDER BY Tag DESC";
             if ($result = mysqli_query($con, $Squery)) {
                 while ($img = mysqli_fetch_array($result)) {

            ?>
<!-- END while แสดงรูปภาพ
================================================================================================= -->
<?php
    $a = 0;
    while ($a <= 2) {
      $a += 1;
    ?>

<!-- card แสดงรูปภาพ
 =================================================================================================-->
                                <div class="col-xl-4 col-md-6 mb-4">
									<div class="card border-0 shadow">
                                    <img src="https://source.unsplash.com/by7IeC6Qa0k/500x350" class="card-img-top" alt="...">
										<div class="card-body text-center">
											<h5 class="card-title">สินค้าประเภท <?php echo $img['Tag']; ?></h5>
											<form action= 'item.php' method= "POST">
											<input type='hidden' name='directory' value=" <?php echo $img["Tag"] ?>"/>
                                            <button type="submit" class="btn btn-outline-primary btn-auto btn-block">More</button>
											</form>
										</div>
									</div>
								</div>
                <!-- /.row -->
            <?php
    }
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

<!--ที่เก็บรูป https://unsplash.com/ -->