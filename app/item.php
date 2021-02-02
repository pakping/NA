<?php
include '../auth/Sessionpersist.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Hello, world!</title>
</head>

<body>

    <!-- Navigation -->
    <?php
    include('../components/navbar-2.php');
    ?>
    <hr><br><br><br>
    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                
                <li class="breadcrumb-item "><a href="Library.php">Library</a></li>

                <li class="breadcrumb-item active" aria-current="page"> item</li>
            </ol>
        </nav>
        <h1 class="my-4">Page Heading
            <small>Secondary Text</small>
        </h1>
        <div class="row">
            <!-- card แสดงรูปภาพ -->
            <div class="container">
					<div class="row g-2">
						<?php
                        require "../db/connect.php";
                        $dir = $_POST['directory'];
						$Squery = "SELECT * FROM $dir ORDER BY img_id DESC";
						if ($result = mysqli_query($con, $Squery)) {
							while ($img = mysqli_fetch_array($result)) {

						?>
								<!-- Team photo-->


								<div class="col-xl-3 col-md-6 mb-4">
									<div class="card border-0 shadow">
										<a href="<?php echo "../",$img['img_path']; ?>" data-lightbox="<?php echo $img['img_id']; ?>" data-title="<?php echo $img['img_title']; ?>">
											<img src="<?php echo "../",$img['img_path']; ?>" class="card-img-top" alt="...">
										</a>
										<div class="card-body text-center">
											<h5 class="card-title"><?php echo $img['img_title']; ?></h5>
											<div class="card-text text-black-50"><?php echo "../",$img['img_name']; ?></div>
											<a href="<?php	echo "../",$img['img_path']?>" download="<?php $img['img_title'] ?>"><button class="btn">download</button></a>
											<form action= 'function/delete.php' method= "POST">
											<input type='hidden' name='del' value=" <?php echo $img["img_id"] ?>"/>
												<button type='submit'>humgee</button>
											</form>
										</div>
									</div>
								</div>


						<?php
							}
						}
						?>
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->
		
                
        </div>
        <!-- Pagination -->
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

    </div>
    <!-- /.container -->
    <?php
    include('../components/footer.php')
    ?>
</body>

</html>