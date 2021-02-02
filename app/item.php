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
        <!-- while แสดงรูปภาพ -->
            <?php
            $a = 0;
            while ($a <= 10) {
                $a += 1;
            ?>
            <!-- card แสดงรูปภาพ -->
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">รูปที่ <?php echo "$a"; ?></a>
                            </h4>
                            <p class="card-text">กรอกรายละเอียด</p>
                            <button class="btn btn-primary">download</button>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            <?php
            }
            ?>
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