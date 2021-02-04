<?php
$content = 'officer';
include '../auth/Sessionpersist.php';
?>
<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags
===================================================================================================-->
    <title>Hello, world!</title>
    <meta charset="utf-8">
    <META NAME="robots" CONTENT="noindex,onfollow">
 <!-- END Required meta tags 
===================================================================================================-->   


<?php
    include '../components/head/head.php'
    ?>
<link rel="stylesheet" href="../css/style-navbar.css">
<style>
.card {
  background: #fff;
  border-radius: 2px;
  display: inline-block;
  height: 300px;
  margin: 1rem;
  position: relative;
  width: 300px;
}

.card-1 {
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}

.card-1:hover {
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}

.card-2 {
  box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
}

.card-3 {
  box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
}

.card-4 {
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}

.card-5 {
  box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
}

</style>
    
</head>

<body>

<!-- Navigation
=================================================================================================== -->
    <?php
    include('../components/navbar/navbaradmin.php');
    ?>

 <!-- END Navigation
=================================================================================================== -->   
<br><br>


<!-- *** Page Content 
=================================================================================================-->
    <div class="container">

<!-- Page Heading 
=================================================================================================-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                
                <li class="breadcrumb-item "><a href="../Library.php">Library</a></li>

                <li class="breadcrumb-item active" aria-current="page"> item</li>
            </ol>
        </nav>
<!--END Page Heading 
=================================================================================================-->

        <h1 class="my-4">Page Heading
            <small>Secondary Text</small>
        </h1>
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
									<div class="card border-0 shadow">
                                    <img src="<?php echo $img['path'];?>" class="card-img-top" alt="...">
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
        
            ?>
        </div>

<!-- card แสดงรูปภาพ
 =================================================================================================-->

<!-- Pagination  
=================================================================================================-->
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
<!--END Pagination  
=================================================================================================-->

    </div>
    <!-- /.container -->

 <!--***END  Page Content 
=================================================================================================-->

 <!-- Footer 
=================================================================================================-->
    <?php
    include('../components/footer.php')
    ?>
<!--END Footer 
=================================================================================================-->
</body>

</html>