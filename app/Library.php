<?php
$content = "everyone";
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
        .card-1 {
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
            transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
            border-radius: 10px;
        }

        .card-1:hover {
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
        }

        .boximg {
            height: 200px;
            overflow: hidden;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
    </style>

</head>

<body>

    <!-- Navigation
=================================================================================================== -->
    <?php
    include('../components/navbar/navbar.php');
    ?>

    <!-- END Navigation
=================================================================================================== -->
    <br>


    <!-- *** Page Content 
=================================================================================================-->
    <div class="container">

        <!-- Page Heading 
=================================================================================================-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>

                <li class="breadcrumb-item active" aria-current="page"> Library</li>
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
                        <div class="card card-1">
                            <div class="boximg">
                                <img src="<?php echo $img['path']; ?>" class="card-img-top" alt="" style="width: 100%;">
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
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card card-1">
                    <button>upload</button>
                </div>
            </div>
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